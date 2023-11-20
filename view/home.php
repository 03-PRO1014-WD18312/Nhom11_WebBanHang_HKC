
<div class="banner">
            <div class="mySlide">
                
                <img class="anh" src="upload/anh1.jpg" alt="">
            </div>
    
            <div class="mySlide">
                
                <img class="anh" src="upload/anh2.jpg" alt="">
            </div>
        </div>
        <h1>SẢN PHẨM MỚI</h1>
        <div class="conten">
            <div class="list">
            </div>
            <div class="items">
            <?php
              $i=0;
                foreach ($spnew as $sp){
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
              <p class="price">$'.$price.'</p>
              
           </div>';
                    $i+=1;
                }
              ?>
        </div>
            
        </div>

<style>
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