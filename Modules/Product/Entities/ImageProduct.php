<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageProduct extends Model
{

    protected $fillable = [
        'product_id',
        'url',
        'size',
        'type'
    ];
    public function product()
    {
        return $this->belongsTo('Modules\Product\Entities\Product');
    }
}
