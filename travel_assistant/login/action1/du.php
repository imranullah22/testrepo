 <?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");

}
 include '../_inc/connection.php';
 include '../_inc/function.php';
if(isset($_GET['id'])){
    $pageid=$_GET['id'];
}else{
    header("location:../user.php");
}


$sql="DELETE from users where user_id=$pageid";
$result=mysqli_query($con,$sql);

checkquery($result);
  	             $_SESSION["del"]= $name." successfully deleted ";
  	             header("location:../user.php");
           
   
   

	?>