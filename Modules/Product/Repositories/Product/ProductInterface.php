<?php


namespace Modules\Product\Repositories\Product;


interface ProductInterface
{
    public function paginateProducts($perPage);
    public function findByName($nameProduct);
    public function showProductDetail($productID);
}

