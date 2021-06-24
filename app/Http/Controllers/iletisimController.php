<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iletisimController extends Controller
{
    public function get_iletisim()
    {
        return view('iletisim');
    }
}
