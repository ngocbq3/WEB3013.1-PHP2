<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="view/layout/css/common.css">
</head>

<body>
    <div class="container">
        <header><img src="images/xbanner-trang-lien-he-moi.jpg.pagespeed.ic.FQvWHe7Pcx.jpg"></header>
        <!--Menu-->
        <nav>
            <ul>
                <?php foreach ($data['categories'] as $cate) : ?>
                    <li><a href="index.html"><?= $cate->cate_name ?></a></li>
                <?php endforeach; ?>

            </ul>
        </nav>
        <!--End menu-->