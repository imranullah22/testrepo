<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
if(isset($_POST['add_country'])){
  $country=mysqli_real_escape_string($con,$_POST['country_name']);
 
/* 
	}*/
 
  $query="INSERT INTO country (country_name)VALUES('$country')";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$country successfully inserted ";
  	             header("location:../country.php");
           
   }else{
	header("location:../add_user_country.php");
}




?>





