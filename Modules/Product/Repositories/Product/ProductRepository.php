<?php


namespace Modules\Product\Repositories\Product;


use App\Repositories\BaseRepository;
use Modules\Product\Entities\Product;

class ProductRepository extends BaseRepository implements ProductInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Product::class;
    }

    public function paginateProducts()
    {
        return $this->_model->with('images')->paginate(PER_PAGE);
    }

    public function findByName($nameProduct)
    {
        return $this->_model->where('name', 'like', '%' . $nameProduct . '%')->get();
    }

    public function showProductDetail($productID)
    {
        return $this->_model->find($productID)->productDetail;
    }
    public function paginateProductsByCategory($perPage, $category_id)
    {
        return $this->_model->where('category_id', $category_id)->paginate($perPage);
    }
}

