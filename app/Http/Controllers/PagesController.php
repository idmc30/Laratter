<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home(){
       
       $links=['https://platzi.com/laravel'=>"Curso de Laravel",
            'https://laravel.com'=>"Página de Laravel"
             ];
          return view('welcome',['teacher'=>'Irwin Morales','links'=>$links]);

    }

    public function about(){

    	 return view('about');
    }
}
