<?php

namespace App\Modules\Additions\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|unique:rooms,name',
            'count_students' => 'required|integer|min:0',
            'status' => 'required|boolean'
        ];
    }
}
