
<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>

<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; ?>
<?php
if(isset($_GET['id'])){
    $pageid=$_GET['id'];
}else{
    header("location:login.php");
}

$usql="SELECT * FROM admin WHERE id='$pageid'";
$que=mysqli_query($con,$usql);
$row=mysqli_fetch_assoc($que);
?>
<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Edit Admin</h3>
             <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
         <form action="action1/elogina.php?id=<?php echo $pageid; ?>" method="post">
     <div class="form-group">
        <label>email</label>
     <input type="email" required class="form-control"  name="email" value="<?php echo $row['email']; ?>"></div >
    <div class="form-group">
        <label>password</label>
     <input type="password" required class="form-control"  name="password" value="<?php echo $row['password']; ?>"></div >
     <input type="submit" name="edit_admin" class="btn btn-success">
 </form>
 </div>
 </div>
  </div>
<?php include 'layout/footer1.php'; ?>
