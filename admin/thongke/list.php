<div class="row2">
    <div class="row2 font_title">
        <h1>THONG KE SAN PHAM THEO SO LAN DAT HANG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <td>MÃ</td>
                        <td>TÊN SẢN PHẨM</td>
                        <td>SỐ LẦN ĐẶT</td>
                        <td>GIÁ CAO NHẤT</td>
                        <td>GIÁ THẤP NHẤT</td>
                        <td>GIÁ TRUNG BÌNH</td>
                    </tr>
                    <?php
                    foreach ($listthongke as $tk) {
                        extract($tk);
                        echo "<tr>
                        <td>$masp</td>
                        <td>$tensp</td>
                        <td>$countct</td>
                        <td>$maxpricedh</td>
                        <td>$minpricedh</td>
                        <td>$avgpricedh</td>
                    </tr>
                        ";
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <a href="index.php?act=bieudo"><input type="button" value="Xem bieu do"></a>
            </div>
    </div>
</div>