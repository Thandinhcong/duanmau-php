<div class="info">
    <div class="box1">
        <?php
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
        ?>
           <div class="info-box1">
                <div class="user">
                    <p>Xin chào <?=$user?> </p> 
                </div>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=">Đơn hàng của tôi</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php   
                if($role==1){

                
                ?>
                <li>
                    <a href="admin/index.php">Đăng nhập admin</a>
                </li>
                <?php }?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>
        <?php
        }else{
        
        ?>
        <div class="box1-h4">
            <h4>Tài khoản</h4>
        </div>
        <form action="index.php?act=dangnhap" method="POST" id="form1" class="form1">
            <div class="info-box1">
                <div class="user">
                    <p>Tên đăng nhập :</p>
                    <input type="text" id="name" placeholder="Tên đăng nhập.." name="user">
                </div>
                <div class="password">
                    <p>Mật khẩu :</p>
                    <input type="password" id="password" placeholder="*********" name="password"> <br>
                </div>
                <input type="checkbox" id="" name="Ghi nhớ đăng nhập"> Ghi nhớ đăng nhập<br>
                <button id="btn-box1" name="dangnhap" type="submit">Đăng nhập</button> <br>
                <li>
                    <a href="quenmk.html">Quên mật khẩu</a> <br>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng kí thành viên</a>
                </li>
            </div>
        </form>
        <?php
        }
        ?>
    </div>
    <div class="box2 mb">
        <div class="danhmuc menudoc">
            <div class="danhmuc0">
                <h4>Danh mục</h4>
            </div>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '
                    <div class="danhmuc1">
                        <a href="' . $linkdm . '">
                            <p>' . $name . '</p>
                        </a>
                    </div>
                      ';
            }
            ?>

            <form action="index.php?act=sanpham" method="POST" class="search-box2">
                <input type="text" placeholder="Tìm kiếm từ khóa" name="kyw">
                <input type="submit" name="timkiem" value="Tìm kiếm">
            </form>
        </div>
    </div>
    <div class="box3">
        <div class="love3">
            <h4>Top 10 yêu thích</h4>
        </div>
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $image;
            echo '                  
                    <div class="content3">
                    <div class="icon3">
                    <a href=""><img src="' . $img . '" alt=""></a>
                    </div>
                    <div class="info-content3">
                     <a href="' . $linksp . '">' . $name . '</a>
                    </div>
                    </div>
                    ';
        }
        ?>
    </div>
</div>