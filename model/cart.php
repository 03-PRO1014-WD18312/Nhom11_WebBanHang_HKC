<?php
   function loadall_thongke()
   {
       $sql = "select sanpham.id as masp, sanpham.name as tensp, count(chitietdh.soluong) as countct, min(chitietdh.pricedh) as minpricedh, max(chitietdh.pricedh) as maxpricedh, avg(chitietdh.pricedh) as avgpricedh";
       $sql .= " from chitietdh left join sanpham on sanpham.id=chitietdh.id_sp";
       $sql .= " group by sanpham.id order by sanpham.id desc";
       $listtk = pdo_query($sql);
       return $listtk;
   }
   ?>