<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email|min:6',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'min:6'
            //
        ];
    }

    public function messages(){
       return [
        'name.required'=>'tên bắt buộc phải nhập',
        'username.required'=>'tên đăng nhập bắt buộc phải nhập',
        'email.required'=>'email bắt buộc phải nhập',
        'email.email'=>'email không đúng định dạng',
        'email.min'=>'email tối thiểu phải 6 ký tự',
        'password.required'=>'mật khẩu bắt buộc phải nhập',
        'password.min'=>'mật khẩu phải tối thiểu phải 6 ký tự',
        'password.confirmed'=>'mật khẩu không khớp',
        'password_confirmation.min'=>'mật khẩu ít nhập 6 ký tự '
       ];
    }
}
