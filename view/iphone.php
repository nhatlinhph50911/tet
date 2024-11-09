<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/home.css">
</head>

<body>
    <?php include "./includes/header.php" ?>
    <div class="container">


        <img src="./public/img/sl-iphone-14-promax.jpg.webp" alt="">
        <article>
            <?php foreach ($phones as $phone) {
                if ($phone['ma_loai'] == 2) { ?>
                    <div class="imgbox">
                        <img width="200px" height="100px" src="<?php echo $phone['image'] ?> ">
                        <section class="name"><span> <?php echo $phone['name'] ?> </span></section>
                        <section class="price">
                            <?php echo $phone['price'] ?>đ
                        </section>
                        <a href="?action=phoneDetail&id=<?php echo $phone['ma_hh'] ?>" class="detail">xem chi tiết</a>
                    </div>
            <?php }
            } ?>
        </article>
    </div>
    <footer>Phùng Nhật Linh</footer>
</body>

</html>