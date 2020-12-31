<?php
session_start();
include('security.php');


?>
<?php 
if(isset($_POST['registerbtn'])){

	$username =$_POST['username'];
	$email =$_POST['email'];
	$passwordd_1 =$_POST['password_1'];
	$passwordd_2 =$_POST['password_2'];
	$hoten =$_POST['hoten'];
	$gioitinh =$_POST['gioitinh'];
	$ngay =$_POST['ngay'];
	$thang =$_POST['thang'];
	$nam =$_POST['nam'];
	$sdt =$_POST['sdt'];
	$diachi =$_POST['diachi'];
	$city =$_POST['city'];
	$quanhuyen =$_POST['quanhuyen'];
  $email_query = "SELECT * FROM users WHERE email='$email' ";
  $email_query_run = mysqli_query($connectionn, $email_query);
  if(mysqli_num_rows($email_query_run) > 0){
      $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
      $_SESSION['status_code'] = "error";
      header('Location: dang-ky.php');  
    }
  else{
    if ($passwordd_1 === $passwordd_2){

      $sql = "INSERT INTO users(username,email,password,hoten,gioitinh,ngay,thang,nam,sdt,diachi,city,quanhuyen) VALUES('$username','$email','$passwordd_1','$hoten','$gioitinh','$ngay','$thang','$nam','$sdt','$diachi','$city','$quanhuyen')";
      $sql_run = mysqli_query($connectionn,$sql);
      if ($sql_run) {

        $_SESSION['success']="Đã Đăng Ký Thành Công";
        $_SESSION['status_code'] = "success";
        header('Location: dang-ky.php');
        }
        else{

          $_SESSION['status'] = "Đăng ký không thành công";
          $_SESSION['status_code'] = "success";
         header('Location : dang-ky.php');
        }
      }
      else
      {
        $_SESSION['status'] = "Mật khẩu không khớp";
        $_SESSION['status_code'] = "warnig";
        header('Location : dang-ky.php');
      }
   }

    }
	
	

 
 ?>


<?php
if(isset($_POST['loginbtn']))
{
    $username_login = $_POST['username']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM users WHERE username='$username_login' AND password='$password_login'";
    $query_run = mysqli_query($connectionn, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $username_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Username / Password is Invalid";
        header('Location: dang-nhap.php');
   }
    
}
?>


<?php
 if(isset($_POST['updatebtn']))
{
    $username = $_POST['edit_username'];
    $password = $_POST['edit_password'];

    $query = "UPDATE users SET password='$password' WHERE username='$username' ";
    $query_run = mysqli_query($connectionn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: dang-nhap.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: quen-mat-khau.php'); 
    }
}

?>