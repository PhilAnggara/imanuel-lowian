<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PersembahanArpibKolomRequest extends FormRequest
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
            'tempat' => 'max:255',
            // 'jumlah' => 'required|integer',
            'keterangan' => 'max:255'
        ];
    }
}
