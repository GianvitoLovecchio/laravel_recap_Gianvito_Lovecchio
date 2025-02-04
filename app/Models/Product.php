<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public function user(): BelongsTo{
        return $this->belongsTo((User::class));
    }

    protected $fillable = 
    [
        'name',
        'category',
        'user_id',
        'description',
        'price',
        'image',
        'brand',
        'color',
        'size',
        'year',
        'weight'
    ];

    
}
