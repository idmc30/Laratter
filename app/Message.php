<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //tabla messages
    //agregando la propiedad guarded para proteger mis datos
    //no llegan a insetar en forma masiva
    
    protected $guarded= [];

    public function user()
    {
        
        //sirve para retornar la relacion que tiene esta tabla message con la table user por esto se esta pasando el modelo User dentro de la funcion 
    	return $this->belongsTo(User::class);
    }
}
