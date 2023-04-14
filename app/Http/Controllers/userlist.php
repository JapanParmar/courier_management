<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adduser;

class userlist extends Controller
{
    public function index()
    { 
        $data = adduser::simplePaginate(5);
        return view('user.userlist',['userlis'=>$data]);
    }
}
