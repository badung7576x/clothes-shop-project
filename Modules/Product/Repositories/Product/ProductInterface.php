<?php


namespace Modules\Product\Repositories\Product;


interface ProductInterface
{
    public function paginateProducts();
    public function findByName($nameProduct);
    public function showProductDetail($productID);
    public function paginateProductsByCategory($category_id);
}

