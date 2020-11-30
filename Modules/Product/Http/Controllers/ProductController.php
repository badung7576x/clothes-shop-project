<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\Product\ProductInterface;

class ProductController extends Controller
{


    protected $productRepository;

    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
//        $products = $this->productRepository->paginateProducts(25);
        return view('web.home.index');
    }
}
