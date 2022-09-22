<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function GuzzleHttp\Promise\all;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','string']
        ]);

        /* El metodo attemp recibe un texto plano
         * lo cual lo transforma el $request->validate()
         * tambien recibe otro parametro de verdadero falso
         * pero el campo o checbox remember envia dato tipo 'on'
         * para tranformarlo en un boolean se debe utilizar
         * $request->boolean('remember') lo cambia a true o false
         */
        if(! Auth::attempt($credentials, $request->boolean('remember'))){
            // Login fail
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
                'password' => __('auth.password'),
            ]);
        }
        //Login success
        $request->session()->regenerate();

        return redirect()->intended()->with('status','You are logged in');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')->with('status','You are logged out!');
    }
}
