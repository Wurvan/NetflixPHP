<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
        return [
            'typeVideo' => 'required',
            'userSearch' => 'required|max:100'
        ];
    }

        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'typeVideo.required' => 'You need to select the type for searching',
            'userSearch.required' => 'You need to write something',
            'userSearch.max' => 'You can not put more than 100 letters'
        ];
    }
}
