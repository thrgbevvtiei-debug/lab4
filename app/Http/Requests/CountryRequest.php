<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code'       => [
                'required', 'string', 'size:2',
                Rule::unique('countries', 'code')->ignore($this->route('country')),
            ],
            'name'       => ['required', 'string', 'max:60'],
            'capital'    => ['required', 'string', 'max:60'],
            'phone_code' => ['required', 'string', 'max:8', 'regex:/^\+\d{1,7}$/'],
            'region'     => ['required', 'string', 'max:30'],
        ];
    }
}
