<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Company extends Controller
{
    public function showcompany()
    {
        return view('front.company');
    }
}
