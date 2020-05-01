<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      // Щоб користувач міг відправляти данні без входу
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
            'name' => 'required|min:5',
            'email' => 'required|min:5',
            'message' => 'required|min:5'
        ];
    }
}
