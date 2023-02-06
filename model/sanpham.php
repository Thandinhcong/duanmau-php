<?php
function insert_sanpham($tensp, $pricesp, $hinh, $mota, $iddm)
{
    $sql = "insert into sanpham(name,price,image,mota,iddm) values ('$tensp','$pricesp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete  from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham($kyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != '') {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by name limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by view limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $dm =  pdo_query_one($sql);
    return $dm;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm='.$iddm.' AND id <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $iddm, $tensp, $pricesp, $hinh, $mota)
{
    if ($hinh != '') {
        $sql = "update sanpham set iddm='" . $iddm . "',name='" . $tensp . "',price='" . $pricesp . "',image='" . $hinh . "',mota='" . $mota . "' where id =" . $id;
    } else {
        $sql = "update sanpham set iddm='" . $iddm . "', name='" . $tensp . "',price='" . $pricesp . "',mota='" . $mota . "' where id =" . $id;
    }
    pdo_execute($sql);
}
