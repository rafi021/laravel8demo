<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $name = "Mahmud Ibraim";
        return view('user', compact('name'));
    }
}
