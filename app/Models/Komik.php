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

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('judul', 'like', '%' . request('search') . '%')
                        ->orWhere('genre_id', 'like', '%' . request('search') . '%');
        }
    }
}
