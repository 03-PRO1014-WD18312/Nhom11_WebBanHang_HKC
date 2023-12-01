<?php
if (empty($_SESSION['admin'])) {
  header("location: ?act=dangnhapadmin");
}
?>
<h1>Hello bạn! <?php echo $_SESSION['admin'] ?> <a href="?act=thoat">Đăng xuất</a></h1>