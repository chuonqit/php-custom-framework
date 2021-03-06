<?php

namespace app\Http\Controllers;

use app\Http\Controller;
use app\Categories;
use app\Services\Request;

class CategoryController extends Controller
{
    protected Categories $categories;

    public function __construct()
    {
        $this->isMaintenance();
        $this->categories = new Categories();
    }

    public function index(Request $request)
    {
        $products = $this->categories->getAllProduct($request);
        view('category', [
            'cate_title' => "Danh mục",
            'products' => $products
        ]);
    }


    public function details($slug, Request $request)
    {
        $products = $this->categories->getProductCategoryBySlug($slug, $request);
        $title = $this->categories->getCategoryTitle($slug);

        view('category', [
            'cate_title' => $title,
            'products' => $products
        ]);
    }
}