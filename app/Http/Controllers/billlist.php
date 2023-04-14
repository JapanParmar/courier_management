<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class billlist extends Controller
{
    public function index()
    { 
        return view('bill.billlist');
    }
}
