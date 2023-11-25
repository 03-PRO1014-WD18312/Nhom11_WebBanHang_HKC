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
                    <a href="login.html">Tài khoản</a>
                </div>
                <div class="header1">
                    <img class="a" src="upload/tải xuống (1).png" alt="">
                    <a href="giohang.html">Giỏ hàng</a>
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
                    <li><a href="#"><b>Áo xuân hè</b> </a></li>
                    <li><a href="#"><b>Quần</b> </a></li>
                    <li><a href="#"><b>Áo Jean</b></a></li>
                    <li><a href="thongtin.php"><b> Tin tức</b></a></li>
                </ul>
            </div>
            <div class="tim">
                <input class="timkiem" type="text" placeholder="Tìm kiếm" style="border: 1px solid black; border-radius: 10px;">
               <a href="#"><img class="icontim" src="upload/images.png" alt=""></a>
            </div>
        </div>
        <!-- <div class="ke"></div> -->
        
        <h1>THÔNG TIN</h1>
        <div class="dep">
            <div class="hd">
                    <img src="upload/tin2.jpg" alt="">
                   <a href="huongdan.php"> <span><b>Hướng dẫn mua hàng</b><h4>Cách thức xem và đặt hàng</h4></span></a>
            </div>
        </div>
        <center><div class="ke" ></div></center>
        <div class="dep">
            <div class="hd">
                    <img src="upload/tin.jpg" alt="">
                   <a href="cs.php"> <span><b>Chính sách vận chuyển</b><h4>Vận chuyển</h4></span></a>
            </div>
        </div>
        <!-- <div class="footer">
            <span class="f">Đăng ký ngay để đc nhận thông báo khi có sản phẩm mới</span>
            <form class="regiter">
                <input style="border: 1px solid black;"
                  class="input-register"
                  type="email"
                  required
                  placeholder="Email Address"
                /><br />
                <input style="border: 1px solid black;"
                  type="submit"
                  value="Đăng ký"
                  id="submit"
                  class="btn-register-footer"
                />
              </form>
        </div> -->
    </div>
</body>
<style>

  .dep{
    margin-top: 100px;
}
.hd{
    display: flex;  
    justify-content: space-around;
    align-items: center ;
}
.hd>img{
    width: 600px;
}
h4{
    font-size: 30px;
    margin-top: 10px;
}
.hd>img:hover{
    transform: scale(1.1);
    transition: 0.3s;
}
.ke{
    margin-top: 50px;
    width: 1300px;
    border: 1px solid rgb(114, 97, 97);
}
</style>
</html>