<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
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
            'kode_dokter' => 'required',
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'alamat_dokter' => 'required',
            'telepon_dokter' => 'required',
            'kode_poliklinik' => 'required',
            'tarif' => 'required'
        ];
    }
}
