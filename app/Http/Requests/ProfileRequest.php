<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'image' => 'nullable|image|max:10240',
            'status' => 'required|in:inactive,pending,active',
        ];
    }

    /**
     * 
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Le prénom est obligatoire.',
            'last_name.required' => 'Le nom est obligatoire.',
            'image.image' => 'L\'image doit être un fichier de type image.',
            'status.required' => 'Le statut est obligatoire.',
        ];
    }
}