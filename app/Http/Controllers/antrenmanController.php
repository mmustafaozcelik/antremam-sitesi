<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class antrenmanController extends Controller
{
    public function get_antrenman()
    {
        return view('antrenman');
    }
}
