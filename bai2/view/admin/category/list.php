<a href="<?= ROOT ?>add-category">Add</a>
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
            <td>Action</td>
        </tr>
    <?php endforeach; ?>
</table>