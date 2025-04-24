<?php

namespace App\Modules\Additions\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
{
    public function rules()
    {
        return [
            'room_id' => ['required', 'exists:rooms,id'],
            'name' => ['required', 'string', 'unique:rooms,name,' . $this->route('room')->id],
            'count_students' => ['required', 'integer', 'min:0'],
            'status' => ['required', 'boolean']
        ];
    }
    public function validationData()
    {
        return [
            'room_id' => $this->route('room_id'),
        ];
    }
}
