<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parcels;

class parcellist extends Controller
{
    public function index()
    {
        $parceldata = parcels::simplePaginate(5);
        return view('parcel.parcellist',['parcellists'=>$parceldata]);
    }
}
