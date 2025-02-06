<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class KaalosEntry extends Model
{
    protected $guarded = [];

    public function creator(): belongsTo {
        return $this->belongsTo(User::class);
    }
}
