<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/formCDE.css">
</head>

<body>
    <div class="container">

        <nav>
            <ul>
                <section class="logo">
                    <canvas id="logoCanvas" width="450" height="80"></canvas>
                    <script>
                        window.onload = function() {
                            var canvas = document.getElementById('logoCanvas');
                            var ctx = canvas.getContext('2d');
                            ctx.font = 'italic 50px Brush Script MT, cursive';
                            ctx.fillText('PHONE SHOP', 80, 50);
                        };
                    </script>
                </section>
                <li><a href="?action=homeAdmin">Quản lý user</a></li>
                <li><a href="?action=hang_hoa">Quản Lý hàng</a></li>
                <li><a href="?action=loai">Quản Lý loại</a></li>
            </ul>
            <div class="register">
                <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email']; ?>
                    <h2> <?php echo $_SESSION['username']; ?></h2>
                <?php
                    echo '<button><a href="?action=logout">Dang xuat</a></button>';
                } else {
                    echo '<button><a href="?action=register">Dang ky</a></button>';
                    echo '<button><a href="?action=login">Dang nhap</a></button>';
                }
                ?>
            </div>
        </nav>
        <article>
            <h1>create phone</h1>
            <form action="?action=storeEditPhone&id=<?php echo $phone['ma_hh'] ?>" method="POST" enctype="multipart/form-data">
                id : <input type="number" value="<?php echo $phone['ma_hh'] ?>" name="ma_hh"><br>
                name: <input type="text" value="<?php echo $phone['name'] ?>" name='name'><br>
                giá bán: <input type="number" value="<?php echo $phone['price'] ?>" name='price'><br>
                ngày nhập: <input type="date" value="<?php echo $phone['ngay_nhap'] ?>" name='ngay_nhap'><br>
                mô tả: <input type="text" value="<?php echo $phone['mo_ta'] ?>" name='mo_ta'><br>
                mã loại <input type="number" value="<?php echo $phone['ma_loai'] ?>" name='ma_loai'><br>
                anh:
                <img width="200px" height="150px" src="<?php echo $phone['image'] ?>" alt="">
                <input type="file" name='anh'>
                <input type="submit" name='update_phone' value="update">
            </form>
        </article>

        <footer>Phùng Nhật Linh</footer>
</body>

</html>