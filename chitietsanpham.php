<?php extract($onesp); ?>
<div class="container-chitietsanpham">
    <div class="img-sanpham">
        <?php $img = $img_path . $img;
        echo '<img src="' . $img . '" alt="">';
        ?>
    </div>
    <div class="box-right">
        <h1>
            <?= $name ?>
        </h1>
        <p class="first">Còn hàng</p>
        <p>
            <?= $price ?>.000₫
        </p>
        <!-- <div class="size">
                <p>KÍCH THƯỚC</p>
                <button>2XL</button>
                <button>XL</button>
                <button>L</button>
                <button>M</button>
            </div>
            <div class="soluong">
                <input type="button" value="-">
                <input type="text" name="" id="" value="1" class="input-mid">
                <input type="button" value="+">
                
            </div> -->
        <div class="boxmua">
            <?php echo '<form action="index.php?act=themvaogiohang" method="POST">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="themvaogiohang" value="Thêm vào giỏ hàng">
            </form>'; ?>

            <?php echo '<form action="index.php?act=muangay" method="POST">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="muangay" value="Mua ngay">
            </form>'; ?>

        </div>
        <div class="img-size">
            <img src="./upload/img-size.jpg" alt="">
        </div>
    </div>

</div>
<div class="content">
    <?php echo $mota; ?>
</div>
<div id="binhluan" class="row">
    <iframe src="view/binhluan/binhluanform1.php?idpro=<?= $id ?>" frameborder="0" width="334%" height="300px"></iframe>
</div>

?>
<style>
    html {
        font-size: 62.5%;
    }

    *{
        font-family: sans-serif;
    }

    .container-chitietsanpham {
        padding: 5em 28em;
    }

    .container-chitietsanpham {
        display: flex;
    }

    .container-chitietsanpham>.img-sanpham img {
        width: 60em;
    }

    .container-chitietsanpham>.img-sanpham {
        width: 50em;
    }

    .container-chitietsanpham>.box-right {
        margin-left: 14em;
    }

    .container-chitietsanpham>.box-right>h1 {
        font-size: 1.6em;
    }

    .box-right>p {
        font-size: 1.4em;
        margin: 10px 0;
        font-weight: bold;
    }

    .box-right>p:last-child {
        font-size: 2.1em;
    }

    .box-right>.first {
        margin: 0em;
        padding-bottom: 1em;
        border-bottom: 1px inset #dfcbd2;
    }

    .box-right>.size>p {
        font-size: 1.3em;
        margin: 10px 0;
    }

    .soluong input,
    .box-right>.size button {
        float: left;
        outline: none;
        border-radius: 0;
        margin: 0;
        background: #fff;
        width: 40px;
        height: 40px;
        line-height: 20px;
        position: relative;
        border: 1px solid #e5e5e5;
        font-weight: normal;
        text-align: center;
        cursor: pointer;
        font-size: 20px;
    }

    .box-right>.size button {
        margin: 0 0.3em;
        margin-bottom: 0.8em;
    }

    .soluong>.input-mid {
        width: 4em;
        height: 38.5px;
    }

    .box-right>.boxmua {
        display: flex;
    }

    .boxmua input {
        font-size: 15px;
        text-decoration: none;
        color: white;
        background-color: black;
        padding: 15px;
        margin: 10px 5px;
        position: relative;
        top: 80px;
    }

    .box-right .soluong {
        position: relative;
        top: 6em;
        right: 20em;
    }

    .box-right .img-size img {
        width: 46em;
        margin-top: 10em;
    }

    .content {
        text-align: justify;
        padding: 2em 7em;
        font-size: 2em;
    }
</style>