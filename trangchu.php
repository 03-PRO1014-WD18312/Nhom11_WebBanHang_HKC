<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/binhluan.php";
    include "model/taikhoan.php";
    include "view/header.php";
    include "global.php";
    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $dstop10 = loadall_sanpham_top10();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            
            case "sanpham":
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm= load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            case "sanphamct":
                if(isset($_POST['guibinhluan'])){
                    insert_binhluan($_POST['idpro'], $_POST['noidung']);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sanpham = loadone_sanpham($_GET['idsp']);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/chitietsanpham.php";
                }else{
                    include "view/home.php";            
                }
                break;
            case "dangky":
                if(isset($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="đăng kí thành công";
                }
                include "view/login/dangky.php";
                break;
                case "dangnhap": 
                    if(isset($_POST['dangnhap']) && ($_POST['dangnhap']!="")){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $checkuser=checkuser($user,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            header('location:index.php');
                        }else{
                            $thongbao1="tài khoản không tồn tại vui lòng kiểm tra hoặc đăng ký!";
                        }
                }
                include "view/home.php";
                break;
                case "edit_taikhoan": 
                    if(isset($_POST['capnhat']) && ($_POST['capnhat']!="")){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel=$_POST['tel'];
                        $id=$_POST['id'];
                        update_taikhoan($id,$user,$pass,$email,$address,$tel);
                        $_SESSION['user']=checkuser($user,$pass);
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
            
        }
    }else{
        include "view/home.php";
    }
   
    include "view/footer.php";
?>