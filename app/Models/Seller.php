<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seller extends Model
{
    protected $fillable=[
        'companyName',
        'iva',
        'buisnessAddress',
        'buisnessCity',
        'buisnessCountry',
        'companyWebSite',
        'contactEmail',
        'contactNumber',
        'compiled',
        'user_id'
    ];

    public function user() {
    
        return $this->belongsTo(User::class);
    }
}
