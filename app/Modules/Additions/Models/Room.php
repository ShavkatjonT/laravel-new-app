<?php

namespace App\Modules\Additions\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'count_students',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean',
        'count_students' => 'integer'
    ];
}
