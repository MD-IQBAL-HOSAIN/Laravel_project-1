<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name', 
        'slug', 
        'description', 
        'status'
    ];



    public function category():BelongsTo
    {
        return $this->belongsTo(category::class);
    }
}