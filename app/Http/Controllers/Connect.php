<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Connect extends Controller
{
    public function showconnect()
    {
        return view('front.connect');
    }
}
