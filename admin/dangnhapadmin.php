<?php
function checklogin($user, $pass)
{
  $sql = "SELECT * FROM taikhoan WHERE user='$user' and pass='$pass' and role = '1'";
  $sp = pdo_query_one($sql);
  if ($sp) {
    return true;
  }
  return false;
}
if (isset($_POST['dangnhap'])) {
  if (!empty($_POST['username'])) {
    $user = $_POST['username'];
  } else {
    echo "Phải nhập vào tên đăng nhâp";
    return;
  }
  if (!empty($_POST['password'])) {
    $pass = $_POST['password'];
  } else {
    echo "Phải nhập vào mật khẩu";
    return;
  }
  if (checklogin($user, $pass)) {
    $_SESSION['is_login'] = true;
    $_SESSION['admin'] = $user;
    header("Location: index.php");
  } else {
    echo "Kiểm tra lại tài khoản hoặc mật khẩu";
  }
}
?>
<form class="form" action="" method="post">
  <p class="form-title">Đăng nhập</p>
  <div class="input-container">
    <input placeholder="Tên đăng nhập" type="text" name="username">
  </div>
  <div class="input-container">
    <input placeholder="Mật khẩu" type="password" name="password">
  </div>
  <button class="submit" type="submit" name="dangnhap" style="cursor: pointer;">Đăng nhập</button>
</form>