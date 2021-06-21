<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'        => [],
            'bg_image_id' => [],
            'height_lg'   => [],
            'height_md'   => [],
            'height_sm'   => [],
            'settings'    => [],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
