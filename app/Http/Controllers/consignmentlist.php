<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consignmentlist extends Controller
{
    public function index()
    { 
        return view('consignment.consignmentlist');
    }
}
