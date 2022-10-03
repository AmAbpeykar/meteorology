<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function loginPage(){

        return view('login');

    }

    public function registerPage()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'exists:users',
            'password' => 'min:3|max:20',

        ]);

        if (Auth::attempt($validated)){

            return redirect()->route('home');

        }

        return redirect()->route('login-page');


    }

    public function register(Request $request)
    {


        // We Can Use Confirmed In Validate of Password Too

        $validated = $request->validate([
            'password' => 'confirmed|min:3|max:20',
            'email' => 'unique:users|email',
            'name' => 'min:3|max:20',
        ]);

        User::create($validated);

        // For Welcome Email

//        Mail::to($validated['email'])->send(new WelcomeMail());

        if(Auth::attempt($validated)){

            return redirect()->route('register-page');

        }

        return redirect()->route('home');
    }
}
