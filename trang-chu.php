 <?php require_once __DIR__. "/layout/header.php" ?>
<?php require_once __DIR__. "/layout/navbar.php" ?>
<div class="main">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <section class="product-content clearfix">
               <h1 class="title clearfix"><span>Sản phẩm</span></h1>
               <div class="product-block product-grid row clearfix">
                  <?php
                  getPro();

                  ?>
               </div>
               <div class="navigation">
                  <ul class="pagination">
                     <li>
                        <a href="main1.php?page=1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        </a>
                     </li>
                     <li class="active"><a href="main1.php?page=1">1</a></li>
                     <li><a href="main2.php?page=2">2</a></li>
                     <li>
                        <a href="main2.php?page=2" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </section>
            <!--Template--
               --End-->
         </div>
      </div>
   </div>
</div>
<?php require_once __DIR__. "/layout/footer.php" ?>