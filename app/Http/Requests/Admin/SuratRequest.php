<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SuratRequest extends FormRequest
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
            'title' => 'required|max:255',
            // 'tanggall' => 'required|date',
            'nomor' => 'required|max:255',
            'perihal' => 'required|max:255',
            'sumber' => 'required|max:255',
            'kategori' => 'required|max:255',
            'gambar' => 'required|image'
        ];
    }
}
