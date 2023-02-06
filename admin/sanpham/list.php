<div class="container">
    <form action="index.php?act=listsp" method="POST">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="table">
        <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>Tên Sản phẩm</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>VIEWS</th>
                <th></th>
            </tr>
            <?php

            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $image;

                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $hinh = "no image";
                }
                echo '  <tr>

                    <td><input type="checkbox"></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $price . '</td>                 
                    <td>' . $view . '</td>             
                    <td>
                       <a href="' . $suasp . '"> <input type="button" value="Sửa"></a> 
                       <a href="' . $xoasp . '"><input type="button" value="Xóa"></a>
                    </td>
                </tr>';
            }

            ?>

        </table>
    </div>
    <div class="btn">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa tất cả danh mục đã chọn">
        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
    </div>
</div>