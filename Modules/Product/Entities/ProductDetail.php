<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDetail extends Model
{
   
    protected $fillable = [
        'product_id',
        'quantity',
        'product_image_link',
        'status',
        'promotion_price',
    ];
    
}
