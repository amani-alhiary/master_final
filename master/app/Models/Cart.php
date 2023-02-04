<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'country',
        'address',
        'phone',
        'total_price',
        'card_number',
        'postal_code',
    ];

    use HasFactory;

    public function cartitem()
    {
        return $this->belongsToMany(cartitem::class);
    }
}
