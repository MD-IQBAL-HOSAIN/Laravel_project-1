<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'comment',
        // Add other fillable attributes here if any
    ];
    public function commentable():MorphTo
    {
        return $this->morphTo();
    }   
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
}
