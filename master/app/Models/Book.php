<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
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



     ];
 
    /**

     * Get the post that owns the comment.

     */

     public function users()
     {
         return $this->belongsToMany(User::class, 'carts');
     }
    
     public function comments()
     {
         return $this->belongsToMany(Comment::class);
     }
     
     public function cartitem()
     {
         return $this->belongsToMany(cartitem::class);
     }
     public function favourite()
     {
         return $this->belongsToMany(favourite::class);
     }
   

}

