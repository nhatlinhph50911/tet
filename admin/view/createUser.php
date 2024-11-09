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
            <h1>create user</h1>
            <form action="?action=store-user" method="POST" enctype="multipart/form-data">
                id người dùng: <input type="text" name="ma_kh"><br>
                fullname: <input type="text" name='fullname'><br>
                email: <input type="email" name='email'><br>
                username: <input type="text" name='username'><br>
                password: <input type="password" name='password'><br>
                phone: <input type="text" min='1' name='phone'><br>
                role <input type="number" name='role' min="1" max="2"><br>
                anh:
                <input type="file" name='anh'>
                <input type="submit" name='add_user' value="Them">
            </form>
        </article>

        <footer>Phùng Nhật Linh</footer>
</body>

</html>