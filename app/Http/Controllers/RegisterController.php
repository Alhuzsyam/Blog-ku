<?php

namespace App\Http\Controllers;

use App\Register;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth2.register');
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
                'email' => 'required|email|unique:users',
                'name' => 'required|max:10|unique:users|regex:/^\S*$/u',
                'password' => 'required|min:8',
                'password2' => 'required|same:password',
            ],
            [

                // custom message
                // 'email.required' => 'password tidak sama'
            ]
        );

        $random = Str::random(40);
        // Register::create($request->all());
        Register::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => $request->$random,
            // 'image' => 'avatar.png',
        ]);



        Profile::create([
            'email' => $request->email,
            'alamat' => '.',
            'hp' => '.',
            'ttl' => '.',
            'image' => 'avatar.png',
            'bio' => '.',
            'uername' => '.'

        ]);


        return redirect('/login')->with('status', 'Pendaftaran Berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
