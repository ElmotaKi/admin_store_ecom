<?php

namespace App\Http\Requests\dashbord\category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
            'perant' => 'nullable|exists:categories,id',
            'image' => 'mimes:jpeg,jpg,png,gif,svg',
        ];
    }
}
