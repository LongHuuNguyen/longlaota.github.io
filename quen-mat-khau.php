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
                  <li class="icon-li"><strong>Quên mật khẩu</strong> </li>
               </ul>
            </div>
            <div class="foget-password-content clearfix" ng-controller="accountController" ng-init="initController()">
               <h1 class="title clearfix"><span>Quên mật khẩu</span></h1>
               <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                  <form method="POST" action="code.php" class="form-horizontal" ng-submit="forgetPassword()">
                     <div class="form-group">
                        <label class="col-sm-4 control-label">Tên Tài Khoản</label>
                        <div class="col-sm-8">
                           <input type="username" name="edit_username" class="form-control form-control-user" placeholder="Enter Username"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-4 control-label">Mật Khẩu Mới</label>
                        <div class="col-sm-8">
                           <input type="password" name="edit_password" class="form-control form-control-user" placeholder="Password" />
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                           <button type="submit" name="updatebtn" class="btn btn-default">Cập Nhật Mật Khẩu</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require_once __DIR__. "/layout/footer.php" ?>