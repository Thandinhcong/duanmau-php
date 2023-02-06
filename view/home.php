<div class="view/container">

    <!--sản phẩm-->
    <div class="product">
        <div class="slideshow">
            <div class="slide">
                <img src="view/img/product1.jpg" id="hinh" alt="">

                <p onclick="_auto()"></p>
            </div>
            <div class="pro-item">
                <?php
                $i = 0;
                foreach ($spnew as $sp) {
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
                            <div class="addtocart">
                            <form action="index.php?act=addtocart" method="POST">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="image" value="' . $image . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                            </div>
                        </div>

                        ';
                    $i += 1;
                }

                ?>
            </div>
            <!-- <div class="pro-item">
                <div class="item-content">
                    <a href=""> <img src="view/img/product1.jpg" alt=""></a>
                    <div class="info-pro">
                        <h3>$30.5</h3>
                        <p>Giay nike trắng đen</p>
                    </div>
                </div>

            </div> -->
        </div>
        <div class="info">
            <?php include "boxright.php" ?>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</div>