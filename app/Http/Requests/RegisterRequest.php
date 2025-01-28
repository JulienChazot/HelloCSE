<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',                   
            'email' => 'required|email|unique:administrators,email', 
            'password' => 'required|string|min:8|confirmed',        
        ];
    }
}