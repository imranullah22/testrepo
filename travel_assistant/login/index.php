<?php session_start(); 
 
 include 'layout/header1.php';
if(!isset($_SESSION['login'])){
	header("location:login.php");
}

 ?>
<?php include 'layout/footer1.php'; ?>