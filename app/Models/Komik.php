<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
