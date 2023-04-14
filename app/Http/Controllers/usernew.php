<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\adduser;

class usernew extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
    // try {
    //     DB::connection()->getPdo();
    // } catch (\Exception $e) {
    //     die("Could not connect to the database.  Please check your configuration. error:" . $e );
    // }

        return view('user.user');
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
            'uname'=>'required',
            'ulname'=>'required',
            'unumber'=>'required',
            'uemail'=>'required',
            'upassword'=>'required',
        ],
        [
            'uname.required'=>'The first name field is required.',
            'ulname.required'=>'The last name field is required.',
            'unumber.required'=>'The contact number field is required.',
            'uemail.required'=>'The email field is required.',
            'upassword.required'=>'The password field is required.',
            //'upassword.min'=>'Password is too short',
            //'unumber.min'=>'Enter valid contact number',
        ]
        );


        $user = adduser::all();

        $name = $request->input('uname');
        $lastname = $request->input('ulname');
        $number = $request->input('unumber');
        $email = $request->input('uemail');
        $branch = $request->input('branch');
        $pass = $request->input('upassword');

      $check = adduser::insert([
            'name'=>$name,
            'lastname'=>$lastname,
            'number'=>$number,
            'email'=>$email,
            'password'=>$pass,
            'branch'=>$branch
        ]);

        if($check) {
            return redirect('/userlist');
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
