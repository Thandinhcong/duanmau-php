<div class="view/container">

    <!--sản phẩm-->

    <div class="product">
        <div class="slideshow">
            <form action="index.php?act=billcomfirm" method="POST">
                <div class="box3">
                    <div class="love3">
                        <h4>Thông tin đặt hàng</h4>
                    </div>
                    <div class="table">
                        <table>
                            <?php
                            if(isset($_SESSION['user'])){
                                $name=$_SESSION['user']['user'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                            }else{
                                $name="";
                                $address="";
                                $email="";
                                $tel="";
                            }
                            ?>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" value="<?=$name?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?=$address?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?=$email?>"></td>
                            </tr>
                            <tr>
                                <td>Numbers</td>
                                <td><input type="text" name="tel" value="<?=$tel?>"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box3">
                    <div class="love3">
                        <h4>Phương thức thanh toán</h4>
                    </div>
                    <div class="">
                        <table>
                            <tr>
                            <td><input type="radio" value="pttt">Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="pttt">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="pttt">Thanh toán online</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box3">
                    <div class="love3">
                        <h4>Thông tin giỏ hàng</h4>
                    </div>
                    <div class="table">
                       <table>
                       
                      <?php
                      viewcart(1);
                      ?>
                       </table>
                    </div>
                </div>
                <div class="">
                    <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
                </div>
            </form>

        </div>
        <div class="info">
            <?php include "view/boxright.php"; ?>
        </div>
    </div>
    <?php
    include "view/footer.php";
    ?>
</div>
</div>