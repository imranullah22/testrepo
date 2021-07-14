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
    header("location:user.php");
}
$usql="SELECT * from users where user_id=  '$pageid' ";
$ur=mysqli_query($con,$usql);
$urow=mysqli_fetch_assoc($ur);

?>
<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Edit users</h3>
             <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
           
        
 <form action="action1/eua.php?user_id=<?php echo $pageid; ?>" method="post">
    <div class="form-group">
        <label>Name</label>
     <input type="text" required class="form-control"  name="name" value="<?php echo $urow['user_name']; ?>"></div >
    <div class="form-group">
     <label>email</label>
     <input type="email" required  class="form-control" name="email" value="<?php echo $urow['user_email']; ?>"></div >
     <?php    if(isset($_SESSION['err'])){?>

    <small class="text-danger">
        <?php    echo  $_SESSION['err'];?>
        <?php  unset($_SESSION['err']);?>
    </small>

<?php   } ?>
    <div class="form-group"> 
        <label>password</label>
     <input type="password" required  class="form-control" name="password" value="<?php echo $urow['user_password'];?>">
   </div>
     <div class="form-group">
        <label>nationality</label>
     <input type="text"  required class="form-control"  name="nationality" value="<?php echo $urow['user_nationality']; ?>">
      </div>
    <div class="form-group"> 
        <label>religion</label>
     <input type="text" required class="form-control"  name="religion" value="<?php echo $urow['religion']; ?>">
     </div>
     <input type="submit" name="edit_user" class="btn btn-success">
 </form>
 </div>
 </div>
  </div>
<?php include 'layout/footer1.php'; ?>
