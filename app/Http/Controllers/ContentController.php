<?php

namespace App\Http\Controllers;

use App\Content;
use App\Profile;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = auth()->user()->email;
        $user =  Profile::select('*')->where('email', '=', $email)->get();
        $name = "Content";
        return view('admin/content', ['title' => $name], ['profiles' => $user]);
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
                'judul' => 'required',
                'deskripsi' => 'required',
                'content' => 'required',
                'file' => 'required|mimes:jpeg,bmp,png',
            ]
        );
        $id = auth()->user()->id;
        $file = $request->file('file');
        Content::create([
            'id_user' => $id,
            'judul' => $request->judul,
            'description' => $request->deskripsi,
            'content' => $request->content,
            'cover' => $file->getClientOriginalName(),
        ]);
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $file->getClientOriginalName());
        return redirect('/content/write')->with('status', 'Pendaftaran Berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
