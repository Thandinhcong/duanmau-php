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
    <h1>ĐĂNG KÍ THÀNH VIÊN</h1>
    <form action="index.php?act=dangky" class="form1" method="POST">
        <div class="user">
            <p>EMAIL :</p>
            <input type="text" placeholder="Username..." id="username" name="email">
        </div>
        <div class="user">
            <p>User :</p>
            <input type="text" placeholder="Username..." id="username" name="user">
        </div>
        <div class="user">
            <p>Mật khẩu :</p>
            <input type="password" placeholder="Password..." id="username" name="password">
        </div>
        <button type="submit" name='dangky'>ĐĂNG KÍ</button>
        <button type="reset" value="Nhập lại">Nhập lại</button>
    </form>
    
    <?php
    if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
    }
    ?>
    
</body>

</html>