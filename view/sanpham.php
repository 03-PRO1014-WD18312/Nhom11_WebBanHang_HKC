<h1>Danh Mục:</h1>
<div class="baoquat">
    <div class="dm">
        <?php
            foreach($dsdm as $dm){
                extract($dm);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo '<b class="dm1"><a class="dm2" href="'.$linkdm.'">'.$name.'</a></b>';
            }
        ?>
    </div>
    <div class="kedoc"></div>
        <div class="conten">
            <div class="list">
            </div>
            <div class="items">
                <?php
                    $i=0;
                    foreach ($dssp as $sp){
                        extract($sp);
                        $hinh =  $img_path.$img;
                        if(($i==2)||($i==5)||($i==8)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        
                        echo '<div class="box_items '.$mr.'">
                        <div class="box_items_img">
                        <img src="'.$hinh.'" alt="">
                        
                        </div>
                        <a class="item_name" href="'. $linksp .'">'.$name.'</a>
                        <p class="price">$'.$price.'.000₫</p>
                        
                        </div>';
                    $i+=1;
                    }
                ?>
            </div>
            
        </div>
</div>
<style>
.baoquat{
    display: flex;
}
.kedoc{
    border: 1px solid black;
    height: 300px;
    margin-top: 50px;
}
a:hover{
    border-bottom: 1px solid black;
}
.dm{
    margin-top: 50px;
}
.dm1{
    display:block;
    font-size:20px;
    margin: 20px;
    margin-left: 70px;
    
}
.items{
    width:100%;
    margin:0 auto;
    display:grid;
    grid-template-columns:1fr 1fr 1fr;
    gap:20px;
}
.conten{
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
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
   height:350px;
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
