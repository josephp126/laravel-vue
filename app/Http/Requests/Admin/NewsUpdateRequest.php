<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
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
            'uuid'        => ['required', 'string', 'max:36'],
            'title'       => ['required', 'string'],
            'slug'        => ['string'],
            'summary'     => ['string'],
            'content'     => ['required', 'string'],
            'is_homepage' => ['string'],
        ];
    }
}
