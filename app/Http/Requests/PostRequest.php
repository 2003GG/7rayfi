<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        'title'=>'required|string|max:255',
        'photo_URL'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'video_URL'=>'nullable|string|max:255',
        'description'=>'nullable|string',
        ];
    }
}
