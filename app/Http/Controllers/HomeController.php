<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\Content;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bestMedias = Media::latest('id')->take(3)->get();
        $contents = Content::latest('id')->take(8)->get();

        return view('home', compact('bestMedias', 'contents'));
    }
}
