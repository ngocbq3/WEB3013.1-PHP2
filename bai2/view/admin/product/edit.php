<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<?php
$cate = $data['category'];
$p = $data['product'];
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $p->id ?>">
    <label for="">Tên sản phẩm</label>
    <br>
    <input type="text" name="name" id="" value="<?= $p->name ?>">
    <br>
    <label for="">Hình ảnh</label>
    <br>
    <input type="file" name="image" id="">
    <br>
    <img src="<?= ROOT ?>images/<?= $p->image ?>" width="100" alt="">
    <input type="hidden" name="image" value="<?= $p->image ?>">
    <br>
    <label for="">Danh mục sản phẩm</label>
    <br>
    <select name="cate_id" id="">
        <!--Hiển thị danh sách categories-->
        <?php foreach ($cate as $c) : ?>
            <!--Hiển thị chính xác danh mục được chọn-->
            <?php if ($c->id == $p->cate_id) : ?>
                <option value="<?= $c->id ?>" selected><?= $c->cate_name ?></option>
            <?php else : ?>
                <option value="<?= $c->id ?>"><?= $c->cate_name ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <br>
    <label for="">Giá</label>
    <br>
    <input type="number" name="price" id="" value="<?= $p->price ?>">
    <br>
    <label for="">Mô tả</label>
    <br>
    <textarea name="short_desc" id="" cols="130" rows="5"><?= $p->short_desc ?></textarea>
    <br>
    <label for="">Nội dung chi tiết</label>
    <br>
    <textarea name="detail" id="detail"><?= $p->detail ?></textarea>
    <br>
    <button type="submit">Lưu</button>
</form>
<script>
    tinymce.init({
        selector: 'textarea#detail',
        height: 300,
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });
</script>