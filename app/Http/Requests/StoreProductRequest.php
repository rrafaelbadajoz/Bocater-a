<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:100',
            'short'=>'max:255',
            'desc'=>'max:255',
            'price'=>'required|numeric',
            //'img'=>'required|max:255',
/*
            'file'=>[
                'required',
                //'image', //Permite todos los tipos de imagen
                'mimes:png,jpg,jpeg,gif', //Permitimos estos tipos específicos de imagen
                //'size:1024', //Tamaño en KB
                //'dimensions:min_width=100, min_height=100, max_width:1000, max_height:1000', //Controlamos las dimensiones, aunque esto está en desuso. Ahora se suele hacer en la parte del cliente
            ]
*/
        ];
    }
}
