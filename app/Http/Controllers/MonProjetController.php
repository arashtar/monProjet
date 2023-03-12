<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonProjetController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about(){
        return view('about');
    }
    public function chairs(){
        return view('chairs');
    }
    public function sofas(){
        return view('sofas');
    }
    public function contact(){
        return view('contact');
    }
    public function formContact(Request $request){
       
        return view('contact', ['data' => $request]);
    }
}

