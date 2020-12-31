<?php
    include('security.php');
    include('layout/header.php');
    include('layout/navbar.php');
    
    ?>

    <div class="table-responsive">
    <?php
        $query = "SELECT * FROM product";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>ID</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Phân Loại Món</th>
                  <th>Hình Ảnh</th>
                  <th>Giá</th>
                  <th>Thành Phần</th>
                  <th>Từ Khoá</th>
                  <th>Mô Tả</th>
                  <th>Xoá</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php echo $row['idproduct']; ?></td>
                  <td><?php echo $row['titleproduct']; ?></td>
                  <td><?php echo $row['idcategory']; ?></td>
                  <td><?php echo $row['images']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['thanhphan']; ?></td>
                  <td><?php echo $row['keyw']; ?></td>
                  <td><?php echo $row['content']; ?></td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_product_id" value="<?php echo $row['idproduct']; ?>">
                  <button type="submit" name="delete_product_btn" class="btn btn-danger"> Xoá</button>
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
    </div>

<?php
    include('layout/scripts.php');
    include('layout/footer.php');
    ?>