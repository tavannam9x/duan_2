<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class PostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $validate = [
            'title' => [
                'required',
                Rule::unique('post')->ignore($this->id),
                'min:3',
                'max:100'
            ],
            'author' =>[
                'required',
            ],
            'short_desc' =>[
                'required',
                'min:20',
                'max:300'
            ],
            'description' =>[
                'required',
                'min:20',
                'max:2000'
            ]



        ];
        if(!$this->id){

            $validate['image'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages(){
        return [
            'title.required' => 'Bạn phải nhập tiêu đề bài viết',
            'title.min' => 'Tiêu đề bài viết phải lớn hơn 3 ký tự',
            'title.max' => 'Tiêu đề bài viết phải nhỏ hơn 100 ký tự',
            'title.unique' => 'Tiêu đề bài viết đã tồn tại, vui lòng chọn tên sản phẩm khác',

            'image.required' => 'Bạn không được để trống ảnh bài viết',
            'image.mimes' => 'Bạn chỉ có thể lựa chọn định dạng ảnh jpeg hoặc png',
            'author.required' => 'Bạn phải nhập tên tác giả',
            'short_desc.required' => 'Bạn phải nhập nội dung tóm tắt',
            'short_desc.min' => 'Nội dung tóm tắt phải lớn hơn 20 ký tự',
            'short_desc.max' => 'Nội dung tóm tắt phải nhỏ hơn 300 ký tự',
            'description.required' => 'Bạn phải nhập nội dung sản phẩm',
            'description.min' => 'Nội dung sản phẩm phải lớn hơn 20 ký tự',
            'description.max' => 'Nội dung sản phẩm phải nhỏ hơn 2000 ký tự',
        ];

    }
}