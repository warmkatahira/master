<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'customer_id' => 'required|unique:customers',
            'customer_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'customer_id.required' => '顧客IDを入力して下さい。',
            'customer_id.unique' => '既に使用されている顧客IDです。',
            'customer_name.required' => '顧客名を入力して下さい。',
        ];
    }
}
