<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // por defecto es false pero lo hemos modificado para que se pueda inocar
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() // validacion de nuestros datos
    {
        return [
            //
            'email'=>'required|unique:users,email', // regla para que sea unico en la base de datos,
            'username'=>'required|unique:users,username',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password',
        ];
    }
}
