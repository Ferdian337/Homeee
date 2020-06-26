<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //ke home
    public function home(){
        return view('home');
    }
    public function about(){
    	return view('about');
    }
    public function contact(){
    	return view('contact');
    }

    public function daftar(){
        return view('daftarpenyewa');
    }
}
