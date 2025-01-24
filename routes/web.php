<?php

use App\Http\Controllers\LoanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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
Route::get('/loans/show/{loan}', [\App\Http\Controllers\LoanController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('loans.show');
Route::get('/loans/{loan}/invite', [\App\Http\Controllers\LoanController::class, 'invite'])->name('loans.invite');
Route::post('/loans/{loan}/check-user', [\App\Http\Controllers\LoanController::class, 'checkUser'])->name('loans.check-user');
Route::post('/loans/{loan}/send-invite', [\App\Http\Controllers\LoanController::class, 'sendInvite'])->name('loans.send-invite');
Route::post('/loans/check-user', [LoanController::class, 'checkUserOnCreate'])->name('loans.check-user-on-create');


//Temporary invite link for a loan
Route::get('/register/invite', [RegisterController::class, 'showInviteForm'])
    ->name('register.invite')
    ->middleware('signed');
Route::post('/register/create', [RegisterController::class, 'create'])
    ->name('register.invite.create');








require __DIR__.'/auth.php';
