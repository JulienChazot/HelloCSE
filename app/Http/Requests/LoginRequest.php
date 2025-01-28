<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * 
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  
    }

    /**
     * 
     *
     * @return array
     */
    public function rules()
    {
         // On mets une sécurité en plus pour les informations d'authentification (permet d'éviter les requetes direct dans les identifiants)
        return [
            'email' => 'required|email',         
            'password' => 'required|string|min:8', 
        ];
    }
}
