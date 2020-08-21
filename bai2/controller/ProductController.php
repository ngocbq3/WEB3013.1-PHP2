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
    //Edit product
    public function edit($id)
    {
        $message = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu từ form
            extract($_REQUEST);
            if ($_FILES['image']['size'] > 0) {
                $image = $_FILES['image']['name'];
            } else {
                $image = $image;
            }
            //Lấy ngày hiện tại
            $date = date('Y-m-d H:i:s');
            $arr = [
                'name' => $name,
                'image' => $image,
                'cate_id' => $cate_id,
                'price' => $price,
                'short_desc' => $short_desc,
                'detail' => $detail,
                'updated_at' => $date
            ];
            $p = new Product;
            if ($p->update($arr, $id)) {
                //Kiểm tra xem người dùng có cập nhật ảnh không
                if ($_FILES['image']['size'] > 0) {
                    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);
                }
                $message = "Cập nhật dữ liệu thành công";
            } else {
                $message = "Cập nhật dữ liệu thất bại";
            }
        }
        $cate = Categories::listAll();
        $product = Product::findOne($id);
        $this->render('view/admin/layoutmaster', [
            'page' => 'product/edit',
            'category' => $cate,
            'product' => $product
        ]);
    }

    //Xóa sản phẩm
    public function delete_product($id)
    {
        $p = new Product;
        $p->delete($id);
        $_SESSION['message'] = "Xóa dữ liệu có id=$id thành công";
        header("location: " . ROOT . 'list-product');
        die;
    }
    //Thêm dữ liệu sản phẩm
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            extract($_REQUEST);
            if ($_FILES['image']['size'] > 0) {
                $image = $_FILES['image']['name'];
            } else {
                $image = "";
            }
            $date = date('Y-m-d H:i:s');
            $p = new Product;
            $kt = $p->insert([
                'name' => $name,
                'image' => $image,
                'cate_id' => $cate_id,
                'price' => $price,
                'short_desc' => $short_desc,
                'detail' => $detail,
                'created_at' => $date,
                'updated_at' => $date,
                'views' => 0
            ]);
            if ($kt) {
                if ($_FILES['image']['size'] > 0) {
                    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);
                }
                $_SESSION['message'] = "Thêm dữ liệu thành công";
                header('location: ' . ROOT . 'list-product');
                die;
            }
        }
        $listCategory = Categories::listAll();
        $this->render('view/admin/layoutmaster', [
            'page' => 'product/add',
            'category' => $listCategory
        ]);
    }
}
