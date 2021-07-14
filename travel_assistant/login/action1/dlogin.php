<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>

<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php
if(isset($_GET['id'])){
    $pageid=$_GET['id'];
}else{
    header("location:../list_login.php");
}

$usql="DELETE FROM admin WHERE id='$pageid'";
$que=mysqli_query($con,$usql);
checkquery($que);
$_SESSION['del']="$email successfully deleted";
header("location:../list_login.php");

?>