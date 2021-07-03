<?php

namespace App\Http\Controllers;

use App\Content;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Profile::select('email')->first();
        $users = Profile::select('email', 'image')->get();
        $content = Content::select('cover', 'Judul', 'created_at', 'id', 'id_user', 'description');
        $content = Content::inRandomOrder()->limit(3)->get();
        $article = Content::select('cover', 'Judul', 'created_at', 'id', 'id_user', 'description');
        $article = Content::orderBy('id', 'DESC')->get();
        // return $content;
        return view(
            'main/content',
            [
                'users' => $users,
                'content' => $content,
                'articles' => $article
            ]
        );
    }
    public function test()
    {
        return "HAI";
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
