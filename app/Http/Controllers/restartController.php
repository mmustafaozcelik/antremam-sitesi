<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restartController extends Controller
{
    public function get_restart()
    {
        return view('restart');
    }
}
