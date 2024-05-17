<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;

    //tinkar with this querry.
    public function scopecompleted($query)
    {
        return $query->where('completed', 1);
    }
    public function scopeincompleted($query)
    {
        return $query->where('completed', 0);
    }

    public function topics()
    {
        return $this->belongsToMany(topic::class);
    }
}
