<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class image extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'name',
    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(comment::class, 'commentable');
    }

    /**
     * Get all of the post's comments.
     */
    // public function comments(): MorphMany
    // {
    //     return $this->morphMany(Comment::class, 'commentable');
    // }
}
