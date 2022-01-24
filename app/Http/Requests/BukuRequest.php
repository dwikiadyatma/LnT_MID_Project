<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
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
            'Judul' => 'required|max:50',
            'Penulis' => 'required|max:50',
            'Halaman' => 'required|integer|min:0',
            'Tahun' => 'required|integer|min:1945|max:2021'
        ];
    }
    
    public function messages()
    {
        return [
            'Judul.required' => 'Judul buku harus diisi',
            'Penulis.required' => 'Penulis buku harus diisi',
            'Halaman.required' => 'Jumlah Halaman harus lebih dari 0',
            'Tahun.required' => 'Tahun terbit harus berada disekitar 1945-2021'
        ];
    }
}
