<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST['edit_login'])){
    if(isset($_GET['id'])){
      $userid=$_GET['id'];
    }else{
      header("location:../list_login.php");
    }
  
 
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  
  $query="UPDATE admin SET email='$email',password='$password' WHERE id=$userid";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="data  successfully updated ";
  	             header("location:../list_login.php");
           
   }else{
	header("location:../list_login.php");
}

?>