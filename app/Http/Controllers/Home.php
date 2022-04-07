<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function showIndex()
    {
        return view("index");
    }
    public function showLogin()
    {
        return view("login");
    }
}
