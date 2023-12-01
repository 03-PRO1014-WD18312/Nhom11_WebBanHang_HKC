<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/donhang.css">
</head>

<body>
    <form action="index.php?act=donhang" method="POST">
        <div class="container">
            <div class="title">
                <p>Thông tin giao hàng</p>
            </div>
            <div class="content">
                <div class="box-left">
                    <input type="text" placeholder="ho va ten" name="hoten">
                    <div class="email-sdt">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="so dien thoai" name="phone">
                    </div>
                    <input type="text" placeholder="Địa chỉ" name="diachi">
                    <textarea name="ghichu" class="last" id="" cols="30" rows="10" placeholder="Ghi chu"
                        ></textarea>
                    <a href="index.php?act=giohang" class="backgiohang">
                        < Gio hang</a>
                </div>
                <!-- <div class="box-right">
                <div class="box-one">
                    <img src="https://dinhcuthanhcong.com/wp-content/uploads/2022/05/TRAI-NGHIEM-CUOC-SONG-DINH-CU-O-ANH-1.jpg"
                        alt="">
                    <p>Áo Nỉ Fitted L.4.7945 - Be 05 - 2XL</p>
                    <a href="" class="xoa">xoa</a>
                    
                </div>
                <p>soluong</p>
                    <p>gia tien</p>
                <div class="div-two">
                    <p>Tong tien</p>
                </div>
                <input type="submit" value="hoan tat don hang">
            </div> -->
                <?php
                $html_cart = donhang();
                ?>
                <?= $html_cart ?>

                <input type="submit" name="thanhtoandh" value="Hoàn Tất Đơn Hàng">
            </div>
        </div>
        </div>
    </form>
</body>

</html>