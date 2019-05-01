<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all()->count();
        $books = \App\Book::all()->count();
        $msgs= \App\MessageForum::all()->count();
        //dd( $msg);
        return view('home',compact('users','books','msgs'));
    }
}
