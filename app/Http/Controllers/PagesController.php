<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

    	return view('home');
    }

    public function about(){
    	return view('about');
    }

    public function mens(){
    	return view('mens');
    }

     public function womens(){
    	return view('womens');
    }

    public function contact(){
    	return view('contact');
    }

   
}
