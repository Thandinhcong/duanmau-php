<h2>Thêm mới sản phẩm</h2>
        <form action="index.php?act=addsp" class="frm-ad" method="POST" enctype="multipart/form-data">
            <div class="maloai">
                <p>Danh muc  :</p>
                <select name="iddm" >
                    <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
                 
                </select>
            </div>
            <div class="tenloai">
                <p>Tên sản phẩm :</p>
                <input type="text" name="tensp">
            </div>
            <div class="tenloai">
                <p>Price :</p>
                <input type="text" name="pricesp">
            </div>
            <div class="tenloai">
                <p>Hình :</p>
                <input type="file" name="hinh">
            </div>
            <div class="tenloai">
                <p>Mô tả :</p>
                <textarea name="mota"  cols="30" rows="10"></textarea>
            </div>
            
            <div class="btn-ad">
                <button type="submit" name="themmoi">Thêm mới</button>
                <button type="reset">Nhập lại</button>
                <a href="index.php?act=listsp"><input type="text" value="Danh sách" id="danhsach"></a>
            </div>
        </form>
        <?php
        if(isset($thongbao) && ($thongbao!='')){
            echo "$thongbao";
        } 
        ?>
        
    </div>