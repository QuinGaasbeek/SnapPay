<?php

namespace App\Http\Controllers;

use App\Enums\LoanStatusses;
use App\Models\Loan;

class DashboardController extends Controller
{
    public function index()
    {
        $loans = Loan::where('status', LoanStatusses::PENDING->value);

        $remainingAmount = 0;

        // Loop through each loan and add the difference to $remainingAmount
        $loans->each(function ($loan) use (&$remainingAmount) {
            $installments = collect(json_decode($loan->installments, true))->sum('amount');
            $remainingAmount += ($loan->amount - $installments);
        });

        $stats = [
            ['title' => 'Actieve Leningen', 'value' => $loans->count(), 'description' => "Totaal uitstaand: €" . $remainingAmount],
            ['title' => 'Actieve Spaarpotjes', 'value' => 20, 'description' => "Totaal gespaard: €30"],
            ['title' => 'Voltooide Transacties', 'value' => 30, 'description' => 'Afgelopen 30 dagen'],
        ];
        return view('dashboard')->with(['stats' => $stats]);
    }
}
