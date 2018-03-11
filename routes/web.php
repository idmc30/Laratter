<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$links=['https://platzi.com/laravel'=>"Curso de Laravel",
            'https://laravel.com'=>"Página de Laravel"
             ];
    return view('welcome',[//'teacher'=>'Irwin Morales',
    	'links'=>$links]);
});


Route::get('/acerca', function () {
    //return "Acerca de nostros";
    return view('about');
});
