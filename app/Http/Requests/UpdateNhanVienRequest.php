<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNhanVienRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->segment(2);
        return [
            'email' => ['required','email',Rule::unique('nhanvien')->ignore($id, 'maNhanVien')],
            'tenDangNhap'=> ['required', 'max:20',Rule::unique('nhanvien')->ignore($id, 'maNhanVien')]
        ];
    }
}
