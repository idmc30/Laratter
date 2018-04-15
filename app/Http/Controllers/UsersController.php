<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function show($username){


       //where('nombre de la columna', $username)
       //firs solo traeme una solo                       
    	$user= User::where('username', $username)->first();
    		return view('users.show',['user'=> $user]);

        }
  }

