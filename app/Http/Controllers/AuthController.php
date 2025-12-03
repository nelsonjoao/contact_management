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
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
                'password.min' => 'The password must contain a min of :min caracters.',
                'password.max' => 'The password must contain a maximum of :max caracters.',
                'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, and one number.',
            ]
        );

       
        $user = User::where('email', $credentials['email'])->first();

      
        if(!$user){
            return back()->withInput()->with([
                'invalid_login' => 'Invalid Login.'
            ]);
        }

       
        if(!password_verify($credentials['password'], $user->password)){
            return back()->withInput()->with([
                'invalid_login' => 'Inválid Login.'
            ]);
        }

      
        $request->session()->regenerate();
        Auth::login($user);
        
      
        return redirect()->intended(route('home'));
    }

    
    public function logout(): RedirectResponse
    {
        // logout
        Auth::logout();
        return redirect()->route('login');
    }

}