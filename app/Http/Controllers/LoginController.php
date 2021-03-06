<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginStore(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
        
        return response()->json('successfully login');

    }
}
