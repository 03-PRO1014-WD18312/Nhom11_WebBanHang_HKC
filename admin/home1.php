<?php
if (empty($_SESSION['admin'])) {
  header("location: ?act=dangnhapadmin");
}
?>
<h1>Hello bạn!  <a href="?act=thoat">Đăng xuất</a></h1>