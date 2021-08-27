<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title'       => [''],
            'description' => [''],
        ];
    }

    public function authorize()
    {
        dd("dfdsa");
        return auth()->user()->can('work-pottorff');
    }
}
