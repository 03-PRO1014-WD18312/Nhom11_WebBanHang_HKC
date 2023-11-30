<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="<?= $info['email'] ?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" value="<?= $info['user'] ?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" value="<?= $info['pass'] ?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="address" value="<?= $info['address'] ?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại
                        <input type="text" name="tel" value="<?= $info['tel'] ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?= $info['id'] ?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>