<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AssetRequest extends FormRequest
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
            'label_code' => 'required|string',
            'id_type' => 'required|string|exists:type,id',
            'brand' => 'required|string',
            'model' => 'required|string',
            'serial_number' => 'required|string',
            'buy_of_date' => 'required|string',
            'harga' => 'required',
            'spesifikasi' => 'string',
        ];
    }
}
