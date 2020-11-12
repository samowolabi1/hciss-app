<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Demo;
use App\Letter;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $demos = Demo::all();
        $letters = Letter::all();
        $i = 0;

        //return $users;

        return view('layouts.dashboard',compact('users','demos','letters','i'));
    }

    public function start(){
        return view('layouts.start');
    }
}
