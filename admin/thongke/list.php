<div class="row2">
    <div class="row2 font_title">
        <h1>THONG KE SAN PHAM THEO LOAI</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <td>MA DANH MUC</td>
                        <td>TEN DANH MUC</td>
                        <td>SO LUONG</td>
                        <td>GIA CAO NHAT</td>
                        <td>GIA THAP NHAT</td>
                        <td>GIA TRUNG BINH</td>
                    </tr>
                    <?php
                    foreach ($listthongke as $tk) {
                        extract($tk);
                        echo "<tr>
                        <td>$madm</td>
                        <td>$tendm</td>
                        <td>$countsp</td>
                        <td>$maxprice</td>
                        <td>$minprice</td>
                        <td>$avgprice</td>
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