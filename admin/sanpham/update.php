<?php
if (is_array($sp)) {
  extract($sp);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
  $hinh = "<img src='" . $hinhpath . "' height='80px'>";
} else {
  $hinh = "no photo";
}
?>
<div class="row2">
  <div class="row2 font_title">
    <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=updatesp" method="POST" enctype=multipart/form-data>
      <div class="row2 mb10 form_content_container">
        <select name="iddm" id="">
          <option value="0" selected>Tat ca</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            
            if ($iddm == $danhmuc['id']) {
              echo '<option value="' . $danhmuc['id'] . '" selected>' . $danhmuc['name'] . '</option>';
            } else {
              echo '<option value="' . $danhmuc['id'] . '" >' . $danhmuc['name'] . '</option>';
            }
          }
          ?>
        </select>
      </div>
      <div class="row2 mb10">
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="tensp" value="<?php echo "$name"; ?>">
      </div>
      <div class="row2 mb10">
        <label>Giá sản phẩm </label> <br>
        <input type="text" name="giasp" value="<?php echo "$price"; ?>">
      </div>
      <div class="row2 mb10">
        <label>Ảnh sản phẩm </label> <br>
        <input type="file" name="hinh" id="">
        <?= $hinh ?>
      </div>
      <div class="row2 mb10">
        <label>Mô tả sản phẩm </label> <br>
        <textarea name="mota" id="" cols="30" rows="10"><?php echo "$mota"; ?></textarea>
      </div>
      <div class="row mb10 ">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input class="mr20" type="submit" name="capnhat" value="Cập nhật">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && $thongbao != "") {
        echo $thongbao;
      }
      ?>
    </form>
  </div>
</div>