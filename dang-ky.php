<?php require_once __DIR__. "/layout/header.php" ?>
<?php
   include('security.php');
   ?>
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
                  <li class="icon-li"><strong>Đăng ký tài khoản</strong> </li>
               </ul>
            </div>
            <div class="register-content clearfix" ng-controller="accountController" ng-init="initRegisterController()">
               <h1 class="title clearfix"><span>Đăng ký tài khoản</span></h1>
               <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                  <form method="POST" action="code.php">
                     <h2><span>Thông tin tài khoản</span></h2>
                     <div class="form-group">
                        <label for="Code" class="col-sm-3 control-label">Tài khoản<span class="warning">(*)</span></label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" ng-model="Code" required="true" name="username" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="Email" class="col-sm-3 control-label">Email<span class="warning">(*)</span></label>
                        <div class="col-sm-9">
                           <input type="email" class="form-control" ng-model="Email" required="true" name="email"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="Password" class="col-sm-3 control-label">Mật khẩu<span class="warning">(*)</span></label>
                        <div class="col-sm-9">
                           <input type="password" class="form-control" ng-model="Password" required="true" name="password_1" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="RePassword" class="col-sm-3 control-label">Nhập lại mật khẩu<span class="warning">(*)</span></label>
                        <div class="col-sm-9">
                           <input type="password" class="form-control" ng-model="RePassword" name="password_2" />
                        </div>
                     </div>
                     <h2>Thông tin cá nhân</h2>
                     <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Họ tên<span class="warning">(*)</span></label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" ng-model="Name" required="true" name="hoten" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Giới tính</label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" name="gioitinh"/>
                        </div>
                     </div>
                     <div class="form-group form-inline">
                        <label class="col-sm-3 control-label">Ngày sinh</label>
                        <div class="col-sm-9">
                           <input type="text" class="col-md-4 form-control" name="ngay"/>
                           <input type="text" class="col-md-4 form-control" name="thang"/>
                           <input type="text" class="col-md-4 form-control"name="nam"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Điện thoại</label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" ng-model="Phone" name="sdt" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control"name="diachi" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Tỉnh/TP</label>
                        <div class="col-sm-9">
                           <input type="text"class="form-control" name="city"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Quận/Huyện</label>
                        <div class="col-sm-9">
                           <input type="text"  class="form-control" name="quanhuyen"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                           <button type="submit" name="registerbtn" class="btn btn-default">Đăng ký</button>
                        </div>
                     </div>


                     <p>Bạn đã có tài khoản? <a href="dang-nhap.php">Đăng Nhập</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php require_once __DIR__. "/layout/footer.php" ?>