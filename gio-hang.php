 <?php require_once __DIR__. "/layout/header.php" ?>
<div class="main">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb clearfix">
               <ul>
                  <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                     <a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                  </li>
                  <li class="icon-li"><strong>Giỏ hàng</strong> </li>
               </ul>
            </div>
            <script type="text/javascript">
               $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
            </script>
            <script src="app/services/orderServices.js"></script>
            <script src="app/controllers/orderController.js"></script>
            <div class="cart-content" ng-controller="orderController" ng-init="initOrderCartController()">
               <h1 class="title clearfix"><span>Giỏ hàng của tôi</span></h1>
               <div class="steps clearfix">
                  <ul class="clearfix">
                     <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0"><span><i class="glyphicon glyphicon-shopping-cart"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span></li>
                     <li class="payment col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon glyphicon-usd"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span></li>
                     <li class="finish col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon glyphicon-ok"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span></li>
                  </ul>
               </div>
               <div class="cart-block">
                  <div class="cart-info table-responsive">
                     <table class="table product-list">
                        <thead>
                           <tr>
                              <th>Sản phẩm</th>
                              <th>Hình ảnh</th>
                              <th>Giá</th>
                              <th>Số lượng</th>
                              <th>Thành tiền</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr ng-repeat="item in OrderDetails">
                              <td class="des">
                                 <h2>{{item.ProductName}}</h2>
                                 <span>{{item.VariantName}}</span>
                              </td>
                              <td class="image">
                                 <img ng-src="{{item.ProductImage}}" class="img-responsive" />
                              </td>
                              <td class="price">{{item.Price | number:0}}đ</td>
                              <td class="quantity">
                                 <input type="number" value="1" class="text" ng-model="item.Quantity" ng-change="updateItemCart(item)" />
                              </td>
                              <td class="amount">
                                 {{ item.Amount| number:0 }}đ
                              </td>
                              <td class="remove">
                                 <a ng-click="removeItemCart(item)" href="javascript:void(0)">
                                 <i class="glyphicon glyphicon-trash"></i>
                                 </a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="clearfix text-right">
                     <span><b>Tổng thanh toán:</b></span>
                     <span class="pay-price">
                     {{ Amount| number:0 }}đ
                     </span>
                  </div>
                  <div class="button text-right">
                     <a class="btn btn-default" href="index.php" onclick="window.history.back()">Tiếp tục mua hàng</a>
                     <a class="btn btn-primary" href="thanh-toan.php">Tiến hành thanh toán</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require_once __DIR__. "/layout/footer.php" ?>