<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $image;

if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no image";
}
?>
<h2>Cập nhật loại hàng</h2>
<form action="index.php?act=updatesp" class="frm-ad" method="POST" enctype="multipart/form-data">
    <div class="tenloai">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
             
                if($iddm==$danhmuc['id']){
                    echo '<option value="' . $danhmuc['id'] . '" selected>' . $danhmuc['name'] . '</option>';
                    
                }else{
                    echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                }
                
            }
            ?>
        </select>
    </div>
  
    <div class="tenloai">
        <p>Tên sản phẩm :</p>
        <input type="text" name="tensp" value="<?= $name ?>">
    </div>
    <div class="tenloai">
        <p>Price :</p>
        <input type="text" name="pricesp" value="<?=$price?>">
    </div>
    <div class="tenloai">
        <p>Hình :</p>
        <input type="file" name="hinh">
        <?= $hinh ?>
    </div>
    <div class="tenloai">
        <p>Mô tả :</p>
        <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
    </div>

    <div class="btn-ad">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="capnhat">Cập nhật</button>
        <button type="reset">Nhập lại</button>
        <a href="index.php?act=listsp"><input type="text" value="Danh sách" id="danhsach"></a>
    </div>
</form>
<?php
if (isset($thongbao)) echo "$thongbao";
?>

</div>