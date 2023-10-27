<?php

namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:6'],
            'slug' => ['required', 'min:6'],
            'description' => ['required'],
            'image' => ['required', 'min:6'],
            'type_file' => ['required'],
            'path_file' => ['nullable' ,  "max:102400"], //'mimes:mp3,wav,mp4,mov,avi' ,
            'categories' => ['required'],
            'status' => ['required'],
            'tags' => ['required'],
//            'publish' => ['nullable']
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
}
