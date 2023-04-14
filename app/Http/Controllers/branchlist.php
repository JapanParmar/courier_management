<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;

class branchlist extends Controller
{
    public function index()
    {
        $data = branch::simplePaginate(5);
        return view('branch.branchlist',['branchlist'=>$data]);
    }
}
