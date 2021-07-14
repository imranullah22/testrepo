
<?php

//$query="delete from users where user_id=7";
$query="update users SET user_name='imran khan' where user_id=1";
/*$query="insert into users (user_name,user_password,user_email,user_nationality,religion) values ('riasat','123zxc','riasat@gmail.com',
'pakistan','islam')";*/

$result=mysqli_query($con,$query);

if(!$result){
	die("error in sql :".mysqli_error($con));
}else {
	echo "sql run successfully";
}
}else{
	header("location:../aaa.php");
}
?>
<?php
$query="insert into users (user_name,user_email,user_id,user_nationality,religion)values('ishaq khan','ishaq@gmail.com','11233zxcv','pakistan','islam'

?>