<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
         return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            
             'message'=>['required','max:30']
         
        ];
    }

    //agregando un tercer metodo para personalizar los mensajes

    public function messages(){

        return [
            'message.required' => 'Por favor, escriba su mensaje ',
            'message.max' => 'El mensajes no puede superar los 30 caracteres.'

         ];
    }
}
