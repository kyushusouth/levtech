<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|max:40",
            "body"=> "required|max:4000",
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "タイトルを入力してください。",
            "title.max" => "タイトルは40字以内にしてください。",
            "body.required" => "本文を入力してください。",
            "body.max" => "本文は4000字以内にしてください。",
        ];
    }
}
