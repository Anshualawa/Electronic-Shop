<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllProduct extends Model
{
    use HasFactory;
    protected $table = 'all_products';
    protected $fillable = [
        'seller_id',
        'product_name',
        'brand',
        'category',
        'price',
        'description',
        'availability',
        'ratings',
        'special_offers',
        'warranty',
        'accessories',
        'product_image'
    ];
}