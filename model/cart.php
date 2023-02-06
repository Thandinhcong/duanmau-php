<?php
function viewcart($del){
    global $img_path;
    $tong = 0;
    $i=0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
        if($del==1){
            $xoasp_th='<th>Thao tác</th>';
            $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"> <input type="button" value="xóa"></a></td>';
        }else{
            $xoasp_th='';
            $xoasp_td='';
        }
        echo ' 
        <tr>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        '.$xoasp_th.'

    </tr>
        <tr>             
                <td><img src="' . $hinh . '" height="80"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $thanhtien . '</td>
                '. $xoasp_td.'                           
        </tr>';
        $i+=1;
    }
    echo ' 
    <tr>             
            <td colspan="4">Tổng đơn hàng</td>
            
            <td>' . $tong . '</td>
            <td></td>
       
    </tr>
';
}
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
    }
    return $tong;
}
// function insert_bill($name,$email,$address,$tel,$ngaydathang,$tongdonhang){
//     $sql="insert into bill(name,email,address,tel,ngaydathang,tongdonhang) values ('','','','','')";
// }
