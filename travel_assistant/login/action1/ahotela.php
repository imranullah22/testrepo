<?php session_start();
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
<?php
       include '../_inc/connection.php';
  include '../_inc/function.php';
if(isset($_POST['add_hotel'])){
  $fileData = pathinfo(basename($_FILES['image']['name']));
  $fileName = uniqid().' '.$fileData['extension'];
  $image = $_FILES['image']['name'];
  $newname = rand(100 , 500).basename($image);
  $targetfile = "../../images/".$newname;


  $name=mysqli_real_escape_string($con,$_POST['name']);
  $room_price=mysqli_real_escape_string($con,$_POST['room_price']);
  $hotel_address=mysqli_real_escape_string($con,$_POST['hotel_address']);
  $phone=mysqli_real_escape_string($con,$_POST['phone']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $csql="SELECT * FROM hotels WHERE email='$email'";
  $que=mysqli_query($con,$csql);
  checkquery($que);
  
        if(mysqli_num_rows($que)>0){
        $_SESSION['err']="email is already exist";
        header("location:../add_hotel.php");
  }
  $city_id=mysqli_real_escape_string($con,$_POST['city_name']);
   if(move_uploaded_file($_FILES['image']['tmp_name'],$targetfile)){
  $query="INSERT INTO hotels (hotel_name,room_price,hotel_address,phone,email,city_id,image) VALUES ('$name','$room_price',
  '$hotel_address','$phone','$email','$city_id','$newname')";
  $result=mysqli_query($con,$query);
  checkquery($result);
  	             $_SESSION["success"]="$name successfully inserted ";
  	             header("location:../hotel.php");
   }        
   }else{
	header("location:../add_hotel.php");
}
?>


  