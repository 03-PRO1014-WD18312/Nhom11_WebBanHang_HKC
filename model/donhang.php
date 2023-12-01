<?php
function insert_donhang($tongtiendh1,$hoten,$email,$phone,$diachi,$ghichu,$ngay_dat_hang)
{
    $sql = "insert into donhang(tongdh,hoten,email,phone,diachi,ghichu,ngay_dat_hang) values('$tongtiendh1','$hoten','$email','$phone','$diachi','$ghichu','$ngay_dat_hang')";
    pdo_execute($sql);
}
?>