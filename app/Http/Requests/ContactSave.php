<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactSave extends FormRequest
{
    public function rules()
    {
        return [
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
