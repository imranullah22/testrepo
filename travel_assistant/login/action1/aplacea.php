<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
<?php
  include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST['add_place'])){
  $name=mysqli_real_escape_string($con,$_POST['name']);
 
  $lng=mysqli_real_escape_string($con,$_POST['lng']);
 /*$qqq="SELECT * FROM places WHERE lng='$lng'";
  $ccc=mysqli_query($con,$qqq);
   checkquery($ccc);
  
    if(mysqli_num_rows($ccc)>0){
		$_SESSION['err']="lng is already exist";
		header("location:../add_place.php");
	}*/
  $lat=mysqli_real_escape_string($con,$_POST['lat']);
  $city=mysqli_real_escape_string($con,$_POST['city_name']);
  $img=mysqli_real_escape_string($con,$_POST['img']);
  $query="INSERT INTO places (place_name,lng,lat,city_id,img)VALUES('$name','$lng','$lat',
  '$city','$img')";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$name successfully inserted ";
  	             header("location:../place.php");
           
   }else{
	header("location:../add_place.php");
}

?>