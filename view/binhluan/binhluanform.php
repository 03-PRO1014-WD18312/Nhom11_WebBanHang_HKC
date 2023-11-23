<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    
    $idpro = $_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<body>
    
</body>
</html>

<div class="mb">
    <div class="box_title">BINH LUAN</div>
    <div class="box_content2 product_portfolio">
        <ul>
            <?php
            foreach ($dsbl as $bl) {
                extract($bl);
                echo '<li><a href="' . $noidung . '">' . $user . '</a></li>';
            }
            ?>
           
        </ul>
    </div>
    <div class="box_search">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="text" name="noidung" id="" placeholder="Từ khóa tìm kiếm">
            <input type="submit" value="Gui binh luan" name="guibinhluan">
        </form>
    </div>
    <?php
    if(isset($_POST['guibinhluan'])&&$_POST['guibinhluan']){
        $noidung=$_POST['noidung'];
        $idpro=$_POST['idpro'];
        $iduser=$_SESSION['user']['id'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location:".$_SERVER['HTTP_REFERER']);

    }
    ?>
</div>