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
            <h1>Edit user</h1>
            <form action="?action=store-editUser&id=<?php echo $user['ma_kh'] ?>" method="POST" enctype="multipart/form-data">
                id người dùng: <input type="text" value="<?php echo $user['ma_kh'] ?>" name="ma_kh"><br>
                fullname: <input type="text" value="<?php echo $user['full_name'] ?>" name='fullname'><br>
                email: <input type="email" value="<?php echo $user['email'] ?>" name='email'><br>
                username: <input type="text" value="<?php echo $user['username'] ?>" name='username'><br>
                password: <input type="password" value="<?php echo $user['pass'] ?>" name='password'><br>
                phone: <input type="text" min='1' value="<?php echo $user['phone'] ?>" name='phone'><br>
                role <input type="number" value="<?php echo $user['role'] ?>" name='role' min="1" max="2"><br>
                anh:
                <img width="200px" height="150px" src="<?php echo $user['avatar'] ?>" alt="">
                <input type="file" name='anh'>
                <input type="submit" name='update' value="update">
            </form>
        </article>

        <footer>Phùng Nhật Linh</footer>
</body>

</html>