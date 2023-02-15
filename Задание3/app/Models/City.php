<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    public function tel(): BelongsTo
    {
        return $this->belongsTo(Telephone::class, 'tel_id', 'id', 'telephones');
    }
}
