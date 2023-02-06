<div class="view/container">

    <!--sản phẩm-->

    <div class="product">
        <div class="slideshow">

            <div class="box3">
                <?php
                extract($onesp);
                ?>
                <div class="love3">
                    <h4><?= $name ?></h4>
                </div>
                <div class="spct">
                    <?php
                    extract($onesp);
                    $img = $img_path . $image;

                    echo "<div class='img'> <img src='" . $img . "'><br></div>";
                    echo $mota;
                    ?>
                </div>
            </div>
            <div class="box4">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {

                        $("#binhluan").load("view/binhluan/binhluanfirm.php", {idpro: <?=$id?>});
                    });
                </script>
                <div class="love3">
                    <h4>Bình luận</h4>
                </div>
                <div class="" id="binhluan">

                </div>
            </div>
            <div class="box3">
                <div class="love3">
                    <h4>Sản phẩm cùng loại</h4>
                </div>
                <div class="">
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        echo "
                            <li><a href='" . $linksp . "'>'.$name.'</a></li>
                        ";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="info">
            <?php include "boxright.php" ?>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</div>
</div>