<?php

function insert_donhang($tongtiendh1, $hoten, $email, $phone, $diachi, $ngay_dat_hang, $ghichu)
{
    $sql = "insert into donhang(tongdh,hoten,email,phone,diachi,ngay_dat_hang,ghichu) values('$tongtiendh1','$hoten','$email','$phone','$diachi','$ngay_dat_hang','$ghichu')";
    return pdo_execute_lastinsertId($sql);
}
function insert_chitietdonhang($id_sp, $id_dh, $soluong, $tongdh, $namedh, $imgdh, $pricedh)
{
    $sql = "insert into chitietdh(id_sp,id_dh,soluong,tongdh,namedh,imgdh,pricedh) values('$id_sp','$id_dh','$soluong','$tongdh','$namedh','$imgdh','$pricedh')";
    pdo_execute_lastinsertId($sql);
}
function loadone_donhang($id){
    $sql = "select * from donhang where id_dh=" . $id;
    $donhang = pdo_query_one($sql);
    return $donhang;
}
function loadall_ctdh($id){
    $sql = "select * from chitietdh where id_dh=" . $id;
    $donhang = pdo_query($sql);
    return $donhang;
}
?>