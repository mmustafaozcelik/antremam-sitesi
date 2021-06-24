<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hakkımızdaController extends Controller
{
    public function get_hakkızmızda()
    {
        return view('hakkımızda');
    }
}
