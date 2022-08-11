<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required',
            'qty' => 'required|min:1',
            'price' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            'image' => 'image|:jpg,png,jpeg,gif,svg|max:2048',
            'sale'=>'required',    
            'status'=>'required'
            
        ];
    }


    public function messages(){
        return [
            'name.required'=>'bắt buộc phải nhập tên sản phẩm',
            'qty.required'=>'bắt buộc nhập số lượng',
            'sale.required'=>'sale không được để trống',
            'qty.min'=>'mật khẩu phải lớn hơn 6 ký tự',
            'slug.required'=>'bắt buộc phải nhập tên tắt',
            'desc.required'=>'bắt buộc phải nhập thông tin sản phẩm',
            'status.required'=>'trặng thái không được để trống',
            'image.image'=>'ảnh không phải là jpg,png,jpeg,gif,svg',
            'image.max'=>'kích thước ảnh phải nhỏ hơn 2048',
         
            
        ];
    }

}
