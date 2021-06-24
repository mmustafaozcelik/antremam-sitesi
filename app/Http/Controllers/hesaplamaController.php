<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hesaplamaController extends Controller
{
    public function get_hesaplama(){
        return view('hesaplama');
    }
}
