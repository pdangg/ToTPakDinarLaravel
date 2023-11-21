<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|string|max:250',
            'luas_perumahan' => 'required|integer|min:1|max:10000',
            'harga_perumahan' => 'required',
        ];
    }
}