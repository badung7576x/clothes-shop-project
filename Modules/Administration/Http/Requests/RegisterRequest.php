<?php

namespace Modules\Administration\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'phone_number' => 'required|regex:/^0(\d{9})$/i',
            'password' => 'required|min:6|max:30',
            're_password' => 'required|same:password'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ tên chưa được nhập',
            'email.required' => 'Email chưa được nhập',
            'email.email' => 'Email chưa đúng định dạng',
            'email.unique' => 'Email đã được đăng ký trước đó',
            'email.max' => 'Email quá dài',
            'phone_number.required' => 'Số điện thoại chưa được nhập',
            'phone_number.regex' => 'Số điện thoại không đúng định dạng',
            'password.required' => 'Mật khẩu chưa được nhập',
            'password.min' => 'Email quá ngắn',
            'password.max' => 'Email quá dài',
            're_password.required' => 'Mật khẩu chưa được nhập',
            're_password.same' => 'Mật khẩu không khớp'

        ];
    }
}
