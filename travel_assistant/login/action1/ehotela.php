<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
 <?php   if(empty($_POST["name"])){
           $_SESSION["err"]="hotel_name can't bi empty";
           header("location:../add_hotel.php");
  } ?>

<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST["edit_hotel"])){
    if(isset($_GET["id"])){
      $ucid=$_GET["id"];
      }else{
        
          header("location:../hotel.php");
      }
        
      
    
  $name=mysqli_real_escape_string($con,$_POST["hotel_name"]);

   $room_price=mysqli_real_escape_string($con,$_POST['room_price']);
  $hotel_address=mysqli_real_escape_string($con,$_POST['hotel_address']);
  $phone=mysqli_real_escape_string($con,$_POST['phone']);
  $email=mysqli_real_escape_string($con,$_POST["email"]);

  $city=mysqli_real_escape_string($con,$_POST['city_name']);
  $query="UPDATE  hotels SET hotel_name='$name',room_price='$room_price',hotel_address='$hotel_address',phone='$phone',email='$email',city_id='$city' where hotel_id= '$ucid'";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$name successfully updated ";
  	             header("location:../hotel.php");
           
   }else{
	header("location:../hotel.php");
}

?>