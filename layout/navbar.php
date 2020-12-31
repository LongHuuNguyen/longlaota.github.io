<div class="container">
   <div class="row">
      <div class="col-md-9">
         <script src="Publics/frontend/app/services/moduleServices.js"></script>
         <script src="Publics/frontend/app/controllers/moduleController.js"></script>
         <!--Begin-->
         <link href="Publics/frontend/Scripts/flexSlider/flexslider.css" rel="stylesheet" type="text/css" />
         <script src="Publics/frontend/Scripts/flexSlider/jquery.flexslider-min.js" type="text/javascript"></script>
         <div class="flexslider slideshow-content" id="bannerheaderhome" ng-controller="moduleController" ng-init="initSlideshowController('Slideshows')">
            <ul class="slides">
               <li ng-repeat="item in Slideshows">
                  <a title="{{item.Name}}" href="notfoundfba4.php">
                  <img alt="{{item.Name}}" ng-src="{{item.Image}}" />
                  </a>
               </li>
            </ul>
         </div>
         <script type="text/javascript">
            $(document).ready(function () {
                $('#bannerheaderhome').flexslider({
                    directionNav: true,
                    controlNav: false,
                    animation: "slide",
                    itemHeigh: 270,
                    itemMargin: 0,
                    animationSpeed: 700,
                    slideshowSpeed: 3000
                });
            });
         </script>
         <!--End-->
         <script type="text/javascript">
            window.Slideshows = [{"Id":1462,"ShopId":304,"Name":"1","Image":"Publics/frontend/Uploads/shop304/images/slide1/1.png","Link":"","Index":1,"Inactive":false,"Timestamp":"AAAAAAAXi0w="},{"Id":1463,"ShopId":304,"Name":"2","Image":"Publics/frontend/Uploads/shop304/images/slide1/2.jpg","Link":"","Index":2,"Inactive":false,"Timestamp":"AAAAAAAXi0I="}];
         </script>                    
      </div>
      <div class="col-md-3">
         <div class="box-html">
            <p><img src="Publics/frontend/Uploads/shop304/images/article/1-31316788.jpg" style="width: 271.5px; height: 135.75px;"></p>
            <p><img src="Publics/frontend/Uploads/shop304/images/article/3-31316909.jpg" style="width: 271.5px; height: 135.75px;"></p>
            <p><img src="Publics/frontend/Uploads/shop304/images/article/4-31316276.jpg" style="width: 271.5px; height: 135.75px;"></p>
            <p><br></p>
         </div>
      </div>
   </div>
</div>
