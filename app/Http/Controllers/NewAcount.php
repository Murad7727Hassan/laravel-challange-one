<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewAcount extends Controller
{
    public function shownewacount()
    {
        return view('front.newacount');
    }
}
