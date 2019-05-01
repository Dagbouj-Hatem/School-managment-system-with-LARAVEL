<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;

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
        $events = [];
        $data = \App\Examen::all();
        if($data->count()) {
            foreach ($data as $e) {
                $events[] = Calendar::event(
                    $e->name,
                    true,
                    new \DateTime($e->date),
                    new \DateTime($e->date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        //'url' => 'pass here url and any route',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('home',compact('users','books','msgs','calendar'));
    }
}
