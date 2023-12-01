<?php
    $html_cart=giohang();
?>

<div class="containerfull">
    <div class="container0">
    <div class="giohang">Giỏ hàng của bạn</div>
    
    <section class="container1">
        <div class="container2">
            <div class="cart">
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
        <div class="clxt"><a class="xt" href="#">Thanh toán</a>  <a class="xt" href="index.php?act=giohang&del=1">xóa tất cả</a></div>
    </section>
    </div>
    <div class="container3">
        <h3>TÓM TẮT ĐƠN HÀNG</h3>
        <h3>
            <p>Tổng tiền:</p>
            <p><?=$tongdh?>.000đ</p>
        </h3>
        <center class="ke"><h4></h4></center>
        <center class="btn">
            <button class= "mua"><p><a href="index.php?act=donhang">Tiến hành đặt hàng</a></p></button>
            <button class= "mua"><p><a href="index.php?act=resethome">Mua thêm sản phẩm</a></p></button>
        </center>
    </div>
</div>
<style>
    .containerfull{
        display: flex;
    }
    .container3{
        margin-left: 300px;
        margin-top: 60px;
        width: 400px;
        height: 300px;
        background-color: #ccc;
    }
    h3{
        display: flex;
        justify-content: space-between;
        font-size: 20px;
        margin: 15px;
    }
    h4{
        width: 350px;
        border: 1px solid black;
    }
    .mua>p{
        width: 250px;
        height: 35px;
        font-size: 20px;
        text-align: center;
        line-height: 35px;
        border: 1px solid black;
    }
    .btn{
        margin-top: 30px;
    }
    .mua>p:hover{
        background-color: black;
        color: #fff;
    }
    .mua>p>a:hover{
        background-color: black;
        color: #fff;
    }
    .giohang{
        font-size: 30px;
        margin: 10px;
        color: red; 
    }
    .cart{
        margin-left: 20px; 
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