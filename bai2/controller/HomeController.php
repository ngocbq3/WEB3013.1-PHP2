<?php
class HomeController extends Controller
{
    public function index()
    {
        $categories = new Categories;
        $cate = Categories::listAll();
        $product = Product::listAll();
        $this->render('view/layout/layout', [
            'page' => 'content',
            'categories' => $cate,
            'product' => $product
        ]);
    }
    public static function notFound()
    {
        echo "Không tìm thấy file";
    }
}
