<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');

        return redirect()->route('welcome', ['firstname' => $firstName, 'lastname' => $lastName]);
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');

        return view('welcome', ['firstname' => $firstName, 'lastname' => $lastName]);
    }
}
