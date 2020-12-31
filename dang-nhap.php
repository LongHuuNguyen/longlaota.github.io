
<?php require_once __DIR__. "/layout/header.php" ?>
<div class="main">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="menu-account">
               <h3>
                  <span>
                  Tài khoản
                  </span>
               </h3>
               <ul>
                  <li><a href="dang-nhap.php"><i class="fa fa-sign-in"></i>Đăng nhập</a></li>
                  <li><a href="dang-ky.php"><i class="fa fa-key"></i>Đăng ký</a></li>
                  <li><a href="dang-nhap.php"><i class="fa fa-key"></i>Quên mật khẩu</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-9">
            <div class="breadcrumb clearfix">
               <ul>
                  <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                     <a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                  </li>
                  <li class="icon-li"><strong>Đăng nhập</strong> </li>
               </ul>
            </div>
            <div class="login-content clearfix" ng-controller="accountController" ng-init="initController()">
               <h1 class="title clearfix"><span>Đăng nhập hệ thống</span></h1>
               <div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                  <div class="p-5">
                        <?php
                           if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                           {
                               echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                               unset($_SESSION['status']);
                           }
                           ?>
                     </div>
                  <form method="POST" action="code.php" class="form-horizontal">
                     <div class="form-group">
                        <label for="username" class="col-sm-4 control-label">Tên Đăng Nhập</label>
                        <div class="col-sm-8">
                           <input type="username" name="username" class="form-control form-control-user" placeholder="Enter Username"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="password" class="col-sm-4 control-label">Mật khẩu</label>
                        <div class="col-sm-8">
                           <input type="password" name="password" class="form-control form-control-user" placeholder="Password"/>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                           <button type="submit" name="loginbtn" class="btn btn-default">Đăng nhập</button>
                           <a href="quen-mat-khau.php">Quên mật khẩu</a>
                        </div>
                     </div>
                     <p>Bạn chưa đăng ký? <a href="dang-ky.php">Đăng Ký</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require_once __DIR__. "/layout/footer.php" ?>