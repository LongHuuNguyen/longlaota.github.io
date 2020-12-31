<?php
    include("security.php");
    include("functions/funtions.php");
    
    ?>
<!DOCTYPE html>
<html class="no-js" lang="vi">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta charset="UTF-8" />
        <title>WED LONGFOOD</title>
        <meta name="description" />
        <meta name="keywords" />
        <link rel="shortcut icon" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:app_id" content="227481454296289" />
        <meta content="vi_VN" property="og:locale" />
        <meta content="website" property="og:type" />
        <meta content="WED LONGFOOD" property="og:title" />
        <meta property="og:description" />
        <meta property="og:site_name" />
        <link href="Publics/frontend/Scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="Publics/frontend/App_Themes/Home/font-awesome.min.css" rel="stylesheet" />
        <link href="Publics/frontend/App_Themes/Home/common.css" rel="stylesheet" type="text/css" />
        <link href="Publics/frontend/App_Themes/Home/animate.css" rel="stylesheet" type="text/css" />
        <link href="Publics/frontend/Scripts/jQuery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <script src="Publics/frontend/Scripts/jQuery/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/jQuery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/bootstrap/js/bootstrap.min.js"></script>
        <script src="Publics/frontend/Scripts/jQuery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/common/fix-height.js" data-img-box=".image-resize" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/common/common.js" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/common/jquery.cookie.js" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/common/mycard.js" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>
        <script src="Publics/frontend/Scripts/angularJS/angular.min.js"></script>
        <script src="Publics/frontend/Scripts/angularJS/angular-sanitize.min.js"></script>
        <script type="text/javascript" src="Publics/frontend/Scripts/angular-loading-spinner/spin.min.js"></script>
        <script type="text/javascript" src="Publics/frontend/Scripts/angular-loading-spinner/angular-spinner.min.js"></script>
        <script type="text/javascript" src="Publics/frontend/Scripts/angular-loading-spinner/angular-loading-spinner.js"></script>
        <script src="Publics/frontend/app/appMain.js"></script>
        <script src="Publics/frontend/app/directives/directive.js"></script>
        <script src="Publics/frontend/app/directives/angular-summernote.js"></script>
        <script src="Publics/frontend/app/directives/paging.js"></script>
        <script src="Publics/frontend/app/services/ajaxServices.js"></script>
        <script src="Publics/frontend/app/services/alertsServices.js"></script>
        <link href="Publics/frontend/App_Themes/style.css" rel="stylesheet" type="text/css" />
        <link href="Publics/frontend/App_Themes/responsive.css" rel="stylesheet" type="text/css" />
        <script src="http://localhost:8080/wed2/Publics/app/services/moduleServices.js"></script>
        <script src="http://localhost:8080/wed2/Publics/app/controllers/moduleController.js"></script>
    </head>
    <body ng-app="appMain" style="">
        <?php 
            if(isset($_GET['url'])){
                
                $idproduct = $_GET['url'];
                
                $get_product = "select * from product where idproduct='$idproduct'";
                
                $run_product = mysqli_query($connection,$get_product);
                
                $row_product = mysqli_fetch_array($run_product);
                
                $idcategory = $row_product['idcategory'];
                
                $titleproduct = $row_product['titleproduct'];
                
                $price = $row_product['price'];
                
                $images = $row_product['images'];
                
                $content = $row_product['content'];
                
                $keyw = $row_product['keyw'];
                
                $thanhphan = $row_product['thanhphan'];
                
                $get_p_cat = "select * from category where idcategory='$idcategory'";
                
                $run_p_cat = mysqli_query($connection,$get_p_cat);
                
                $row_p_cat = mysqli_fetch_array($run_p_cat);
                
                $p_cat_title = $row_p_cat['name'];
                
            }
            
            ?>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=227481454296289";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="wrapper page-home">
        <div class="header">
        <script src="Publics/frontend/Scripts/common/login.js" type="text/javascript"></script>
        <section class="top-link clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav navbar-nav topmenu-contact pull-left">
                            <li><i class="fa fa-phone"></i> <span>Hotline:0523919179</span></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                            <li class="order-check"><a href="kiem-tra-don-hang.php"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                            <li class="order-cart"><a href="gio-hang.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng <?php items();?></a><a href="dang-ky.php"><i class="fa fa-key"></i> Đăng ký </a></li>
                        </ul>
                        <div class="show-mobile hidden-lg hidden-md">
                            <div class="quick-user">
                                <div class="quickaccess-toggle">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="inner-toggle">
                                    <ul class="login links">
                                        <li>
                                            <a href="dang-ky.php"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                        </li>
                                        <li>
                                            <a href="dang-nhap.php"><i class="fa fa-key"></i> Đăng nhập</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="quick-access">
                                <div class="quickaccess-toggle">
                                    <i class="fa fa-list"></i>
                                </div>
                                <div class="inner-toggle">
                                    <ul class="links">
                                        <li><a id="mobile-wishlist-total" href="kiem-tra-don-hang.php" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                        <li><a href="gio-hang.php" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng <?php items(); ?> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="header-content clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5 col-xs-12 logo text-center">
                        <a href="index.php" title="">
                        <img alt="" src="Publics/frontend/Uploads/shop304/images/dt/longfood.png" class="" />
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12 top-search">
                        <div class="search">
                            <div class="input-cat form-search clearfix">
                                <div class="form-search-controls input-group">
                                    <input type="text" name="search" id="txtsearch" onblur="if(this.value=='')this.value='Tìm kiếm...'"
                                        onfocus="if(this.value=='Tìm kiếm...')this.value=''" value="Tìm kiếm..." />
                                    <span class="input-group-btn">
                                    <button class="btn btn-search" title="Search" type="button" id="btnsearch" value="Search">
                                    <i class="fa fa-search"></i>
                                    </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="social-group">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 top-cart hidden-xs">
                        <div class="cart">
                            <div class="heading">
                                <a href="gio-hang.php">
                                <span class="icon">icon</span><span id="cart-total">
                                <?php items(); ?>
                                sp - <?php total_price(); ?>
                                </span><i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <script type="text/javascript">
            $("#btnsearch").click(function () {
                SearchProduct();
            });
            $("#txtsearch").keydown(function (event) {
                if (event.keyCode == 13) {
                    SearchProduct();
                }
            });
            function SearchProduct() {
                var key = $('#txtsearch').val();
                if (key == '' || key == 'Tìm kiếm...') {
                    $('#txtsearch').focus();
                    return;
                }
                var group = $('#lbgroup').val();
                window.location = 'tim-kiem7c8e.php?group=' + group + '&key=' + key;
            }
        </script>
        <section class="navigation-menu clearfix">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <nav class="navbar nav-menu">
        <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <nav id="mobile-menu" class="mobile-menu collapse navbar-collapse"><div class="col-md-3">
        <div  class="menu-about">
        <h3>
        <span>
        Danh mục sản phẩm
        </span>
        </h3>
        <ul>
        <?php
            $get_p_cat = "select * from category";
            
            $run_p_cat = mysqli_query($connection,$get_p_cat);
            while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {
            $p_cat_id = $row_p_cat['idcategory'];
            $p_cat_title = $row_p_cat['name'];
            echo "<li>
            <a href='http://localhost:8080/wed2/details.php?idcategory=$p_cat_id'>
            $p_cat_title
            </a>
            </li>
            ";}
            
            ?>
        </ul>
        </div>
        </div>
        <ul class='menu nav navbar-nav'><li class="level0"><a class='' href='trang-chu.php'><span>Trang chủ</span></a></li>
        <li class="level0"><a class='' href='gioi-thieu.php'><span>Giới thiệu</span></a></li>
        <li class="level0"><a class='' href='san-pham.php'><span>Sản phẩm</span></a></li>
        <li class="level0"><a class='' href='tin-tuc.php'><span>Tin tức</span></a></li>
        <li class="level0"><a class='' href='lien-he.php'><span>Liên hệ</span></a></li>
        </ul class='menu nav navbar-nav'>
        </nav>
        </nav>
        </div>
        </div>
        </div>
        </section>
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
        </div>