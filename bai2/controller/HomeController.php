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
    public function admin()
    {
        $this->render('view/admin/layoutmaster', ['page' => 'home']);
    }
    public static function notFound()
    {
        echo "Không tìm thấy file";
    }
}
