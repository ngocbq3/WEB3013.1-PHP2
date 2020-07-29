<?php
class CategoryController extends Controller
{
    //Hiển thị danh sách sản phẩm trong category
    public function category($id)
    {
        $products = Product::listProductInCategories($id);

        $cate = Categories::listAll();
        $this->render('view/layout/layout', [
            'page' => 'category',
            'categories' => $cate,
            'product' => $products
        ]);
    }
}
