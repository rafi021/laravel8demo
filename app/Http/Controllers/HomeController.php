<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hi from HomeController';
    }

    public function username($name)
    {
        return 'Hi from HomeController, UserNAME:' . $name;
    }

}
