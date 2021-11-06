<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home(){
        return view('home', [
            'title' => 'Home',
        ]);
    }

    public function about(){
        return view('about', [
            'title' => 'About',
            'imagef' => 'Felix2.jpg',
            'imageb' => 'Bryan.jpg',
            'imaged' => 'Daren.jpg',
            'imagea' => 'Alfred.jpg',
            'imager' => 'Reygen.jpg'
        ]);
    }

}
