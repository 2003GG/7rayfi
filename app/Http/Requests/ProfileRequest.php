<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules(): array
{
    return [
        'name' => 'required|string|max:255',
        'localisation' => 'nullable|string',
        'phone_number' => 'nullable|string|regex:/^[0-9+\-\s]+$/',
        'profile_photo'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'biographie' => 'nullable|string'
    ];
}
}
