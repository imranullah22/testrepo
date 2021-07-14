<?php



/*$query="insert into users (user_name,user_email,user_password,user_nationality,religion) values ('ishaqkhan','ishaqhan@gmail.com','abcde11234','pakistan','islam')";*/
//$query="delete from users where user_id=4";
//$query="update users set user_name='ishaqullah' where user_id=7";
$result=mysqli_query($connect,$query);
if(!$result){
	die("error in sql".mysqli_error($connect));
}else{
	echo "my sql ran successfully";
}
}else{
	header("location: ../add_user.php")
}


?>