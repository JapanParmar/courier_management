<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\branchrequest;

use App\Models\insertbranch;

class branch extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('branch.branch');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    echo "<pre>";

    $request->validate(
        [
            'bname' => 'required',
            'bcontact' => 'required|numeric',
            'bbuilding' => 'required',
            'bcity' => 'required',
            'bstate' => 'required',
            'bpin' => 'required',
            'bcountry' => 'required',
        ],
        [
            'bname.required'=>'Please enter your branch name.',
            'bcontact.required'=>'Please enter your contact number.',
            'bcontact.numeric' => 'Contact number should only contain numbers.',
            'bbuilding.required'=>'Please enter your building name.',
            'bcity.required'=>'Please enter your city name.',
            'bstate.required'=>'Please enter your state name.',
            'bpin'=>'Please enter your city pin code.',
            'bcountry'=>'Please enter your country name.',
        ]

        );

        $branch = insertbranch::all();
 
        $name = $request->input('bname');
        $contact = $request->input('bcontact');
        $building = $request->input('bbuilding');
        $city = $request->input('bcity');
        $state = $request->input('bstate');
        $pin = $request->input('bpin');
        $country = $request->input('bcountry');

      $check = insertbranch::insert([
            'name'=>$name,
            'contact'=>$contact,
            'building'=>$building,
            'city'=>$city,
            'state'=>$state,
            'pin'=>$pin,
            'country'=>$country,
        ]);

        if($check) {
            return redirect('/branchlist');
            
        }

        else echo'<h1>Failed</h1>';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
