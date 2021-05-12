<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'uuid' => ['required', 'string', 'max:36'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'username' => ['required', 'string'],
            'password' => ['required', 'password'],
            'email' => ['required', 'email'],
            'email_verified_at' => [''],
            'date_joined' => ['required', 'string'],
            'guid' => ['string'],
            'phone' => ['string'],
            'notification_preferences' => ['string'],
            'is_contact' => [''],
            'remember_token' => ['string', 'max:100'],
        ];
    }
}
