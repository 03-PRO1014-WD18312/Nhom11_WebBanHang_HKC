<?php

    function giohang(){
        $html_cart='';
        $i=1;
        foreach ($_SESSION['giohangcuatoi'] as $spadd) {
            extract($spadd);
            $ttien=$spadd[3]*$spadd[4];
            $html_cart.='
            <tr>
            <td>'.$i.'</td>
            <td><img src="' . $spadd[2] . '" alt="" style="width: 50px;"></td>
            <td>'.$spadd[1].'</td>
            <td>'.$spadd[3].'.000đ</td>
            <td>'.$spadd[4].'</td>
            <td>'.$ttien.'.000đ</td>
            <td><a href="#"><input type="button" value="Xóa"></td></a></td>
        </tr>
        
            ';
        $i++;
        }
        return $html_cart;
    }

    function get_tongdh(){
        
        $tong=0;
        foreach ($_SESSION['giohangcuatoi'] as $spadd) {
            extract($spadd);
            $ttien=$spadd[3]*$spadd[4];
            $tong+=$ttien;
        }
        return $tong;
    }
?>