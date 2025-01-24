<?php

namespace App\Http\Controllers;

use App\Mail\LoanInviteNewUserMail;
use App\Models\Loan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoanController extends Controller
{
    public function index()
    {
        return view('loans.index')
            ->with([
                'myLoans' => Loan::where('owner_id', auth()->user()->id)->paginate(8),
                'givenLoans' => Loan::where('loaner_id', auth()->user()->id)->paginate(8)
            ]);
    }

    public function create()
    {
        return view('loans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'period' => 'required|in:weeks,months',
            'period_count' => 'required|integer|min:1',
            'interest_rate' => 'nullable|numeric|min:0|max:100',
        ]);

        $loan = new Loan();
        $loan->owner_id = auth()->user()->id;
        $loan->loaner_id = null;
        $loan->title = $request->title;
        $loan->description = $request->description;
        $loan->amount = $request->amount;
        $loan->period = $request->period;
        $loan->period_count = $request->period_count;
        $loan->interest_rate = $request->interest_rate ?? 0;
        $loan->status = 'pending';
        $loan->start_date = now();
        $loan->save();

        // Controleer op de actie en stuur door naar de juiste route
        if ($request->action === 'store_and_invite') {
            return redirect()->route('loans.invite', $loan)->with('success', 'Lening succesvol aangemaakt en uitnodigen gestart.');
        }

        return redirect()->route('loans')->with('success', 'Lening succesvol aangemaakt.');
    }


    public function show(Loan $loan)
    {
        $installments = json_decode($loan->installments, true);
        $paymentSchedule = $this->calculatePaymentSchedule($loan);

        return view('loans.show', compact('loan', 'installments', 'paymentSchedule'));
    }

    private function calculatePaymentSchedule(Loan $loan)
    {
        $installmentsData = json_decode($loan->installments, true) ?? [];

        $totalPaid = 0.0;
        foreach ($installmentsData as $installment) {
            $totalPaid += floatval($installment['amount'] ?? 0);
        }

        $schedule = [];
        $startDate = Carbon::parse($loan->start_date);

        // Bereken de totale som inclusief rente
        $totalWithInterest = $loan->amount + ($loan->amount * $loan->interest_rate / 100);
        $needToPayPerPeriod = $totalWithInterest / $loan->period_count;

        $remainingPaid = $totalPaid;

        for ($i = 0; $i < $loan->period_count; $i++) {
            if ($loan->period === 'months') {
                $dueDate = $startDate->copy()->addMonths($i);
            } elseif ($loan->period === 'weeks') {
                $dueDate = $startDate->copy()->addWeeks($i);
            } else {
                continue;
            }

            $allocated = min($remainingPaid, $needToPayPerPeriod);
            $remainingPaid -= $allocated;

            if ($allocated >= $needToPayPerPeriod) {
                $status = 'Betaald';
            } else {
                if ($dueDate->isPast()) {
                    $status = 'Achterstallig';
                } else {
                    $status = 'Open';
                }
            }

            $schedule[] = [
                'due_date'    => $dueDate->format('Y-m-d'),
                'need_to_pay' => round($needToPayPerPeriod, 2),
                'interest'    => round(($loan->amount * $loan->interest_rate / 100) / $loan->period_count, 2),
                'amount'      => round($allocated, 2),
                'status'      => $status,
                'period'      => $loan->period,
            ];
        }

        return $schedule;
    }




    public function edit(Loan $loan)
    {
    }

    public function update(Request $request, Loan $loan)
    {
    }

    public function destroy(Loan $loan)
    {
    }
    public function invite(Loan $loan)
    {
        return view('loans.invite', compact('loan'));
    }

    public function checkUser(Request $request, Loan $loan)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            return redirect()->route('loans.invite', $loan)->with('user_status', [
                'exists' => true,
                'email' => $request->email,
                'message' => 'Gebruiker gevonden. Klik op uitnodigen om te bevestigen.'
            ]);
        } else {
            return redirect()->route('loans.invite', $loan)->with('user_status', [
                'exists' => false,
                'email' => $request->email,
                'message' => 'Nieuwe gebruiker. Wilt u deze persoon uitnodigen voor uw lening en SnapPay?'
            ]);
        }
    }

    public function sendInvite(Request $request, Loan $loan)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            Mail::to($user)->send(new ExistingUserInvitation($loan));

            return redirect()->route('loans.show', $loan)->with('status', 'Uitnodiging verzonden naar bestaande gebruiker.');
        } else {
            Mail::to($request->email)->send(new LoanInviteNewUserMail($loan, $request->email));

            return redirect()->route('loans.show', $loan)->with('status', 'Nieuwe gebruiker uitgenodigd en gekoppeld aan de lening.');
        }
    }
}
