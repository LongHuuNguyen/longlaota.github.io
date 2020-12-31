<?php
   $connection = mysqli_connect("localhost", "root", "", "adminsaidy");
   

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// begin add_cart functions ///

function add_cart(){
    
    global $connection;
    
    if(isset($_GET['add_cart'])){
        
        $idcart = getRealIpUser();
        
        $idproduct = $_GET['add_cart'];
        
        $soluong = $_POST['soluong'];
        
        $luachon = $_POST['luachon'];

        $ghichu = $_POST['ghichu'];        
        $query = "select * from giohang where idcart='$idcart' AND idproduct='$idproduct'";
        
        $query_run = mysqli_query($connection,$query);
        
        if(mysqli_num_rows($query_run)>0){
           $query1 = "UPDATE giohang SET soluong=soluong+'$soluong', ghichu+='$ghichu' WHERE idproduct='$idproduct' ";
           $query1_run = mysqli_query($connection,$query1);
            echo "<script>alert('Cập nhật thêm $soluong sản phẩm vào giỏ')</script>";
            echo "<script>window.open('details.php?url=$idproduct','_self')</script>";
            
        }else{
            
            $query = "insert into giohang (idcart,idproduct,soluong,luachon,ghichu) values ('$idcart','$idproduct','$soluong','$luachon','$ghichu')";
            
            $run_query = mysqli_query($connection,$query);
            
            echo "<script>window.open('details.php?url=$idproduct','_self')</script>";
            
        }
        
    }
    
}




   function getPro()
   {
       
       global $connection;
       $get_products = "select * from product order by 1 DESC LIMIT 0,20";
       
       $run_products = mysqli_query($connection, $get_products);
       
       while ($row_products = mysqli_fetch_array($run_products)) {
           
           $idproduct = $row_products['idproduct'];
           
           $titleproduct = $row_products['titleproduct'];
           
           $price = $row_products['price'];
           
           $images = $row_products['images'];
           $keyw = $row_products['keyw'];
           
           echo "


                     <div class='col-md-3 col-sm-3 col-xs-6 product-resize product-item-box'>
                        <div class='product-item'>
                           <div class='image image-resize'>
               
                   <a href='http://localhost:8080/wed2/details.php?url=$idproduct'>
                   
                       <img class='img-responsive' src='Publics/frontend/Uploads/shop304/images/sanpham/$images' alt='$titleproduct' title='$titleproduct'>
                       <img class='replace-img img-responsive hisdden-xs' src='Publics/frontend/Uploads/shop304/images/sanpham/$images'>
                   
                   </a>
                   <span class='view-more'><a href='http://localhost:8080/wed2/details.php?url=$idproduct' class='btn btn-primary'>Xem thêm</a></span>
                   </div>
                   
                           <div class='right-block'>
                              <h2 class='name'>
                              <a href='http://localhost:8080/wed2/details.php?url=$idproduct'>$titleproduct</a>
                              </h2>
                              <h2 class='name'></h2>
                              <div class='price'>
                                 <span class='price-new'>$price vnđ</span>
                              </div>
                       
                       <div class='btn btn-primary'>
                           <a class='fa fa-shopping-cart' href='http://localhost:8080/wed2/details.php?url=$idproduct' style='color:#ffff' class='btn btn-default btn-add-cart'>
                               Mua
                           </a>
                       
                            <a href='#' class='btn-add-wishlist'><span></span></a><a href='http://localhost:8080/wed2/details.php?url=$idproduct' class='btn-add-compare'></a>
                       
                       </div>
                   
                   </div>
               
               </div>
           
           </div>
           
           ";
           
       }
       
   }





function items(){
    
    global $connection;
    
    $idcart = getRealIpUser();
    
    $get_items = "select * from giohang where idcart='$idcart'";
    
    $run_items = mysqli_query($connection,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
}





   function total_price(){
    
    global $connection;
    
    $soluong = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "select * from giohang where soluong='$soluong'";
    
    $run_cart = mysqli_query($connection,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $idproduct = $record['idproduct'];
        
        $soluong = $record['soluong'];
        
        $get_price = "select * from product where idproduct='$idproduct'";
        
        $run_price = mysqli_query($connection,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $sub_total = $row_price['price']*$soluong;
            
            $total += $sub_total;
            
        }
        
    }
    
    echo  $total."vnđ";
    
}

   
   ?>