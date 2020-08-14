<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sendmail</title>
</head>

<body>
    <form action="xuly.php" method="post" enctype="multipart/form-data">
        <label for="">Tiêu đề</label>
        <br>
        <input type="text" name="tieude" id="">
        <br>
        <label for="">Email</label>
        <br>
        <input type="email" name="email" id="">
        <br>
        <label for="">Họ tên</label>
        <br>
        <input type="text" name="hoten" id="">
        <br>
        <label for="">File đính kèm</label>
        <br>
        <input type="file" name="fileUpload" id="">
        <br>
        <label for="">Nội dung</label>
        <br>
        <textarea name="noidung" id="" cols="130" rows="10"></textarea>
        <br>
        <button type="submit">Gửi</button>
    </form>
</body>

</html>