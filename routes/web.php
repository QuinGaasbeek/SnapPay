<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Loans
Route::get('/loans', [\App\Http\Controllers\LoanController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('loans');

//create
Route::get('/loans/create', [\App\Http\Controllers\LoanController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('loans.create');
Route::post('/loans/store', [\App\Http\Controllers\LoanController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('loans.store');



require __DIR__.'/auth.php';
