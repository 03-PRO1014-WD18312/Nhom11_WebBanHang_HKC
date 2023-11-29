<?php
session_start();
ob_start();

include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "view/header.php";
include "view/ghcart.php";
include "global.php";

if(!isset($_SESSION['giohangcuatoi'])) $_SESSION['giohangcuatoi']=[]; 
if(!isset($_SESSION['donhangcuatoi'])) $_SESSION['donhangcuatoi']=[];


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'timkiem':
            if (isset($_POST['tim']) && ($_POST['tim'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "view/timkiemsp.php";
            break;
        case "sanpham":
            if (isset($_POST['keyword']) && $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                include "chitietsanpham.php";
            } else {

                include "view/home.php";
            }
            break;
        case "dangky":
            if (isset($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "đăng kí thành công";
            }
            include "view/login/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'] != "")) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location:index.php');
                } else {
                    $thongbao1 = "tài khoản không tồn tại vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include "view/home.php";
            break;
        case "edit_taikhoan":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'] != "")) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('location:index.php?act=edit_taikhoan');
            }
            include "view/login/edit_taikhoan.php";
            break;
        case "dangxuat":
            dangxuat();
            include "view/home.php";
            break;
        case "quenmk":
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
            }
            include "view/login/quenmk.php";
            break;
        case "resethome":
            include "view/home.php";
            break;
        case "themvaogiohang":
            if (isset($_POST['themvaogiohang']) && ($_POST['themvaogiohang'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                $spadd = array($id, $name, $img, $price, $soluong,);
                $_SESSION['giohangcuatoi'][]=$spadd;
                header('location: index.php?act=giohang');
            }
            // include "view/giohang.php";
            break;
            case 'giohang1':
                include "view/giohang.php";
                break;
        case 'giohang':
            if (isset($_GET['del']) && ($_GET['del']==1)){
                unset($_SESSION["giohangcuatoi"]);
                // $_SESSION['giohangcuatoi']=[];
                header('location: index.php');
            }else {
                if (isset($_SESSION['giohangcuatoi'])) {
                    $tongdh=get_tongdh();
                }
                include "view/giohang.php";
            }
            break;

        case "muangay":
            if (isset($_POST['muangay']) && ($_POST['muangay'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['id'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['donhangcuatoi'],$spadd);
            }
            include "muangay.php";
            break;
     default: include "view/home.php";       
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>