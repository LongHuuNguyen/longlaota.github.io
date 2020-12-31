<?php require_once __DIR__. "/layout/header.php" ?>
<div class="main">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="breadcrumb clearfix">
               <ul>
                  <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                     <a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                  </li>
                  <li class="icon-li"><strong>Liên hệ</strong> </li>
               </ul>
            </div>
            <script type="text/javascript">
               $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
            </script>
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyBO93-_2pxx4UBTNduADxfoWpsFrHAFKsA&amp;sensor=true" type="text/javascript"></script>
            <script src="Publics/frontend/app/services/contactServices.js"></script>
            <script src="Publics/frontend/app/controllers/contactController.js"></script>
            <!--Begin-->
            <div class="contact-content clearfix" ng-controller="contactController" ng-init="initController('Shop','Maps')">
               <h1 class="title">
                  <span>
                  Thông tin liên hệ
                  </span>
               </h1>
               <div class="contact-block clearfix">
                  <div class="row">
                     <div class="col-md-5">
                        <a href="index.php">
                        <img class="img-responsive" src="Publics/frontend/Uploads/shop304/images/dt/longfood.png" />
                        </a>
                     </div>
                     <div class="col-md-9">
                        <div class="contact-info">
                           <div class="docs"><b class="name">SAIDY FOOD</b></div>
                           <div class="docs">
                              <i class="fa fa-map-marker"></i>
                              <b>Địa chỉ:</b> TP ĐÀ NẴNG
                           </div>
                           <div class="docs">
                              <i class="fa fa-phone"></i>
                              <b>Điện thoại:</b> 0523919179
                           </div>
                           <div class="docs">
                              <i class="fa fa-mobile"></i>
                              <b>Hotline</b> 0961707101
                           </div>
                           <div class="docs">
                              <i class="fa fa-envelope"></i>
                              <a href="mailto:{{shop.Email}}">saidy@saidy.com</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr class="" />
                  <h3 class="title">Gửi thông tin liên hệ</h3>
                  <div class="description">
                     Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi
                     sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-feedback">
                           <form ng-submit="sendContact()">
                              <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-user"></i></span>
                                 <input type="text" placeholder="Họ tên" ng-model="Name" class="form-control" required />
                              </div>
                              <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                 <input type="text" placeholder="Địa chỉ" ng-model="Address" class="form-control" />
                              </div>
                              <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                 <input type="email" placeholder="Email" ng-model="Email" class="form-control" required />
                              </div>
                              <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                 <input type="text" placeholder="Điện thoại" ng-model="Phone" class="form-control" required />
                              </div>
                              <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                 <input type="text" placeholder="Tiêu đề" ng-model="Title" class="form-control" required />
                              </div>
                              <div class="form-group">
                                 <textarea placeholder="Nội dung" class="form-control" rows="3" ng-model="Content" required></textarea>
                              </div>
                              <button class="btn btn-default" type="submit">Gửi</button>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="map clearfix">
                           <div class="map-canvas" id="map_canvas"></div>
                           <div class="map-information" ng-if="Maps.length>1">
                              <ul class="clearfix">
                                 <li ng-repeat="item in Maps">
                                    <div>
                                       <a onclick="moveToMaker({{item.Id}}); return false;" href="javascript:void(0)">
                                       {{item.Name}}
                                       </a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <script type="text/javascript">
               var map;
               var infowindow;
               var marker = new Array();
               var old_id = 0;
               var infoWindowArray = new Array();
               var infowindow_array = new Array();
               function initialize() {
                   var defaultLatLng = new google.maps.LatLng(16.067621, 108.152653);
               
                   var myOptions = { zoom: 16, center: defaultLatLng, scrollwheel: true, mapTypeId: google.maps.MapTypeId.ROADMAP };
                   map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                   map.setCenter(defaultLatLng);
               
                   if (Maps.length <= 0) {
                       var arrLatLng = new google.maps.LatLng(16.067621, 108.152653);
                       var myHtml = "<div class='map-description'> <strong>" + firstMap.Name + "</strong><br/>Địa chỉ: <span>" + firstMap.Address + "</span><br/>Điện thoại: <span>" + firstMap.Phone + "</span><br/></div>";
                       infoWindowArray[firstMap.Id] = myHtml;
                       loadMarker(arrLatLng, infoWindowArray[firstMap.Id], firstMap.Id);
                   }
               
                   $.each(Maps, function (index, it) {
                       var arrLatLng = new google.maps.LatLng(it.PosX, it.PosY);
                       var myHtml = "<div class='map-description'> <strong>" + it.Name + "</strong><br/>Địa chỉ: <span>" + it.Address + "</span><br/>Điện thoại: <span>" + it.Phone + "</span><br/></div>";
                       infoWindowArray[it.Id] = myHtml;
                       loadMarker(arrLatLng, infoWindowArray[it.Id], it.Id);
                   });
               
               
                   moveToMaker(firstMap.Id);
               }
               function loadMarker(myLocation, myInfoWindow, id) {
                   marker[id] = new google.maps.Marker({ position: myLocation, map: map, visible: true });
                   var popup = myInfoWindow;
                   infowindow_array[id] = new google.maps.InfoWindow({ content: popup });
                   google.maps.event.addListener(marker[id], 'click', function () {
                       if (id == old_id) return;
                       if (old_id > 0)
                           infowindow_array[old_id].close();
                       infowindow_array[id].open(map, marker[id]);
                       old_id = id;
                   });
                   google.maps.event.addListener(infowindow_array[id], 'closeclick', function () { old_id = 0; });
               }
               function moveToMaker(id) {
                   var location = marker[id].position;
                   map.setCenter(location);
                   if (old_id > 0)
                       infowindow_array[old_id].close();
                   infowindow_array[id].open(map, marker[id]);
                   old_id = id;
               }
            </script>
            <!--End-->
            <script type="text/javascript">
               var firstMap= {"Id":304,"ShopId":0,"Name":"SAIDY FOOD","Address":"ĐÀ NẴNG","Phone":"0523919179","PosX":10.844895933994351,"PosY":106.636744831799320,"Index":0,"Inactive":false};
               var Maps= [];
               window.Maps = Maps;
               window.Shop = {"Name":"SAIDYSHOP","Email":"info@runtime.vn","Phone":"0969012033","Logo":"Publics/frontend/Images/AnhwedAOThun.jpg","Fax":"#","Website":"#","Hotline":"0969012033","Address":"TPĐÀ NẴNG","Fanpage":"https://www.facebook.com/longlaota","Google":null,"Facebook":"https://www.facebook.com/longlaota","Youtube":null,"Twitter":null,"IsBanner":false,"IsFixed":false,"BannerImage":null};
               $(document).ready(function () {
                   initialize();
               });
            </script>
         </div>
         <div class="col-md-3">
            <script src="Publics/frontend/app/services/moduleServices.js"></script>
            <script src="Publics/frontend/app/controllers/moduleController.js"></script>
            <!--Begin-->
            <div class="box-support-online" ng-controller="moduleController" ng-init="initSupportOnlineController('Shop','SupportOnlines')">
               <h3><span>Hỗ trợ trực tuyến</span></h3>
               <div class="support-online-block">
                  <div class="support-hotline">
                     HOTLINE<br><span>0961707101</span>
                  </div>
                  <div class="support-item" ng-repeat="item in SupportOnlines">
                     <div class="name">
                        NGUYỄN HỮU LONG <b>0523919179</b>
                     </div>
                     <ul>
                        <li ng-if="item.Zalo!=''&&item.Zalo!=null" class="social">
                           <a href="tel:{{item.Zalo}}" title="{{item.FullName}}" target="_blank"> <img src="Images/icon-zalo.png" alt="Zalo"></a>
                           <span class="phone"><a href="tel:{{item.Zalo}}" title="{{item.FullName}}" target="_blank">{{item.Zalo}} </a></span>
                        </li>
                        <li ng-if="item.Facebook!=''&&item.Facebook!=null" class="social">
                           <a href="notfounda963.php" title="{{item.FullName}}" target="_blank"> <img src="Images/icon-facebook.png" alt="Facebook"></a>
                           <span class="phone"><a href="notfounda963.php" title="{{item.FullName}}" target="_blank">{{item.FullName}} </a></span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--End-->
            <script type="text/javascript">
               window.Shop = {"Name":"Bán Ẩm Thực","Email":"info@runtime.vn","Phone":"0969012033","Logo":"Publics/frontend/Uploads/shop304/images/dt/Untitled-1.png","Fax":"(08) 66 85 85 38","Website":"http://www.runtime.vn","Hotline":"0969012033","Address":"TPĐÀ NẴNG","Fanpage":"https://www.facebook.com/runtime.vn","Google":null,"Facebook":"https://www.facebook.com/runtime.vn","Youtube":null,"Twitter":null,"IsBanner":false,"IsFixed":false,"BannerImage":null};
               window.SupportOnlines = [];
            </script>                    
         </div>
      </div>
   </div>
</div>

<?php require_once __DIR__. "/layout/footer.php" ?>