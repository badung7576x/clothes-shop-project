<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Product\Services\ProductService;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{


    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request)
    {
        if(session('user')) {
            $user = session()->get('user');
            session(['is-login' => true, 'user' => $user]);
        }

        $products = $this->productService->getAllProducts();
        $categories = $this->productService->getAllCategories();
        return view('web.home.index', compact('products', 'categories'));

    }
}
