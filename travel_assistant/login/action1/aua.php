<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST['add_user'])){
  $name=mysqli_real_escape_string($con,$_POST['name']);
 
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $csql="SELECT * FROM users WHERE user_email='$email'";
  $que=mysqli_query($con,$csql);
   checkquery($que);
  
    if(mysqli_num_rows($que)>0){
		$_SESSION['err']="email is already exist";
		header("location:../add_user.php");
	}
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $nationality=mysqli_real_escape_string($con,$_POST['nationality']);
  $religion=mysqli_real_escape_string($con,$_POST['religion']);
  $query="INSERT INTO users (user_name,user_email,user_password,user_nationality,religion)VALUES('$name','$email','$password',
  '$nationality','$religion')";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$name  successfully inserted ";
  	             header("location:../user.php");
           
   }else{
	header("location:../add_user.php");
}

?>