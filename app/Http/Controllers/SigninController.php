<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SigninController extends Controller
{
     //creating account
     public function store(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'role' => ['required'],
            'password' => 'required|confirmed|min:4'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        // dd($formFields);
        $user = User::create($formFields);

        return redirect('/login')->with('message', 'account created successfully');
    }

    public function login(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            if(auth()->user()->role == 'Lecturer') {
                return redirect('/home')->with('message', 'Sign In Successfully');
            }else{
                return redirect('/chatify')->with('message', 'Sign In Successfully');
            }
        }
        return back()->with('message', 'There is error,');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message','You have been logged out!');
    }
}
