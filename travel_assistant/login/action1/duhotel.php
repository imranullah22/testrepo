<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");

 }
 include '../_inc/connection.php';
 include '../_inc/function.php';
if(isset($_GET['id'])){
    $pageid=$_GET['id'];
}else{
    header("location:../hotel.php");
}


$sql="DELETE from hotels where hotel_id=$pageid";
$result=mysqli_query($con,$sql);

checkquery($result);
  	             $_SESSION["del"]= "data successfully deleted ";
  	             header("location:../hotel.php");
           
   
	
	header("location:../hotel.php");




	header("location:../hotel.php");



 ?>