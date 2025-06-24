<?php

namespace App\Modules\Additions\Models;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
