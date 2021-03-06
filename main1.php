<?php require_once __DIR__. "/layout/header.php" ?>


<div class="main">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <section class="product-content clearfix">
               <h1 class="title clearfix"><span>Sản phẩm</span></h1>
               <nav class="navbar navbar-default filter">
                  <ul class="display">
                     <li id="grid" class="active grid"><a href="#" title="Grid"><i class="fa fa-th-large"></i></a></li>
                     <li id="list" class="list"><a href="#" title="List"><i class="fa fa-th-list"></i></a></li>
                  </ul>
                  <div class="limit">
                     <span>Sản phẩm/trang</span>
                     <select id="lblimit" name="lblimit" class="nb_item" onchange="window.location.href = this.options[this.selectedIndex].value">
                        <option value="?limit=10">10</option>
                        <option selected="selected" value="?limit=12">12</option>
                        <option value="?limit=20">20</option>
                        <option value="?limit=50">50</option>
                        <option value="?limit=100">100</option>
                        <option value="?limit=250">250</option>
                        <option value="?limit=500">500</option>
                     </select>
                  </div>
                  <div class="sort">
                     <span>Sắp xếp</span>
                     <select class="selectProductSort" id="lbsort" onchange="window.location.href = this.options[this.selectedIndex].value">
                        <option selected="selected" value="?sort=index&amp;order=asc">Mặc định</option>
                        <option value="?sort=price&amp;order=asc">Giá tăng dần</option>
                        <option value="?sort=price&amp;order=desc">Giá giảm dần</option>
                        <option value="?sort=name&amp;order=asc">Tên sản phẩm: A to Z</option>
                        <option value="?sort=name&amp;order=desc">Tên sản phẩm: Z to A</option>
                     </select>
                  </div>
               </nav>
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