<h2>Thêm mới loại hàng</h2>
        <form action="index.php?act=adddm" class="frm-ad" method="POST">
            <div class="maloai">
                <p>Mã loại :</p>
                <input type="text" placeholder="Auto number" name="maloai">
            </div>
            <div class="tenloai">
                <p>Tên loại :</p>
                <input type="text" name="tenloai">
            </div>
            <div class="btn-ad">
                <button type="submit" name="themmoi">Thêm mới</button>
                <button type="submit">Nhập loại</button>
                <a href="index.php?act=listdm"><input type="text" value="Danh sách" id="danhsach"></a>
            </div>
        </form>
        <?php
        if(isset($thongbao) && ($thongbao!='')){
            echo "$thongbao";
        } 
        ?>
        
    </div>