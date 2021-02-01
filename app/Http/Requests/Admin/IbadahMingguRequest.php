<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class IbadahMingguRequest extends FormRequest
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
            'tanggal' => 'required|date',
            'khadim' => 'required|max:255',
            'pengantar' => 'required|max:255',
            'pem_acara' => 'required|max:255',
            'doa_persembahan' => 'required|max:255',
            'pujian' => 'required|max:255'
        ];
    }
}
