<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'sku',
        'details',
        'price',
        'quantity',
        'status',
        'hot',
        'new',
    ];
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(comment::class, 'commentable');
    }


    // public function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function subcategory(): BelongsTo
    // {
    //     return $this->belongsTo(SubCategory::class);
    // }
    // /**
    //  * Get all of the post's comments.
    //  */
    // public function comments(): MorphMany
    // {
    //     return $this->morphMany(Comment::class, 'commentable');
    // }
}
