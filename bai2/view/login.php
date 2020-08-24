<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php $error = $data['error'] ?>
    <form action="<?= ROOT . 'login' ?>" method="post">
        <input type="text" name="username" placeholder="Username" id="">
        <?= isset($error['user']) ? $error['user'] : '' ?>
        <br>
        <input type="password" name="password" placeholder="Password" id="">
        <?= isset($error['pass']) ? $error['pass'] : '' ?>
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>