<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
 <?php   if(empty($_POST["country_name"])){
           $_SESSION["err"]="country_name can't bi empty";
           header("location:../add_user_country.php");
  } ?>

<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST['add_country'])){
    if(isset($_GET['id'])){
      $ucid=$_GET['id'];
      }else{
        
          header("location:country.php");
      }
        
      
    
  $cname=mysqli_real_escape_string($con,$_POST["country_name"]);
 
  $query="UPDATE  country SET country_name='$cname' where id= '$ucid'";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$cname successfully updated ";
  	             header("location:../country.php");
           
   }else{
	header("location:../country.php");
}

?>