<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consignment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consignment.consignment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                //sender validation
                'sname' => 'required',
                'scontact' => 'required',
                'semail' => 'required',
                'saddress'=> 'required',
                'spin' => 'required',
                'scity' => 'required',
                'sstate' => 'required',

                //receiver validation
                'rname' => 'required',
                'rcontact' => 'required',
                'remail' => 'required',
                'ranumber' => 'required',
                'raddress' => 'required',
                'rpin' => 'required',
                'rcity' => 'required',
                'rstate' => 'required',

                //product or parcel validation
                'pname' => 'required',
                'pweight' => 'required',
            ],
            [
                //sender validation message
                'sname.required'=>'Please enter sender  name.',
                'scontact.required'=>'Please enter sender contact number.',
                'semail.required'=>'Please enter sender enmail.',
                'saddress.required'=>'Please enter sender address.',
                'spin.required'=>'Please enter sender pin.',
                'scity.required'=>'Please enter sender city.',
                'sstate.required'=>'Please enter sender state.',

                //receiver validation message
                'rname.required'=>'Please enter receiver name.',
                'rcontact.required'=>'Please enter receiver contact number.',
                'remail.required'=>'Please enter receiver email.',
                'ranumber.required'=>'Please enter receiver alternate contact number.',
                'raddress.required'=>'Please enter receiver address.',
                'rpin.required'=>'Please enter receiver city pin code.',
                'rcity.required'=>'Please enter receiver city.',
                'rstate.required'=>'Please enter receiver state.',

                //product or parcel validation message
                'pname'=>'Please enter consignment name.',
                'pweight'=>'Please enter consignment weight.',
            ]
    
            );
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
