<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //tabla messages
    //agregando la propiedad guarded para proteger mis datos
    //no llegan a insetar en forma masiva
    
    protected $guarded= [];
}
