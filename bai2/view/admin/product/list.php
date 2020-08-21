<?php
$products = $data['products'];

?>
<a href="<?= ROOT ?>add-product">Add product</a>
<table border="1">
    <tr>
        <th>id</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Cate Id</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
    </tr>
    <?php foreach ($products as $p) : ?>
        <tr>
            <td><?= $p->id ?></td>
            <td><?= $p->name ?></td>
            <td>
                <img src="images/<?= $p->image ?>" width="100" alt="">
            </td>
            <td><?= $p->cate_id ?></td>
            <td><?= $p->created_at ?></td>
            <td><?= $p->updated_at ?></td>
            <td>
                <a href="<?= ROOT ?>edit-product/<?= $p->id ?>">Sửa</a>
                <a href="<?= ROOT ?>list-product/<?= $p->id ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>