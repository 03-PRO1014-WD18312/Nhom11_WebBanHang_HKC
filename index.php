<?php
session_start();
ob_start();

include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/donhang.php";
include "view/ghcart.php";
include "global.php";

if (!isset($_SESSION['giohangcuatoi']))
    $_SESSION['giohangcuatoi'] = [];
if (!isset($_SESSION['donhangcuatoi']))
    $_SESSION['donhangcuatoi'] = [];


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
$kiemtra = 0;
if (isset($_GET['act'])&&$_GET['act'] == 'donhang'||$_GET['act'] == 'bill') {
    $kiemtra = 1;
}
if ($kiemtra == 0) {
    include 'view/header.php';
    
    if ($_GET['act'] && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'timkiem':
                if (isset($_POST['tim']) && ($_POST['tim'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                    $kqtimkiem = "kết quả tìm kiếm với từ khóa: " . $kyw;
                } else {
                    $kyw = '';
                    $iddm = 0;
                    $kqtimkiem = "";
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
                // $tendm = load_ten_dm($iddm);
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
                    if (!empty($_POST['username'])) {
                        $user = $_POST['username'];
                    } else {
                        return;
                    }
                    if (!empty($_POST['email'])) {
                        $email = $_POST['email'];
                    } else {
                        return;
                    }
                    if (!empty($_POST['address'])) {
                        $address = $_POST['address'];
                    } else {
                        return;
                    }
                    if (!empty($_POST['tel'])) {
                        $tel = $_POST['tel'];
                    } else {
                        return;
                    }
                    if (!empty($_POST['password'])) {
                        $pass = $_POST['password'];
                    } else {
                        return;
                    }
                    $role = 0;
                    insert_taikhoan($email, $user, $pass, $tel, $address, $role);
                    echo "<script>";
                    echo "alert('Đăng kí thành công')";
                    echo "</script>";
                }
                include "view/reg.php";
                break;
            case "dangnhap":
                if (isset($_POST['dangnhap'])) {
                    if (!empty($_POST['username'])) {
                        $user = $_POST['username'];
                    } else {
                        return;
                    }
                    if (!empty($_POST['password'])) {
                        $pass = $_POST['password'];
                    } else {
                        return;
                    }
                    if (checkuser($user, $pass)) {
                        $_SESSION['is_login'] = true;
                        $_SESSION['username'] = $user;
                        header('location:index.php?act=resethome');
                    } elseif (checkadmin($user, $pass)) {
                        $_SESSION['is_login'] = true;
                        $_SESSION['admin'] = $user;
                        header('location:admin/index.php');
                    } else {
                        echo "<script>";
                        echo "alert('Tài khoản không tồn tại vui lòng kiểm tra hoặc đăng ký!')";
                        echo "</script>";
                    }
                }
                include "view/login.php";
                break;
            case "tkmk":
                if (!empty($_SESSION['username'])) {
                    include "tkmk.php";
                } else {
                    header("Location: ?act=dangnhap");
                }
                break;
            case "thoat":
                unset($_SESSION['username']);
                unset($_SESSION['is_login']);
                header("location: ?act=dangnhap");
                break;
            case "edit_taikhoan":
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    $info = getuser($username);
                }
                if (isset($_POST['capnhat'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_taikhoan($id, $user, $pass, $email, $address, $tel);
                    echo "<script>";
                    echo "alert('Cập nhật thành công')";
                    echo "</script>";
                    header('location:index.php?act=edit_taikhoan');
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case "quenmk":
                if (isset($_POST['guiemail'])) {
                    if (!empty($_POST['email'])) {
                        $email = $_POST['email'];
                        if (sendMail($email)) {
                            echo "<script>";
                            echo "alert('Gửi mai thành công')";
                            echo "</script>";
                        } else {
                            echo "<script>";
                            echo "alert('Gửi mai thất bại')";
                            echo "</script>";
                        }
                    } else {
                        return;
                    }
                }
                include "view/quenmk.php";
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
                    $spadd = array($id, $name, $img, $price, $soluong);
                    $_SESSION['giohangcuatoi'][] = $spadd;
                    header('location: index.php?act=giohang');
                }
                // include "view/giohang.php";
                break;
            case 'giohang1':
                include "view/giohang.php";
                break;
            case 'giohang':
                if (isset($_GET['del']) && ($_GET['del'] == 1)) {
                    unset($_SESSION["giohangcuatoi"]);
                    // $_SESSION['giohangcuatoi']=[];
                    header('location: index.php?act=resethome');
                } else {
                    if (isset($_SESSION['giohangcuatoi'])) {
                        $tongdh = get_tongdh();
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
                    array_push($_SESSION['donhangcuatoi'], $spadd);
                }
                include "muangay.php";
                break;
            default:
                include "view/home.php";
        }
    } else {
        include "view/home.php";
    }
} else {
    $act = $_GET['act'];
    switch ($act) {
        case 'donhang':
                include "donhang.php";
            break;
        case 'bill':
            // exit(include 'view/header.php');
            if (isset($_POST['thanhtoandh']) && ($_POST['thanhtoandh'])) {
                $tongtiendh = 0;
                foreach ($_SESSION['giohangcuatoi'] as $spadd) {
                    extract($spadd);
                    $ttien = $spadd[3] * $spadd[4];
                    $tongtiendh = $tongtiendh + $ttien;
                }
                $tongtiendh1 = $tongtiendh;
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $diachi = $_POST['diachi'];
                $ghichu = $_POST['ghichu'];
                $ngay_dat_hang = date('h:i:sa d/m/Y');
                $id_dh = insert_donhang($tongtiendh1, $hoten, $email, $phone, $diachi, $ngay_dat_hang, $ghichu);
                foreach ($_SESSION['giohangcuatoi'] as $spadd) {
                    extract($spadd);
                    // $id_sp = $spadd[0];
                    // $soluong = $spadd[4];
                    // $tongdh = $ttien;
                    // $namedh = $spadd[1];
                    // $imgdh = $spadd[2];
                    // $pricedh = $spadd[3];
                    insert_chitietdonhang($spadd[0], $id_dh, $spadd[4],$ttien, $spadd[1], $spadd[2], $spadd[3]);
                }
                $_SESSION['giohangcuatoi']=[];
            }
            // $listdonhang=loadone_donhang($id_dh);
            // $billct=loadall_ctdh($id_dh);
            // echo "<script>";
            //         echo "alert('Đặt hàng thành công')";
            //         echo "</script>";
            header('location:index.php?act=resethome');

            break;
            // case 'dathanhthanhcong':
            //     include "dathanhthanhcong.php";
            //     break;

                default:
    }
}


include "view/footer.php";
