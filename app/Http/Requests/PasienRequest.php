<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienRequest extends FormRequest
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
            'kode_pasien' => 'required',
            'nama_pasien' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_pasien.required' => 'Nama lengkap perlu diisi!'
        ];
    }
}
