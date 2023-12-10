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
    function donhang(){
        $html_cart='';
        $i=1;
        $tongtiendh=0;
        foreach ($_SESSION['giohangcuatoi'] as $spadd) {
            extract($spadd);
            $ttien=$spadd[3]*$spadd[4];
            $tongtiendh=$tongtiendh+$ttien;
            $html_cart.='
            <div class="box-right">
                <div class="box-one">
                    <img src="'.$spadd[2].'"
                        alt="" name="anh">
                    <p name="tensp">'.$spadd[1].'</p>
                    <a href="" class="xoa">xoa</a>
                    
                </div>
                <p name="soluong">Số Lượng: '.$spadd[4].'</p>
                    <p name="giatien">Giá Tiền: '.$ttien.'.000đ</p>
                    
            ';
            
        $i++;
        }
        $html_cart.='<div class="div-two">
                    <p name="tongtien">Tổng tiền: '.$tongtiendh.'.000đ</p>
                </div>';
        return $html_cart;
    }
    function chitietdh($listdonhang){
        $html_cart='';
        $i=1;
        $tongtiendh=0;
        foreach ($listdonhang as $spadd) {
            extract($spadd);
            print_r($spadd); 
        //     $ttien=$spadd[3]*$spadd[4];
        //     $tongtiendh=$tongtiendh+$ttien;
        //     $html_cart.='
        //     <div class="box-right">
        //         <div class="box-one">
        //             <img src="'.$spadd[2].'"
        //                 alt="" name="anh">
        //             <p name="tensp">'.$spadd[1].'</p>
        //             <a href="" class="xoa">xoa</a>
                    
        //         </div>
        //         <p name="soluong">Số Lượng: '.$spadd[4].'</p>
        //             <p name="giatien">Giá Tiền: '.$ttien.'.000đ</p>
                    
        //     ';
            
        // $i++;
        // }
        // $html_cart.='<div class="div-two">
        //             <p name="tongtien">Tổng tiền: '.$tongtiendh.'.000đ</p>
        //         </div>';
        //         echo $ctdh['id_sp'];
    echo $spadd['id_dh'];
    echo $spadd['soluong'];
    echo $spadd['tongdh'];
    echo $spadd['namedh'];
    echo $spadd['imgdh'];
    echo $spadd['pricedh'];
        return $html_cart;
    }
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