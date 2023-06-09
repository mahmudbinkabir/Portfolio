<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelicoptController extends Controller
{
    public function heli()
    {
        return view('fontend.helicopt.helicopt');
    }
}
