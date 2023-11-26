<?php
  
    $html_cart='';
    $i=1;
    foreach ($_SESSION['giohangcuatoi'] as $spadd) {
        
        $ttien=$spadd[3]*$spadd[4];
        $html_cart.='
        <tr>
        <td>'.$i.'</td>
        <td><img src="' . $spadd[2] . '" alt="" style="width: 50px;"></td>
        <td>'.$spadd[1].'</td>
        <td>'.$spadd[3].'.000đ</td>
        <td>'.$spadd[4].'</td>
        <td>'.$ttien.'.000đ</td>
        <td>xóa</td>
    </tr>
    
        ';
    $i++;
    }
?>

<div class="containerfull">
    <div class="giohang">Giỏ hàng</div>
</div>
    <section class="container">
        <div class="container2">
            <div class="cart">
                <h2>ĐƠN HÀNG</h2>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                        <?=$html_cart;?>
                        <br>
                        
                </table>
            </div>
            
        </div>
        <div class="clxt"><a class="xt" href="#">Thanh toán</a>  <a class="xt" href="index.php?act=deletegh">xóa</a></div>
    </section>
<style>
    .giohang{
        font-size: 30px;
        margin: 10px;
        color: red; 
    }
    .cart{
        margin-left: 20px; 
    }
    h2{
        font-size: 20px; 
    }
    table{
        border:1px solid #000;
    }
    th{
        
        border:1px solid #000;
        font-size: 15px;
    }
    td{
        border:1px solid #000;
        text-align: center;
        font-size: 15px;
    }
    .clxt{
        margin-top: 20px;
    }
    .xt{
        font-size: 15px;
        margin-left: 30px;
        border: 1px solid black;
        border-radius: 4px;
    }
    .xt:hover{
        background-color: #bbb;
    }
</style>