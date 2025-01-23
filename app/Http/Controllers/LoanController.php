<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

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
            'loaner_email' => 'required|email',
            'interest_rate' => 'nullable|numeric|min:0|max:100',
        ]);

        $loaner = User::where('email', $request->loaner_email)->first();

        $loan = new Loan();
        $loan->owner_id = auth()->user()->id;
        $loan->loaner_id = $loaner ? $loaner->id : null;
        $loan->title = $request->title;
        $loan->description = $request->description;
        $loan->amount = $request->amount;
        $loan->period = $request->period;
        $loan->period_count = $request->period_count;
        $loan->interest_rate = $request->interest_rate ?? 0;
        $loan->status = 'pending';
        $loan->start_date = now();
        $loan->save();

        if (!$loaner) {
            // TODO: Implement invitation email logic
            // For now, we'll just add a flash message
            session()->flash('message', 'Uitnodiging verzonden naar ' . $request->loaner_email);
        }

        return redirect()->route('loans')->with('success', 'Lening succesvol aangemaakt.');
    }

    public function show(Loan $loan)
    {
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
}
