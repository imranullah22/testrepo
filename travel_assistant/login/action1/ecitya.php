
<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
     include '../_inc/connection.php';
  include '../_inc/function.php';
  if(isset($_POST['edit_city'])){
    if(isset($_GET['id'])){
      $ucid=$_GET['id'];
      }else{
        
          header("location:../city.php");
      }
        
      
    
  $cname=mysqli_real_escape_string($con,$_POST["city_name"]);
  
  $country=mysqli_real_escape_string($con,$_POST["country_name"]);
 
  $query="UPDATE  cities SET city_name='$cname',country_id=$country where city_id= '$ucid'";
  
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$cname successfully updated ";
  	             header("location:../city.php");
           
   }else{
	header("location:../city.php");
}

?>