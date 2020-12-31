
<?php 
   include("security.php"); 
   include("layout/header.php"); ?>
<script type="text/javascript">
   $(document).ready(function () {
     var str = location.href.toLowerCase();
       $("ul.menu li a").each(function () {
           if (str.indexOf(this.href.toLowerCase()) >= 0) {
               $("ul.menu li").removeClass("active");
               $(this).parent().addClass("active");
           }
       });
   });
</script>
<script type="text/javascript">
   $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
</script>
<link href="http://localhost:8080/wed2/Publics/Scripts/smoothproducts/smoothproducts.css" rel="stylesheet" type="text/css" />
<script src="http://localhost:8080/wed2/Publics/Scripts/smoothproducts/smoothproducts.js" type="text/javascript"></script>
<script src="http://localhost:8080/wed2/Publics/app/services/productServices.js"></script>
<script src="http://localhost:8080/wed2/Publics/app/controllers/productController.js"></script>
<div class="main">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <script src="http://localhost:8080/wed2/Publics/app/services/moduleServices.js"></script>
            <script src="http://localhost:8080/wed2/Publics/app/controllers/moduleController.js"></script>
            <!--Begin-->
            <div class="box-sale-policy" ng-controller="moduleController" ng-init="initSalePolicyController('Shop')">
               <h3><span>Chính sách bán hàng</span></h3>
               <div class="sale-policy-block">
                  <ul>
                     <li>Giao hàng TOÀN QUỐC</li>
                     <li>Thanh toán khi nhận hàng</li>
                     <li>Đổi trả trong <span>15 ngày</span></li>
                     <li>Hoàn ngay tiền mặt</li>
                     <li>Chất lượng đảm bảo</li>
                     <li>Miễn phí vận chuyển:<span>Đơn hàng từ 3 món trở lên</span></li>
                  </ul>
               </div>
               <div class="buy-guide">
                  <h3>Hướng Dẫn Mua Hàng</h3>
                  <ul>
                     <li>
                        Mua hàng trực tiếp tại website
                        <b><a href="index.php"> longfood.net </b></a>
                     </li>
                     <li>
                        Gọi điện thoại <strong>
                        0523919179
                        </strong> để mua hàng
                     </li>
                     <li>
                        Mua tại Trung tâm CSKH:<br />
                        <strong>09585851985</strong>
                        <a href="ban-do.php" rel="nofollow" target="_blank">Xem Bản Đồ</a>
                     </li>
                     <li>
                        Mua sỉ/buôn xin gọi <strong>
                        0961707101
                        </strong> để được
                        hỗ trợ.
                     </li>
                  </ul>
               </div>
            </div>
            <!--End-->
            <script type="text/javascript">
               window.Shop = {"Name":"Bán Ẩm Thực","Email":"saidy@saidy.com","Phone":"0523919179","Logo":"/Uploads/shop304/images/dt/Untitled-1.png","Fax":"(08) 66 85 85 38","Website":"http://www.saidy.vn","Hotline":"0523919179","Address":"TPHCM","Fanpage":"https://www.facebook.com/longlaota","Google":null,"Facebook":"https://www.facebook.com/longlaota","Youtube":null,"Twitter":null,"IsBanner":false,"IsFixed":false,"BannerImage":null};
            </script>
         </div>
         <div class="col-md-9">
            <div class="breadcrumb clearfix">
               <ul>
                  <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                     <a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                  </li>
                  <li class="productname icon-li"><strong><?php echo $titleproduct; ?></strong> </li>
               </ul>
            </div>
            <div id="productMain" class="row">
               <!-- row Begin -->
               <div class="col-sm-6">
                  <!-- col-sm-6 Begin -->
                  <div id="mainImage">
                     <!-- #mainImage Begin -->
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- carousel slide Begin -->
                        <ol class="carousel-indicators">
                           <!-- carousel-indicators Begin -->
                           <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                           <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- carousel-indicators Finish -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <center><img src="Publics/frontend/Uploads/shop304/images/sanpham/<?php echo $images; ?>"></center>
                           </div>
                           <div class="item">
                              <center><img  src="Publics/frontend/Uploads/shop304/images/sanpham/<?php echo $images; ?>" ></center>
                           </div>
                           <div class="item">
                              <center><img  src="Publics/frontend/Uploads/shop304/images/sanpham/<?php echo $images; ?>" ></center>
                           </div>
                        </div>
                        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                           <!-- left carousel-control Begin -->
                           <span class="glyphicon glyphicon-chevron-left"></span>
                           <span class="sr-only">Previous</span>
                        </a>
                        <!-- left carousel-control Finish -->
                        <a href="#myCarousel" class="right carousel-control" data-slide="next">
                           <!-- right carousel-control Begin -->
                           <span class="glyphicon glyphicon-chevron-right"></span>
                           <span class="sr-only">Previous</span>
                        </a>
                        <!-- right carousel-control Finish -->
                     </div>
                     <!-- carousel slide Finish -->
                  </div>
               </div>
               <!-- col-sm-6 Finish -->
               <div class="col-sm-6">
                  <!-- col-sm-6 Begin -->
                  <div class="box">
                     <!-- box Begin -->
                     <?php
                     add_cart(); 
                      ?>
                     <form action="details.php?add_cart=<?php echo $idproduct; ?>" class="form-horizontal" method="post">
                        <!-- form-horizontal Begin -->
                        <div class="form-group">
                           <!-- form-group Begin -->
                           <label for="" class="col-md-5 control-label">Số lượng</label>
                           <div class="col-md-7">
                              <!-- col-md-7 Begin -->
                              <select name="soluong" class="form-control">
                                 <!-- select Begin -->
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 <option>6</option>
                                 <option>7</option>
                                 <option>8</option>
                                 <option>9</option>
                                 <option>10</option>
                              </select>
                              <!-- select Finish -->
                           </div>
                           <!-- col-md-7 Finish -->
                        </div>
                        <!-- form-group Finish -->
                        <div class="form-group">
                           <!-- form-group Begin -->
                           <label class="col-md-5 control-label">Lựa chọn</label>
                           <div class="col-md-7">
                              <!-- col-md-7 Begin -->
                              <select  type="text" name="luachon" class="form-control">
                                 <!-- form-control Begin -->
                                 <option>Không Cay</option>
                                 <option>Cay Nhẹ</option>          
                                 <option>Cay</option>
                              </select>
                              <!-- form-control Finish -->
                           </div>
                           <!-- col-md-7 Finish -->
                        </div>
                        <div class="form-group">
                           <label class="col-md-5 control-label">Ghi Chú</label>
                        <div class="col-sm-7">
                           <input type="text" class="form-control" name="ghichu" />
                        </div>
                     </div>

                        <!-- form-group Finish -->
                        <p class="text-center price"><?php echo $price ?> vnđ</p>
                        <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                     </form>
                     <!-- form-horizontal Finish -->
                  </div>
                  <!-- box Finish -->
               </div>
               <!-- col-sm-6 Finish -->
               <div class="col-sm-12">
                 <h1 class="text-center"style="color: #53FB13;"> <?php echo $titleproduct; ?> </h1>
                 <div class="text"  style= "margin: 0px; padding: 0px; color: #FF0000; font-family: Arial; font-weight: bold; font-size: 150% "> <?php echo $content; ?> </div>
               </div>
            </div>
            <!-- row Finish -->
         </div>
         <!-- col-md-9 Finish -->
      </div>
      <!-- container Finish -->
   </div>
</div>


<!-- #content Finish -->
<?php require_once __DIR__. "/layout/footer.php" ?>