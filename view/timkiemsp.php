<h5>Trang tìm kiếm</h5>
<form action="index.php?act=timkiem" method="post">
            <input id="tim" type="text" name="kyw" id="" style="margin: 10px">
         <select name="iddm" id="">
            <option value="0" selected>Tất Cả</option>
              <?php
                foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                };
              ?>
            </select>
            <input id="kiem" type="submit" value="Tìm Kiếm" name="tim">
            <?php
                if ($kqtimkiem!="") $kq=$kqtimkiem;
                else $kq="sản phẩm";
            ?>
            </form>
                    <div class="ketqua"><?=$kq?></div>
                    <div class="items">
                    <?php
                        $i=0;
                            foreach ($listsanpham as $sanpham){
                                extract($sanpham);
                                $hinh =  $img_path.$img;
                                if(($i==2)||($i==5)||($i==8)){
                                    $mr="";
                                }else{
                                    $mr="mr";
                                }
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                
                                echo '<div class="box_items '.$mr.'">
                                <div class="box_items_img">
                            <img src="'.$hinh.'" alt=""">
                            
                        </div>
                        <a class="item_name" href="'. $linksp .'">'.$name.'</a>
                        <p class="price">$'.$price.'.000₫</p>
                        
                    </div>';
                                $i+=1;
                            }
                        ?>
                        </div>
<style>
.ketqua{
    margin: 30px;
    text-align: center;
    font-size:20px;
}
h5{
    font-size: 30px;
    margin: 30px;
}
form{
    text-align: center;
    margin: 30px;
}
input{
    height: 30px;
}
#tim{
    width: 200px;
    border-radius: 5px;
    border:0.5px solid black;
}
#kiem{
    width: 100px;
    font-size: 20px;
    border-radius: 5px;
}
#kiem:hover{
    background-color: #ccc; 
}
.items{
    width:75%;
    margin:0 auto;
    display:grid;
    grid-template-columns:1fr 1fr 1fr;
    gap:20px;
}
.conten{
    display: flex;
    justify-content: space-around;
    margin-top: 100px;
    margin-left: 1%;
}
.box_items{
    border:1px solid #EEEE;
    border-radius:5px;
    text-align:center;
    height:460px;
    position:relative;
    overflow:hidden;
}
.box_items img{
   width:80%;
   height:30%;
   border-radius:10px;
}
.box_items a{
    text-decoration:none;
    color:black;
}
.box_items .item_name{
    margin-top:10px;
   font-size:20px;
   font-weight:bold;
}

.box_items .price{
    margin:10px 0;
  color:red;
  font-weight:500;

}

.box_items:hover {
transform: scale(1.1);
    cursor: pointer;
    transition: 0.3s;
}
.box_items_img .add{
 
    position:absolute;
    bottom:-100%;
   
padding:10px;
color: aqua;

border-radius:6px;
margin-top:20px;

}
</style>

