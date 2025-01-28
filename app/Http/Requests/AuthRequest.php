<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|string|min:8', 
            'name' => 'required|string|max:255', 
        ];
    }
}