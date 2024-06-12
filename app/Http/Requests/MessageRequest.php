<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{

    public function rules()
    {
        return [
            'message.message' => 'required|string|max:4000',
        ];
    }
}