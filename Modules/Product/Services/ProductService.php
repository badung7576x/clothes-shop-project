<?php


namespace Modules\Product\Services;


use Modules\Product\Repositories\Category\CategoryInterface;
use Modules\Product\Repositories\Product\ProductInterface;

class ProductService
{
    protected $productInterface;
    protected $categoryInterface;

    public function __construct(ProductInterface $productInterface, CategoryInterface $categoryInterface) {
        $this->productInterface = $productInterface;
        $this->categoryInterface = $categoryInterface;
    }

    public function getAllProducts() {
        return $this->productInterface->paginateProducts();
    }

    public function getAllCategories() {
        return $this->categoryInterface->getAll();
    }
}
