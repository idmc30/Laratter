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

       //	dd($request->all());
          
        //   return 'Created!';

        $this->validate($request,[
             'message'=>['required','max:30']
         ],[
         	'message.required' => 'Por favor, escriba su mensaje ',
         	'message.max' => 'El mensajes no puede superar los 30 caracteres'

         ]);

        // return 'creado!';

       }
        



}
