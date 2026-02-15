<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'images',
        'pages_num',
        'author',
        'description',
        'publisher',
        'language',
        'publication_year',
        'stock',
        'rate',
        'author_img',
        'discount',
        'category',
    ];

    public function cart_item()
    {
        return $this->hasOne(CartItem::class);
    }

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }
}
