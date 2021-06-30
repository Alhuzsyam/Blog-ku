<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class DashboardController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        $name = 'Dashboard';
        $user =  Profile::select('*')->where('email', '=', $email)->get();
        // return $user;
        return view('layout.main', ['profiles' => $user], ['title' => $name]);
    }
    public function dashboard()
    {
        $email = auth()->user()->email;
        $user =  Profile::select('*')->where('email', '=', $email)->get();
        $name = 'Dashboard';
        return view('admin.index', ['title' => $name], ['profiles' => $user]);
    }
}
