<?php

namespace App\Modules\Main\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Branch extends Model
{
    public $timestamps = false;

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'parent_id');
    }
}
