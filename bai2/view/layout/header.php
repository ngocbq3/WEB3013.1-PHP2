<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>view/layout/css/common.css">
</head>

<body>
    <div class="container">
        <header><img src="<?= ROOT ?>images/xbanner-trang-lien-he-moi.jpg.pagespeed.ic.FQvWHe7Pcx.jpg"></header>
        <!--Menu-->
        <nav>
            <ul>
                <?php foreach ($data['categories'] as $cate) : ?>
                    <li><a href="<?= ROOT ?>danhmuc/<?= $cate->id ?>"><?= $cate->cate_name ?></a></li>
                <?php endforeach; ?>

            </ul>
        </nav>
        <!--End menu-->