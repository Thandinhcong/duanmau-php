<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí thành viên</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        body {
            margin: auto;
            width: 980px;
            font-family: 'Roboto', sans-serif;
        }

        h1 {
            width: 100%;
            line-height: 50px;
            background-color: pink;
            height: 50px;
            padding-left: 30px;
        }

        .form1 input {
            width: 100%;
            padding: 10px;
        }

        .file input {
            border: 1px solid;
        }

        button {
            margin: 20px 0;
            padding: 10px 20px;
        }
        .thongbao{
            background-color: aquamarine;
            color: red;
            height: 50px;
            width:100%;
        }
    </style>
</head>

<body>
    <h1>Cập nhật tài khoản</h1>
    <?php
        if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
            extract($_SESSION['user']);

        } 
    ?>
    <form action="index.php?act=edit_taikhoan" class="form1" method="POST">
        <div class="user">
            <p>EMAIL :</p>
            <input type="text" placeholder="Username..." id="username" name="email" value="<?=$email?>">
        </div>
        <div class="user">
            <p>User :</p>
            <input type="text" placeholder="Username..." id="username" name="user" value="<?=$user?>">
        </div>
        <div class="user">
            <p>Mật khẩu :</p>
            <input type="password" placeholder="Password..." id="username" name="password" value="<?=$password?>">
        </div>
        <div class="user">
            <p>Địa chỉ :</p>
            <input type="text" placeholder="Địa chỉ..." id="username" name="address" value="<?=$address?>">
        </div>
        <div class="user">
            <p>Điện thoại :</p>
            <input type="text" placeholder="number..." id="username" name="tel" value="<?=$tel?>">
        </div>
        <input type="hidden" name="id" value="<?=$id?>"></input>
        <button type="submit" name=capnhat>Cập nhật</button>
        <button type="reset" value="Nhập lại">Nhập lại</button>
    </form>
    
    <?php
    if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
    }
    ?>
    
</body>

</html> 