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
    	$user= $this->finByUsername($username);
    		return view('users.show',['user'=> $user]);

        }


     public function follows($username){

     	$user= $this->finByUsername($username);
    		return view('users.follows',[
    			'user'=> $user,
    			'follows'=> $user->follows,

    		]);
     } 



     public function followers($username, Request $request){
      
      
      $user= $this->finByUsername($username);

      return view('users.follows',[
      	          'user'=> $user,
      	          'follows'=>$user->followers
      	      ] );


     }


     public function follow($username, Request $request){
      
      
      $user= $this->finByUsername($username);

      $me= $request->user();

      $me->follows()->attach($user);

      return redirect("/$username")->withSuccess('Usuario seguido!');


     }








     public function unfollow($username, Request $request){
      
      
      $user= $this->finByUsername($username);

      $me= $request->user();

      $me->follows()->detach($user);

      return redirect("/$username")->withSuccess('Usuario no seguido!');


     }



     private function finByUsername($username){

     	return User::where('username', $username)->first();
     }
  }

