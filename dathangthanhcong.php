<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dathangthanhcong.css">
</head>

<body>
    <?php
    if (isset($listdonhang) && (is_array($listdonhang))) {
        extract($listdonhang);
    }
    echo $listdonhang['tongdh'];
    echo $listdonhang['hoten'];
    echo $listdonhang['email'];
    echo $listdonhang['phone'];
    echo $listdonhang['diachi'];
    echo $listdonhang['ngay_dat_hang'];
    echo $listdonhang['ghichu'];
    echo $listdonhang['trangthai'];

    foreach($billct as $bill){
        extract($bill);
        echo $bill['id_dh'];
        echo $bill['soluong'];
        echo $bill['tongdh'];
        echo $bill['namedh'];
        echo $bill['imgdh'];
        echo $bill['pricedh'];

    }
    ?>

 

</body>

</html>