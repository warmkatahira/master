<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'role_id' => 'required|integer|unique:roles|min:1',
            'role_name' => 'required|unique:roles',
        ];
    }

    public function messages()
    {
        return [
            'role_id.required' => '権限IDを入力して下さい。',
            'role_id.integer' => '権限IDは1以上の整数で入力して下さい。',
            'role_id.unique' => '既に使用されている権限IDです。',
            'role_id.min' => '権限IDは1以上の整数で入力して下さい。',
            'role_name.required' => '権限名を入力して下さい。',
            'role_name.unique' => '既に使用されている権限名です。',
        ];
    }
}
