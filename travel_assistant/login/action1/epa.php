<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>

<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST['edit_place'])){
    if(isset($_GET['id'])){
      $placeid=$_GET['id'];
      }else{
        
          header("location:../place.php");
      }
        
      
    
  $name=mysqli_real_escape_string($con,$_POST["name"]);
 
  $lng=mysqli_real_escape_string($con,$_POST["lng"]);
  //$qqq="select * from users where email='$email'";
  //$ccc=mysqli_query($con,$qqq);
  
   /* if(mysqli_num_rows($ccc)>0){
		$_SESSION['err']="email is already exist";
		header("location : ../add_user.php");
	}*/
  $lat=mysqli_real_escape_string($con,$_POST["lat"]);
  $city=mysqli_real_escape_string($con,$_POST["city_name"]);
  $img=mysqli_real_escape_string($con,$_POST["img"]);
  $query="UPDATE  places SET place_name='$name',lng='$lng',lat='$lat',city_id='$city',img='$img' where place_id= '$placeid'";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$name successfully updated ";
  	             header("location:../place.php");
           
   }else{
	header("location:../place.php");
}

?>