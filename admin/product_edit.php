<?php
    include('security.php');
    include('layout/header.php');
    include('layout/navbar.php');
    
    ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Product Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_product_btn']))
            {
                $idproduct = $_POST['edit_product_id'];
                
                $query = "SELECT * FROM product WHERE idproduct='$idproduct' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_product_id" value="<?php echo $row['idproduct'] ?>">

                            <div class="form-group">
                                <label> Tên Sản Phẩm </label>
                                <input type="text" name="edit_titleproduct" value="<?php echo $row['titleproduct'] ?>" class="form-control"
                                    placeholder="Tên Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label>Phân Loại Món</label>
                                <input type="text" name="edit_idcategory" value="<?php echo $row['idcategory'] ?>" class="form-control"
                                    placeholder="Phân Loại Món">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="edit_images" value="<?php echo $row['images'] ?>"
                                    class="form-control" placeholder="Hình ảnh Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text" name="edit_price" value="<?php echo $row['price'] ?>"
                                    class="form-control" placeholder="Giá">
                            </div>
                            <div class="form-group">
                                <label>Thành Phần</label>
                                <input type="text" name="edit_thanhphan" value="<?php echo $row['thanhphan'] ?>"
                                    class="form-control" placeholder="Thành Phần">
                            </div>
                            <div class="form-group">
                                <label>Từ Khoá</label>
                                <input type="text" name="edit_keyw" value="<?php echo $row['keyw'] ?>"
                                    class="form-control" placeholder="Từ Khoá">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input type="text" name="edit_content" value="<?php echo $row['content'] ?>"
                                    class="form-control" placeholder="Mô tả">
                            </div>

                            <a href="product.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updateproductbtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>
</div>
<?php
    include('layout/scripts.php');
    include('layout/footer.php');
    ?>