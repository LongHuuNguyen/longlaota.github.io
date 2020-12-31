<?php
   include('security.php');
   include('layout/header.php');
   include('layout/navbar.php');
   ?>

<script language="javascript">
   function ChangeToSlug()
   {
       var title, slug;
   
       //Lấy text từ thẻ input title 
       title = document.getElementById("title").value;
   
       //Đổi chữ hoa thành chữ thường
       slug = title.toLowerCase();
   
       //Đổi ký tự có dấu thành không dấu
       slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
       slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
       slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
       slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
       slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
       slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
       slug = slug.replace(/đ/gi, 'd');
       //Xóa các ký tự đặt biệt
       slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
       //Đổi khoảng trắng thành ký tự gạch ngang
       slug = slug.replace(/ /gi, "-");
       //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
       //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
       slug = slug.replace(/\-\-\-\-\-/gi, '-');
       slug = slug.replace(/\-\-\-\-/gi, '-');
       slug = slug.replace(/\-\-\-/gi, '-');
       slug = slug.replace(/\-\-/gi, '-');
       //Xóa các ký tự gạch ngang ở đầu và cuối
       slug = '@' + slug + '@';
       slug = slug.replace(/\@\-|\-\@|\@/gi, '');
       //In slug ra textbox có id “slug”
       document.getElementById('slug').value = slug;
   }
</script>
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm mới</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="code.php" method="POST"  >
          <div class="modal-content">
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-12 control-label"> Phân loại món </label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <select name="idcategory" class="form-control">
                        <!-- form-control Begin -->
                        <option> Chọn </option>
                        <option>Món Nóng</option>
                        <option>Món Thường</option>
                     </select>
                     <!-- form-control Finish -->
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <!-- form-group Finish -->
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-3 control-label"> Product Title </label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <input  type="text" id="title" value="" size="50" onkeyup="ChangeToSlug();" name="titleproduct" class="form-control">
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-3 control-label">Hình ảnh sản phẩm</label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <input name="images" type="file" class="form-control">
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <!-- form-group Finish -->
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-3 control-label">Giá Sản Phẩm</label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <input name="price" type="text" class="form-control">
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <!-- form-group Finish -->
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-3 control-label">Thành Phần</label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <input name="thanhphan" type="text" class="form-control">
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <!-- form-group Finish -->
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-3 control-label">Từ khoá sản phẩm</label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <input type="text" id="slug"  name="keyw"class="form-control">
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <!-- form-group Finish -->
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-3 control-label">Mô tả sản phẩm</label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <textarea type="text" name="content" cols="19" rows="6" class="form-control"></textarea>
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <!-- form-group Finish -->
               <div class="form-group">
                  <!-- form-group Begin -->
                  <label class="col-md-3 control-label"></label> 
                  <div class="col-md-12">
                     <!-- col-md-12 Begin -->
                     <input name="insrtbtn" value="Insert Product" type="submit" class="btn btn-primary">
                  </div>
                  <!-- col-md-12 Finish -->
               </div>
               <!-- form-group Finish -->
            </div>
         </form>
         <!-- form-horizontal Finish -->
      </div>
   </div>
</div>
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card shadow py-3">
      <h6 class="m-0 font-weight-bold text-primary">Sản Phẩm<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct">Thêm sản phẩm</button>
      </h6>
      <div>
            <?php 
               if (isset($_SESSION['success']) && $_SESSION['success'] !='') {
                 echo '<h2>'.$_SESSION['success'].'</h2>';
                 unset($_SESSION['success']);
                 # code...
               }
               if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
                 echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
                 unset($_SESSION['status']);
                 # code...
               }
                ?>
         </div>
      <div class="m-2 font-weight-bold text-primary" >
      <h6>
        <form method="POST" action="code.php">
          <button type="submit" name="delete_checkbox_product" class="btn btn-danger">
            Xoá Các Sản Phẩm Đã Chọn
          </button>
        </form>
      </h6>
      </div>

   </div>
   <div class="card-body">
      <div class="table-responsive">
         <?php 
            $connection = mysqli_connect("localhost","root","","adminsaidy");
            $query = "SELECT * FROM product";
            $query_run = mysqli_query($connection,$query);
             ?>
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                <th>check</th>
                  <th>ID</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Phân Loại Món</th>
                  <th>Hình Ảnh</th>
                  <th>Giá</th>
                  <th>Thành Phần</th>
                  <th>Từ Khoá</th>
                  <th>Mô Tả</th>
                  <th>Sửa</th>
                  <th>Xoá</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  if(mysqli_num_rows($query_run)>0)
                  {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                      ?>
               <tr>
                <td>
                  <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['idproduct'] ?>" <?php  echo $row['visible']==1 ? "checked":""?>>
                </td>
                  <td><?php echo $row['idproduct']; ?></td>
                  <td><?php echo $row['titleproduct']; ?></td>
                  <td><?php echo $row['idcategory']; ?></td>
                  <td><?php echo '<img src="http://localhost:8080/wed2/Publics/frontend/Uploads/shop304/images/sanpham/'.$row['images'].'"    alt="Image" width="100px;" height="100px;" >'?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['thanhphan']; ?></td>
                  <td><?php echo $row['keyw']; ?></td>
                  <td><?php echo $row['content']; ?></td>

                  <td>
                     <form action="product_edit.php" method="post">
                        <input type="hidden" name="edit_product_id" value="<?php echo $row['idproduct']; ?>">
                        <button type="submit" name ="edit_product_btn" class="btn btn-success">Sửa</button>
                     </form>
                  </td>
                  <td>
                     <form action="product_delete.php" method="post">
                        <input type="hidden" name="delete_product_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete_product_btn" class="btn btn-danger"> Xoá</button>
                     </form>
                  </td>
               </tr>
               <?php  
                  }
                  }
                  else
                  {
                  echo "No record Found";
                  }
                  ?>
            </tbody>
         </table>
         
      </div>
   </div>
</div>
</div>

   <script >
     function toggleCheckbox(box){

      var idproduct = $(box).attr("value");
      if ($(box).prop("checked")==true) {

        var visible = 1;
      }
      else 
      {
        var visible=0;
      }
      var data = {

        "seach_data":1,
        "idproduct":idproduct,
        "visible":visible
      };
      $.ajax({
        type:"POST",
        url:"code.php",
        data: data,
        success: function(response){
          alert("data checked");

        }
      });
     }

   </script>
<?php
   include('layout/scripts.php');
   include('layout/footer.php');
   ?>