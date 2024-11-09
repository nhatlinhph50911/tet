<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/detail.css">
</head>

<body>

    <div class="container">
        <main>
            <article>
                <section class="title">
                    <h1> <?php echo $phoneId['name']; ?> </h1>
                </section>
                <section class="box">
                    <img width="300px" height="350px" src="<?php echo $phoneId['image'] ?>" alt="">
                    <div class="content">
                        <section class="des">
                            Mô tả: <?php echo $phoneId['mo_ta'] ?>
                        </section>
                        <section class="price">
                            Giá :<?php echo $phoneId['price'] ?>đ
                        </section>
                        <form action="?action=add-cmt&id=<?php echo $phoneId['ma_hh'] ?>" method="post">
                            <input type="text" name="content" placeholder="comment">
                            <input type="submit" name='add_comment' value="gui">
                        </form>
                    </div>
                </section>
            </article>
            <aside>
                <h3>các sản phẩm liên quan</h3>

            </aside>
        </main>
    </div>
    <footer>Phùng Nhật Linh</footer>
</body>

</html>