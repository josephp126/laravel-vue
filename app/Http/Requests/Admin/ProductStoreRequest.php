<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'description' => ['required', 'string'],
            'link'        => ['string'],
            'code'        => ['required', 'string'],
            'more_info'   => ['required', 'string'],
            'subtitle'    => ['required', 'string'],
            'title'       => ['required', 'string'],
        ];
    }
}
