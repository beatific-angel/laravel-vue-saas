<?php

namespace CreatyDev\Domain\Account\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use CreatyDev\Domain\Auth\Rules\CurrentPassword;

class ProfileStoreRequest extends FormRequest
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
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'username' => [
                'nullable', 'string', 'max:30',
                Rule::unique('users', 'username')->ignore(auth()->id())
            ],
            'phone' => [
                'nullable', 'string',
                Rule::unique('users', 'phone')->ignore(auth()->id())
            ],
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore(auth()->id())
            ],
            'password' => ['required', new CurrentPassword()],
        ];
    }
}
