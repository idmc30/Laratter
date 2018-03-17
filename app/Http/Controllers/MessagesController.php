<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //

    // public function show($id){
	    public function show(Message $message){
    
    	//ir a buscar el message por id 
    	//
    	//luego una view de message

    	// $message= Message::find($id);
    	return view('message.show',['message'=> $message]);

        }

     
       public function create(Request $request){

       	dd($request->all());
          
          return 'Created!';

       }
        



}
