<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH TAI KHOAN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NOI DUNG</th>
                        <th>IDUSER</th>
                        <th>IDPRO</th>
                        <th>NGAY BINH LUAN</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabl="index.php?act=suabl&id=".$id;
                        $xoabl="index.php?act=xoabl&id=".$id;
                        echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$noidung.'</td>
                <td>'.$iduser.'</td>
                <td>'.$idpro.'</td>
                <td>'.$ngaybinhluan.'</td>
                <td><a href="'.$suabl.'"><input type="hidden" value="Sửa"></a>
                <a href="'.$xoabl.'"><input type="button" value="Xóa"></td></a>
            </tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addtk"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>