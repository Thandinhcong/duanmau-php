<?php
if(is_array($dm)){
    extract($dm);

}
?>
<h2>Cập nhật loại hàng</h2>
        <form action="index.php?act=updatedm" class="frm-ad" method="POST">
            <div class="maloai">
                <p>Mã loại :</p>
                <input type="text" placeholder="Auto number" name="maloai">
            </div>
            <div class="tenloai">
                <p>Tên loại :</p>
                <input type="text" name="tenloai" value="<?php
                if(isset($name)&&($name!="")) echo $name;
                ?>">
            </div>
            <div class="btn-ad" >
                <input type="hidden" value="<?php
                if(isset($id)&&($id>0)) echo $id;
                ?>" name="id">
                <button type="submit" name="capnhat">Cập nhật</button>
                <button type="submit">Nhập lại</button>
                <a href="index.php?act=listdm"><input type="text" value="Danh sách" id="danhsach"></a>
            </div>
        </form>
        <?php
        if(isset($thongbao) && ($thongbao!="")) echo "$thongbao";
        ?>
        
    </div>