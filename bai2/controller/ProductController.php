<?php
/*
// Product controller
*/
class ProductController extends Controller
{
    public function index()
    {
        $listProduct = Product::listAll();
        $this->render('view/admin/layoutmaster', [
            'page' => 'product/list',
            'products' => $listProduct
        ]);
    }

    public function add()
    {
        $listCategory = Categories::listAll();
        $this->render('view/admin/layoutmaster', [
            'page' => 'product/add',
            'category' => $listCategory
        ]);
    }
}
