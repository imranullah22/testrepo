<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
 <?php   if(empty($_POST["name"])){
           $_SESSION["err"]="name can't bi empty";
           header("location:../add_user.php");
  } ?>

<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST["edit_user"])){
    if(isset($_GET["user_id"])){
      $userid=$_GET["user_id"];
      }else{
        
          header("location:../user.php");
      }
        
      
    
  $name=mysqli_real_escape_string($con,$_POST["name"]);
 
  $email=mysqli_real_escape_string($con,$_POST["email"]);
  //$qqq="select * from users where email='$email'";
  //$ccc=mysqli_query($con,$qqq);
  
   /* if(mysqli_num_rows($ccc)>0){
		$_SESSION['err']="email is already exist";
		header("location : ../add_user.php");
	}*/
  $password=mysqli_real_escape_string($con,$_POST["password"]);
  $nationality=mysqli_real_escape_string($con,$_POST["nationality"]);
  $religion=mysqli_real_escape_string($con,$_POST["religion"]);
  $query="UPDATE  users SET user_name='$name',user_email='$email',user_password='$password',user_nationality='$nationality',religion='$religion' where user_id= '$userid'";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$name successfully updated ";
  	             header("location: ../user.php");
           
   }else{
	header("location:../user.php");
}

?>