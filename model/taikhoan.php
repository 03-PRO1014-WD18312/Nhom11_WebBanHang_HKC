<?php
//dang ky
function insert_taikhoan($email, $user, $pass, $tel, $address, $role)
{
    $sql = "INSERT INTO `taikhoan` (`email`, `user`, `pass`, `tel`, `address`, `role`) VALUES ('$email', '$user','$pass', '$tel', '$address', '$role'); ";
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='$user' and pass='$pass' and role = '0'";
    $sp = pdo_query_one($sql);
    if ($sp) {
        return true;
    }
    return false;
}
function checkadmin($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='$user' and pass='$pass' and role = '1'";
    $sp = pdo_query_one($sql);
    if ($sp) {
        return true;
    }
    return false;
}
function getuser($username)
{
    $sql = "SELECT * FROM taikhoan WHERE user='$username' and role = '0'";
    return pdo_query_one($sql);
}
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set user='" . $user . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' where id=" . $id;
    return pdo_execute($sql);
}
function delete_taikhoan($id){
    $sql= "delete from taikhoan where id=".$id;
    pdo_execute($sql);
}

function sendMail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return "Gửi email thành công";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'testguimail981@gmail.com';                     //SMTP username
        $mail->Password   = 'ezjp ebvo xaxw oexq';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('testguimail981@gmail.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mau khau cua ban la ' . $pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
