<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Loan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;


class RegisterController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'iban' => ['nullable', 'string', 'max:34', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'terms' => ['required', 'accepted'],
            'loan_id' => ['sometimes', 'exists:loans,id'],
        ]);
    }

    public function create(Request $request)
    {
        $validator = $this->validator($request->all());
        $data = $validator->validated();

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'full_name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'iban' => $data['iban'],
            'password' => Hash::make($data['password']),
        ]);

        if (isset($data['loan_id'])) {
            $loan = Loan::find($data['loan_id']);
            if ($loan) {
                $loan->loaner()->associate($user);
                $loan->save();
            }
        }

        return redirect()->route('loans.show', ['loan' => Loan::find($data['loan_id'])]);
    }

    public function showInviteForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'loan' => 'required|exists:loans,id',
        ]);

        $loan = Loan::findOrFail($request->loan);

        return view('auth.register-invite', [
            'email' => $request->email,
            'loan' => $loan,
        ]);
    }

}