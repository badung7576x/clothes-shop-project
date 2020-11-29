<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    protected $fillable = [
        'name' ,
        'price',
        'category_id',
        'information',
    ];
    public function productDetail()
    {
        return $this->hasOne('Modules\Product\Entities\ProductDetail');
    }
}
