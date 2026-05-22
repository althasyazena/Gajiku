<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class SalaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'employee_id' => 'required',
            'gaji_pokok' => 'required|numeric|min:0',
            'tunjangan_makan' => 'nullable|min:0',
            'tunjangan_transportasi' => 'nullable|min:0',
            'potongan' => 'nullable|min:0',
            'gaji_bersih' => 'required|numeric|min:0',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer|min:2020|max:2030',
        ];
    }

    public function messages()
    {
        return [
            'employee_id.required'  => 'Karyawan wajib diisi',
            
            'gaji_pokok.required'    => 'Gaji Pokok wajib diisi',
            'gaji_pokok.numeric'    => 'Gaji Pokok harus berupa angka',
            'gaji_pokok.min'    => 'Gaji Pokok tidak boleh kurang dari 0',

            'gaji_bersih.required'    => 'Gaji Pokok wajib diisi',
            'gaji_bersih.numeric'    => 'Gaji Pokok harus berupa angka',
            'gaji_bersih.min'    => 'Gaji Pokok tidak boleh kurang dari 0',

            'bulan.required'        => 'Bulan wajib diisi',
            'bulan.integer'        => 'Bulan harus berupa angka',
            'bulan.min'        => 'Bulan minimal 1',
            'bulan.max'        => 'Bulan maksimal 12',

            'tahun.required'       => 'Tahun wajib diisi',
            'tahun.integer'       => 'Tahun harus berupa angka',
            'tahun.min'       => 'Tahun minimal 2020',
            'tahun.max'       => 'Tahun maksimal 2030',
        ];
    }
}
