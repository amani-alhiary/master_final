<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBook extends Model
{
    protected $fillable = [
        'id',
        'book_name',
        'author',
        'quote',
        'description',
        'price',
        'category_id',
        'image',
        'image_01',
        'image_02',
        'image_03',
        'sale_price',
        'video',
        'user_id',
        'is_sold'


     ];

    public function cartitem()
    {
        return $this->belongsToMany(cartitem::class);
    }
    public function favusedbook()
    {
        return $this->belongsToMany(favusedbook::class);
    }

}
