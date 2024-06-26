<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{

    public function rules()
    {
        return [
            'comment.text' => 'required|string|max:200',
        ];
    }
}