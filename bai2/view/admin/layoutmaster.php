<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>

    <nav>
        <a href="<?= ROOT ?>list-category">Danh mục sản phẩm</a> |
        <a href="<?= ROOT ?>list-product">Sản phẩm</a>
    </nav>
    <?php
    require_once "./view/admin/" . $data['page'] . ".php";
    ?>
</body>

</html>