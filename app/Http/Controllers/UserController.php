<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $name = "Mahmud Ibraim";
        $user = array(
            'id' => 1,
            'name' => 'Mahmud Ibrahim',
            'email' => 'mahmud.ibrahim@gmail.com',
            'phone' => '088-555-5555'
        );
        return view('user', compact('name','user'));
    }
}
