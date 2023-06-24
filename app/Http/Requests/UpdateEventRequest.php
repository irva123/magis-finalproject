<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'tanggal_kegiatan' => 'required',
            'waktu_kegiatan' => 'required',
            'penyelenggara' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'foto.required' => 'Foto harus diisi',
            'deskripsi.required' => 'Deskrpsi harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'tanggal_kegiatan.required' => 'tanggal_kegiatan harus diisi',
            'waktu_kegiatan.required' => 'waktu_kegiatan harus diisi',
            'penyelenggara.required' => 'penyelenggara harus diisi',
        ];
    }
}
