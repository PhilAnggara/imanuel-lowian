<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class IbadahArpibKolomRequest extends FormRequest
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
            'arpib_kolom' => 'required|max:255',
            'tanggal' => 'required|date',
            'giliran' => 'required|max:255',
            'tempat' => 'required|max:255'
        ];
    }
}
