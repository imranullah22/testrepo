<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
if(isset($_POST['add_city'])){
  $city=mysqli_real_escape_string($con,$_POST['city_name']);
 
  $country=mysqli_real_escape_string($con,$_POST['country_name']);
/* 
  }*/
 
  $query="INSERT INTO cities (city_name,country_id)VALUES('$city','$country')";
  $result=mysqli_query($con,$query);
  checkquery($result);
                 $_SESSION["success"]="$city successfully inserted ";
                 header("location:../city.php");
           
   }else{
  header("location:../add_city.php");
}
/*
  $city=mysqli_real_escape_string($con,$_POST['city_name']);
 //$country=mysqli_real_escape_string($con,$_POST['country_name']);
  $country_id=mysqli_real_escape_string($con,$_POST['country_id']);
 

 $qqq="SELECT * FROM user_country WHERE country_id='$country'";
  // $qqq="INSERT INTO user_country WHERE country_id='$cid'";
  $ccc=mysqli_query($con,$qqq);
   checkquery($ccc);
  
    if(mysqli_num_rows($ccc)>0){
    $_SESSION['err']="country is already exist";
    header("location:../city.php");
}

  $query="INSERT INTO cities (city_name,country_id) VALUES('$city','$country_id')";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$city successfully inserted ";
  	             header("location:../city.php");
           
   }else{
	header("location:../add_city.php");9
}*/
?>