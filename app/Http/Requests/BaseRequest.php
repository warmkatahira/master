<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
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
            'base_id' => 'required|unique:bases',
            'base_name' => 'required',
            'zip_code_1' => 'required|min:3|max:3',
        ];
    }

    public function messages()
    {
        return [
            'base_id.required' => '拠点IDを入力して下さい。',
            'base_id.unique' => '既に使用されている拠点IDです。',
            'base_name.required' => '拠点名を入力して下さい。',
            'zip_code_1.required' => '郵便番号1を入力して下さい。',
            'zip_code_1.min' => '郵便番号1は3桁で入力して下さい。',
            'zip_code_1.max' => '郵便番号1は3桁で入力して下さい。',
        ];
    }
}
