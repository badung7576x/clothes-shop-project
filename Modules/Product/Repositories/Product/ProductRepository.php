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

    public function paginateProducts($perPage)
    {
        return $this->_model->paginate($perPage);
    }

}
