<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

     public function authenticate(Request $request): RedirectResponse
    {
        // form validation
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8|max:32|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
            ],
            [
                'email.required' => 'O Email é obrigatório',
                'password.required' => 'A senha é obrigatória.',
                'password.min' => 'A senha deve conter no mínimo :min caracteres.',
                'password.max' => 'A senha deve conter no máximo :max caracteres.',
                'password.regex' => 'A senha deve conter pelo menos uma letra maiúscula, uma letra minúscula e um número.',
            ]
        );

        // verificar se o user existe
        $user = User::where('email', $credentials['email'])->where('active', true)->first();

        // verifica se o user existe
        if(!$user){
            return back()->withInput()->with([
                'invalid_login' => 'Login inválido.'
            ]);
        }

        // verificar se a password é valida
        if(!password_verify($credentials['password'], $user->password)){
            return back()->withInput()->with([
                'invalid_login' => 'Login inválidoOO.'
            ]);
        }

        // login propriamente dito!
        $request->session()->regenerate();
        Auth::login($user);

        // redirecionar
        return redirect()->intended(route('home'));
    }

}