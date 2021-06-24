<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class girisController extends Controller
{
    public function get_giris()
    {
        return view('giris');
    }
}
