<a href="<?= ROOT ?>add-category">Add</a>
<?php if (isset($_SESSION['message'])) : ?>
    <div><?= $_SESSION['message'] ?></div>
<?php endif; ?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>desc</th>
        <th>updated</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data['categories'] as $cate) : ?>
        <tr>
            <td><?= $cate->id ?></td>
            <td><?= $cate->cate_name ?></td>
            <td><?= $cate->desc ?></td>
            <td><?= $cate->updated_at ?></td>
            <td>
                <a href="<?= ROOT ?>edit-category/<?= $cate->id ?>">Sửa</a>
                <a href="<?= ROOT ?>list-category/<?= $cate->id ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
if (isset($_SESSION['message'])) {
    unset($_SESSION['message']);
}
?>