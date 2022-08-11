<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email'=>'required|email',
            'topic'=>'required|min:6',
            'content'=>'required|min:6'
            //
        ];
    }


    function messages(){
        return
        [
            'name.required' => 'tên bắt buộc phải nhập',
            'email.required'=>'email bắt buộc phải nhập',
            'email.email'=>'email không đúng định dạng',
            'topic.required'=>'phẩn chủ đề không được để trống ',
            'topic.min'=>'phần chủ đề phải tối thiểu 6 ký tự',
            'content.required'=>' phần nội dùng không được để trống',
            'content.min'=>' phần nội dung tối thiểu 6 ký tự'
        ];
    }
}
