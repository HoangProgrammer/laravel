<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'rating ' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:6',
            
            //
        ];
    }

    public function message()
    {
        return [
            'rating.required'=>'vui lòng chọn đánh giá',
            'email.required'=>'bạn chưa nhập email',
            'email.email'=>'email không đúng định dạng',
            'message.required'=>'bạn chưa nhập nhận xét',
            'message.min'=>'vui lòng nhập tối thiểu 6 ký tự',
        ];
    }
}
