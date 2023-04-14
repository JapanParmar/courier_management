<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bills;

class bill extends Controller
{
    public function index($rowNumber)
    { 

        $billdata = bills::skip($rowNumber - 1)->take(1)->get();
        return view('bill.bill', ['bill' => $billdata]);
        // $billdata = bills::paginate('1');
        // return view('bill.bill',['bill'=>$billdata]);

        
    }
}
