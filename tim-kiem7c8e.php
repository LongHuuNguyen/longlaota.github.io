 <?php require_once __DIR__. "/layout/header.php" ?>
<div class="main">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="menu-product">
               <h3>
                  <span>
                  Sản phẩm
                  </span>
               </h3>
               <ul class='level0'>
               </ul class='level0'>
            </div>
         </div>
         <div class="col-md-9">
            <div class="breadcrumb clearfix">
               <ul>
                  <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                     <a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                  </li>
                  <li class="icon-li"><strong>Tìm kiếm</strong> </li>
               </ul>
            </div>
            <script type="text/javascript">
               $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
            </script>
            <section class="product-content clearfix">
               <h1 class="title clearfix"><span>Sản phẩm</span></h1>
               <div class="product-block product-grid row clearfix">
               </div>
            </section>
         </div>
      </div>
   </div>
</div>
<?php require_once __DIR__. "/layout/footer.php" ?>
