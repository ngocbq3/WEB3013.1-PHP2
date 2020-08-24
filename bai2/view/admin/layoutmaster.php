<?php
if (!isset($_SESSION['user'])) {
    header('Location:' . ROOT . 'login');
    die;
}
if (isset($_SESSION['login'])) {
    var_dump($_SESSION['login']);
}
?>
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
    Username: <b><?= $_SESSION['user'] ?></b>
    <a href="<?= ROOT . 'logout' ?>">Logout</a>
    <?php
    require_once "./view/admin/" . $data['page'] . ".php";
    ?>
</body>

</html>