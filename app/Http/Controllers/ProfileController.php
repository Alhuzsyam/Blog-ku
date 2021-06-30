<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Profile';
        $email = auth()->user()->email;
        $id = auth()->user()->id;
        $user =  Profile::select('*')->where('email', '=', $email)->get();
        $content =  Content::select('cover', 'content', 'judul', 'created_at', 'description')->where('id_user', '=', $id)->get();
        $count = DB::table('content')->where('id_user', '=', $id)->count();
        // return $user;
        return view(
            'admin/profile',
            ['title' => $name],
            [
                'total' => $count,
                'profiles' => $user,
                'content' => $content
            ]
        );
    }
    public function profiles()
    {
        $name = 'Profile';
        // $data = URL::current();
        $email = auth()->user()->email;
        $user =  Profile::select('*')->where('email', '=', $email)->get();
        // return $data;
        return view('admin/editprofile', ['title' => $name], ['profiles' => $user]);
    }
    public function updateprofile(Request $request)
    {
        // $request->validate(
        //     [

        //         'username' => 'required|unique:profiles',
        //         'alamat' => 'required',
        //         'bio' => 'required|min:150',
        //     ]
        // );

        // $user = Profile::find($id);
        // $user->name = $request->username;
        // $user->alamat = $request->alamat;
        // $user->bio = $request->bio;
        // $user->save();
        // return $user;
        $id = auth()->user()->email;
        DB::table('profiles')->where('email', $id)->update([
            'username' => $request->username,
            'alamat' => $request->alamat,
            'bio' => $request->bio,
        ]);
        return redirect('/profile/editprofile');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        // return $profile;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
