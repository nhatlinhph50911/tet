<?php
?>
<link rel="stylesheet" href="./public/css/login.css">
<h1>login</h1>
<form action="?action=checkLogin" method="post">
    <input type="text" placeholder="tài khoản là email của bạn" name="email"><br>
    <input type="password" name="pass"><br>
    <input type="submit" value="Đăng nhập" name="login">
</form>