<?php $category = $data['category'] ?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $category->id ?>">
    <label for="">Category Name</label>
    <br>
    <input type="text" name="cate_name" id="" value="<?= $category->cate_name ?>">
    <br>
    <label for="">Description</label>
    <br>
    <textarea name="desc" id="" cols="130" rows="10"><?= $category->desc ?></textarea>
    <br>
    <button type="submit">Save</button>
</form>