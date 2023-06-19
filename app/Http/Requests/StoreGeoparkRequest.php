<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGeoparkRequest extends FormRequest
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
            'id_category' => 'required',
            'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'titik_koordinat' => 'required',
            'link_maps' => 'required',
            'jam_buka' => 'required',
            'harga_weekday' => 'required',
            'harga_weekend' => 'required',
            'kontak' => 'required',
            'sosmed' => 'required',
            'id_marker' => 'required'
        ];
    }

    public function message()
    {
        return [
            'id_category.required' => 'ID Category harus diisi',
            'nama.required' => 'Nama harus diisi',
            'foto.required' => 'Foto harus diisi',
            'deskripsi.required' => 'Deskrpsi harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'titik_koordinat.required' => 'Titik Koordinat harus diisi',
            'link_maps.required' => 'Link maps harus diisi',
            'jam_buka.required' => 'Jam Operasional harus diisi',
            'harga_weekday.required' => 'Harga Weekday maps harus diisi jika tidak ada isi 0',
            'harga_weekend.required' => 'Harga Weekend maps harus diisi jika tidak ada isi 0',
            'kontak.required' => 'Kontak harus diisi jika tidak ada isi -',
            'sosmed.required' => 'Sosmed harus diisi jika tidak ada isi -',
            'id_marker.required' => 'Marker harus diisi'
        ];
    }
}
