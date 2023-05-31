<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'departemen_id' => 'required|string|exists:departemen,id',
            'posisi' => 'required|string',
            'status' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|string',
        ];
    }
}
