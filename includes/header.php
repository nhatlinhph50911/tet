<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <style>
        header {
            max-width: 100%;
            height: 90px;
        }

        nav {
            width: 100% !important;
            height: 90px !important;
            background-color: #6666CC !important;
            display: flex !important;
        }

        nav ul {
            display: flex !important;
            list-style: none !important;
        }

        nav ul a {
            text-decoration: none !important;
            color: #000000 !important;
            font-size: larger !important;
        }

        nav ul a:hover {
            color: red !important;
        }

        li {
            margin-top: 30px !important;
            margin-left: 25px !important;
            font-weight: bold !important;
        }

        .register {
            float: right !important;
            width: 20% !important;
            display: flex !important;
            height: 80px !important;
            margin-top: 20px !important;
            margin-left: 70px !important;
        }

        .register h2 {
            font-size: x-large !important;
        }

        .register button {
            width: 60% !important;
            margin-left: 10px !important;
            margin-top: 10px !important;

        }

        .register button a {
            text-decoration: none !important;
            color: black !important;
        }

        img {
            width: 80% !important;
            height: 300px !important;
            margin-left: 10% !important;
            margin-top: 2px !important;
            margin-bottom: 10px !important;
        }

        input[type="text"] {
            width: 70% !important;
            height: 40px !important;
            margin-left: 10% !important;
            border-radius: 10px !important;
            margin-bottom: 10px !important;
            font-size: x-large !important;
        }

        button {
            width: 10% !important;
            height: 40px !important;
            border-radius: 50px !important;
            background-color: green !important;
            color: #fff !important;
            font-size: x-large !important;
        }
    </style> -->
</head>


<body>
    <nav>
        <ul>
            <section class="logo">
                <canvas id="logoCanvas" width="350" height="80"></canvas>
                <script>
                    window.onload = function() {
                        var canvas = document.getElementById('logoCanvas');
                        var ctx = canvas.getContext('2d');
                        ctx.font = 'italic 50px Brush Script MT, cursive';
                        ctx.fillText('PHONE SHOP', 50, 60);
                    };
                </script>
            </section>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Tìm Kiếm">
                <button type="submit">search</button>
            </form>
            <li><a href="?action=home">Trang Trủ</a></li>
            <li><a href="?action=iphone">Iphone</a></li>
            <li><a href="?action=samsung">Samsung</a></li>
            <li><a href="?action=oppo">Oppo</a></li>
            <li><a href="?action=contact">Liên Hệ</a></li>
        </ul>
        <div class="register">
            <?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email']; ?>
                <h2> <?php echo $_SESSION['username']; ?></h2>
            <?php
                echo '<button><a href="?action=logout">logout</a></button>';
            } else {
                echo '<button><a href="?action=register">sign up</a></button>';
                echo '<button><a href="?action=login">login</a></button>';
            }
            ?>
        </div>
    </nav>
</body>

</html>