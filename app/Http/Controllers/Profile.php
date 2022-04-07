<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    public function showprofile()
    {
        return view('adimn.profile');
    }
}
