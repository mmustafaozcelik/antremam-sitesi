<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kayitController extends Controller
{
    public function get_kayit(){
        return view('kayit');
    };
}
