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

    //function lấy ra toàn bộ category
    public function list()
    {
        $cate = Categories::listAll();
        $this->render('view/admin/layoutmaster', [
            'page' => 'category/list',
            'categories' => $cate
        ]);
    }
    //function thêm dữ liệu categories vào Database
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_REQUEST);
            $category = new Categories;
            $date = date('Y-m-d H:i:s');
            $execute = $category->insert([
                'cate_name' => $cate_name,
                'desc' => $desc,
                'created_at' => $date,
                'updated_at' => $date,
                'created_by' => -1
            ]);
            if ($execute) {
                header("Location: " . ROOT . "list-category");
                die;
            } else {
                echo "Lỗi không thể thêm";
                die;
            }
        }
        $this->render("view/admin/layoutmaster", ['page' => 'category/add']);
    }
}
