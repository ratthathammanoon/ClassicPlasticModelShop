<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('id', 'password'))) {
            return redirect('/admin');
        } else {
            return redirect('/login')->with('successError', 'The employee number and password you entered did not match our records. Please double-check and try again.');
        }
    }
}
