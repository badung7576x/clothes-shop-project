<?php


namespace Modules\Product\Repositories\Category;


use App\Repositories\BaseRepository;
use Modules\Product\Entities\Category;

class CategoryRepository extends BaseRepository implements CategoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Category::class;
    }
}

