<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
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

     
       // public function create(Request $request){
       public function create(CreateMessageRequest $request){
       //	dd($request->all());
          
        //   return 'Created!';

        // $this->validate($request,,);

        // return 'creado!';
        $message = Message::create([
               'content'=>$request->input('message'),
               'image' => 'http://lorempixel.com/600/338?'.mt_rand(0,1000)
        ]);
            return redirect('/messages/'.$message->id);
       }
        




}
