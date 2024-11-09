<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/homeAdmins.css">
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
            <h1>Quản lý loại hàng</h1>
            <button class="create"><a href="?action=createLoaiHang">Thêm loại hàng</a></button>
            <table border="1px solid">
                <tr>
                    <td>mã loại hàng</td>
                    <td>tên loại hàng</td>

                </tr>
                <?php foreach ($loais as $loai) { ?>
                    <tr>
                        <td> <?php echo $loai['ma_loai']; ?> </td>
                        <td> <?php echo $loai['ten_loai']; ?> </td>

                        <td>
                            <button class="DvE">
                                <a href="?action=deleteLoaiHang&id=<?php echo $loai['ma_loai']; ?>">delete</a>
                            </button>
                        </td>


                    </tr>
                <?php } ?>
            </table>
        </article>

        <footer>Phùng Nhật Linh</footer>
</body>

</html>