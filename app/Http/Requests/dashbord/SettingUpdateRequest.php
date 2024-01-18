<?php

namespace App\Http\Requests\Dashbord;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class SettingUpdateRequest extends FormRequest
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
            'titel' =>'required|string',
            'description' =>'string|nullable',
            'email' =>'email|nullable',
            'phone' =>'numeric|nullable',
            'address' =>'string|nullable',
            'logo' =>'image|nullable',
            'favicon' =>'image|nullable',
            'facebook' =>'string|nullable',
            'instagram' =>'string|nullable',
            'twitter' =>'string|nullable',
            'tiktok' =>'string|nullable',
            'youtub' =>'string|nullable',
            
        ];
    }
}

