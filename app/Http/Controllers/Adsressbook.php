<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adsressbook extends Controller
{
    public function index()
    {
        return view('address.index');
    }
}
