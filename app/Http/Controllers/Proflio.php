<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Proflio extends Controller
{
    public function showproflio()
    {
        return view('adimn.protflio');
    }
}
