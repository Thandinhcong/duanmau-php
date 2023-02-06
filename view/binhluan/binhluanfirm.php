<?php
session_start();
$iduser = $_SESSION['user']['id'];
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/layout.css">
    <style>
        .cmt table{
            margin-left: 100px;
            width: 100%;
        }
    </style>
</head>

<body>


    <div class="box2 mb">
        <div class="danhmuc menudoc">
            <div class="danhmuc0">
                <h4>Bình luận</h4>
            </div>
            <div class="box2 mb cmt">
                <table>
                    <?php

                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr?><td>'.$noidung.'</td>';
                        echo '<td>'.$iduser.'</td>';
                        echo '<td>'.$ngaybinhluan.'</td></tr>';
                    }

                    ?>
                </table>
            </div>

            <?php
            if (isset($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('h:i:sa d/m/y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header('Location: ' . $_SERVER["HTTP_REFERER"]);
            }
            ?>
            <form action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
                        <input type="hidden" name="idpro" value="<?= $idpro ?>">
                        <input type="text" name="noidung">
                        <input type="submit" name="guibinhluan" value="gửi bình luận">
                    </form>
        </div>
    </div>
</body>

</html>