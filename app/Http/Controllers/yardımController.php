<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yardımController extends Controller
{
    public function get_yardım()
    {
        return view('yardım');
    }
}
