<div class="view/container">

    <!--sản phẩm-->

    <div class="product">
        <div class="slideshow">

            <div class="box3">
                <div class="love3">
                    <h4>Sản Phẩm</h4>
                </div>
                <div class="pro-item">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $image;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = '';
                    } else {
                        $mr = "mr";
                    }
                    echo '                   
                    
                        <div class="item-content" ' . $mr . '>
                            <a href="' . $linksp . '"> <img src="' . $hinh . '" alt=""></a>
                            <div class="info-pro">
                                <h3>' . $price . '</h3>
                                <p>' . $name . '</p>
                            </div>
                        </div>
                   
                        ';
                    $i += 1;
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