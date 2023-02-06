<div class="container">

        <div class="table">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TK</th>
                    <th>username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Numbers</th>
                    <th>Vai trò</th>
                    <th></th>

                </tr>
                <?php
       
        foreach ($listtaikhoan as $taikhoan) {
            extract($taikhoan);
            $suatk = "index.php?act=suatk&id=" . $id;
            $xoatk = "index.php?act=xoatk&id=". $id;
        echo '  <tr>

                    <td><input type="checkbox"></td>
                    <td>' . $id . '</td>
                    <td>' . $user . '</td>
                    <td>' . $password . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $role . '</td>
                    <td>
                       <a href="'.$suatk.'"> <input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
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
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>