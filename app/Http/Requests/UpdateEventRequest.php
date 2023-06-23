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
            'alamat_kegiatan' => 'required',
            'waktu_kegiatan' => 'required',
            'penyelenggara_kegiatan' => 'required',
        ];
    }
}
