
<?php
include('security.php');

?>






<?php
if (isset($_POST['registerbtn'])) {
    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    
    $email_query     = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status']      = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    } else {
        if ($password === $cpassword) {
            $query     = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if ($query_run) {
                // echo "Saved";
                $_SESSION['status']      = "Đã thêm tài khoản Admin";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            } else {
                $_SESSION['status']      = "Lỗi! Khoogn thêm được tài khoản";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');
            }
        } else {
            $_SESSION['status']      = "Vui lòng nhập mật khẩu giống nhau";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');
        }
    }
    
}
?>




<?php
if (isset($_POST['updatebtn'])) {
    $id       = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email    = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    
    $query     = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        $_SESSION['status']      = "Thông tin tài khoản được cập nhật";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    } else {
        $_SESSION['status']      = "Lỗi ! không cập nhật được tài khoản";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}

?>

<?php
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    
    $query     = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        $_SESSION['status']      = "Đã xoá tài khoản";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    } else {
        $_SESSION['status']      = "Lỗi! Không xoá được tài khoản";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}
?>

<?php
if (isset($_POST['login_btn'])) {
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];
    
    $query     = "SELECT * FROM register WHERE username='$username_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);
    
    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $username_login;
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Tài khoản/ Mật khẩu Không khớp";
        header('Location: login.php');
    }
    
}
?>

<?php

if (isset($_POST['logout_btn'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

?>

<?php
if (isset($_POST['insrtbtn'])) {
    
    
    $idcategory   = $_POST['idcategory'];
    $titleproduct = $_POST['titleproduct'];
    $images       = $_POST['images'];
    $price        = $_POST['price'];
    $thanhphan    = $_POST['thanhphan'];
    $keyw         = $_POST['keyw'];
    $content      = $_POST['content'];
    
    $query     = "INSERT INTO product (idcategory,titleproduct,images,price,thanhphan,keyw,content) VALUES ('$idcategory','$titleproduct','$images','$price','$thanhphan','$keyw','$content')";
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        // echo "Saved";
        $_SESSION['status']      = "Thêm sản phẩm thành công!";
        $_SESSION['status_code'] = "success";
        header('Location: product.php');
    } else {
        $_SESSION['status']      = "Lỗi! Không thêm được sản phẩm";
        $_SESSION['status_code'] = "error";
        header('Location: product.php');
    }
}

?>


<?php
if (isset($_POST['updateproductbtn'])) {
    

    $idproduct    = $_POST['edit_product_id'];
    $titleproduct = $_POST['edit_titleproduct'];
    $idcategory   = $_POST['edit_idcategory'];
    $images       = $_POST['edit_images'];

    $price        = $_POST['edit_price'];
    $thanhphan    = $_POST['edit_thanhphan'];
    $keyw         = $_POST['edit_keyw'];
    $content      = $_POST['edit_content'];
    
    $query     = "UPDATE product SET idcategory='$idcategory', titleproduct='$titleproduct', images='$images', price='$price', thanhphan='$thanhphan', keyw='$keyw', content='$content' WHERE idproduct='$idproduct' ";
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        $_SESSION['status']      = "Sản Phẩm Đã Được Cập Nhật";
        $_SESSION['status_code'] = "success";
        header('Location: product.php');
    } else {
        $_SESSION['status']      = "Cập Nhật Sản Phẩm Lỗi";
        $_SESSION['status_code'] = "error";
        header('Location: product.php');
    }
}

?>

<?php
if (isset($_POST['delete_product_btn'])) {
    $idproduct = $_POST['delete_product_id'];
    
    $query     = "DELETE FROM product WHERE idproduct='$idproduct' ";
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        $_SESSION['status']      = "Đã Xoá Sản Phẩm";
        $_SESSION['status_code'] = "success";
        header('Location: product.php');
    } else {
        $_SESSION['status']      = "Xoá Sản Phẩm Không Thành Công!";
        $_SESSION['status_code'] = "error";
        header('Location: product.php');
    }
}
?>





<?php
if (isset($_POST['seach_data'])) {
    $idproduct = $_POST['idproduct'];
    $visible = $_POST['visible'];
    
    $query     = "UPDATE product SET visible='$visible'WHERE idproduct='$idproduct' ";
    $query_run = mysqli_query($connection, $query);
    
}
?>

<?php
if (isset($_POST['delete_checkbox_product'])) {
    $idproduct = "1";
    
    $query     = "DELETE FROM product WHERE visible='$idproduct' ";
    $query_run = mysqli_query($connection, $query);
    if (query_run) {

        $_SESSION['success']="Đã xoá các sản phẩm";
        header('Location: product.php');
        # code...
    }
    else
    {
        $_SESSION['status']=" Lỗi! Không xoá được sản phẩm";
        header('Location:product.php');
    }
}
?>
