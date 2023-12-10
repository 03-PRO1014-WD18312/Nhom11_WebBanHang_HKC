<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/chitietsanpham.css">

    <title>dự án 1</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header1">
                <img class="a" src="upload/istockphoto-1264235523-612x612.jpg" alt="">
                <p>0926524733</p>
            </div>
            <div class="header1">
                <div class="header1">
                    <img class="a" src="upload/tải xuống.png" alt="">
                    <a href="?act=tkmk">Tài khoản</a>
                </div>
                <div class="header1">
                    <img class="a" src="upload/tải xuống (1).png" alt="">
                    <a href="index.php?act=giohang1">Giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="header2">
            <div class="logo">
                <img class="b" src="upload/logo.jpg" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php?act=resethome"><b> Trang chủ</b></a></li>
                    <li><a href="index.php?act=sanpham"><b>Sản phẩm</b> </a></li>
                    <li><a href="thongtin.php"><b> Tin tức</b></a></li>
                </ul>
            </div>
            <div class="tim">
                <!-- <input class="timkiem" type="text" placeholder="Tìm kiếm" style="border: 1px solid black; border-radius: 10px;"> -->
               <a href="index.php?act=timkiem&tim="><img class="icontim" src="upload/images.png" alt=""></a>
            </div>
        </div>
        <div class="ke"></div>

    <?php
    $html_cart='';
    $i=1;
    if (isset($listdonhang) && (is_array($listdonhang))) {
        extract($listdonhang);
    }


    foreach($billct as $bill){
        extract($bill);
        $html_cart.='<tr>
                <td>'.$i.'</td>
                <td><img src="' . $spadd[2] . '" alt="" style="width: 50px;"></td>
                <td>'.$spadd[1].'</td>
                <td>'.$spadd[3].'.000đ</td>
                <td>'.$spadd[4].'</td>
                <td>'.$ttien.'.000đ</td>
                </tr>
            ';
    $i++;}
    ?>

<div class="cart">
                <table>
                    <tr class="tr">
                        <th>tongdh</th>
                        <th>hoten</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>diachi</th>
                        <th>ngay_dat_hang</th>
                        <th>ghichu</th>
                        <th>Trạng thái</th>
                    </tr>
                        <th><?=$listdonhang['tongdh'];?></th>
                        <th><?=$listdonhang['hoten'];?></th>
                        <th><?=$listdonhang['email'];?></th>
                        <th><?=$listdonhang['phone'];?></th>
                        <th><?=$listdonhang['diachi'];?></th>
                        <th><?=$listdonhang['ngay_dat_hang'];?></th>
                        <th><?=$listdonhang['ghichu'];?></th>
                        <th><?=$listdonhang['trangthai'];?></th>
                        
                        <tr class="tr">
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr><?=$html_cart?><br>
                        
                        
                </table>
            </div>

</body>

</html>
<style>
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
    .tr{
        color: red;
    }
</style>