 <?php session_start(); ?>
<?php include '_inc/connection.php';?>
<?php include 'layout/header1.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
if(isset($_POST['login'])){

$email=mysqli_real_escape_string($con,$_POST['email']);

$pass=mysqli_real_escape_string($con,$_POST['password']);
$sqli="SELECT * FROM admin where email='$email'";
$result=mysqli_query($con,$sqli);
$numrow=mysqli_num_rows($result);
if($numrow > 0){
  $row=mysqli_fetch_assoc($result);
  if($row['password']==md5($pass)){
  	$_SESSION["login"]=$row["id"];
  	header("location:index.php");

  }else{
  	$error="password incorrect";
  }


}else{
	$error="email incorrect";
}
}


	?>

<form action="login.php" method="post">
	<?php

if(isset($error)){
	echo $error;
}

	?>
<div class="container">
	<div class="row">
	<div class="col-md-4">
	<div class="form-group">
		<label>email</label>
		<input type="email" required class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>password</label>
		<input type="password" required class="form-control" name="password">
	</div>

<div class="form-group">
	<input type="submit" name="login" value="login"  class="btn btn-success>
	</div>


</div>
</div>
</div>
</form>>

</body>
</html>



<?php   include "layout/footer1.php";?>
