<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        // $content = Content::select('');

        $id = $request->route('id');
        $content = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('profiles', 'profiles.email', '=', 'users.email')
            ->select('profiles.username', 'profiles.bio', 'profiles.image', 'content.*')
            ->where('content.id', '=', $id)
            ->get();
        return view('main/detail', [
            'content' => $content
        ]);
    }
}
