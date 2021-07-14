<?php session_start(); 
if(!isset($_SESSION['login'])){
    header("location:login.php");
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; ?>
	<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">add user</h3>
            <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
        
 <form action="action1/aua.php" method="post">
 	<div class="form-group"><label>name</label>
     <input type="text" required class="form-control"  name="name"></div >
     <?php
      if(isset($_SESSION["err"])){
        echo "<small>".$_SESSION["err"]."</small>";
        unset($_SESSION["err"]);
      }

     ?>
    <div class="form-group"> <label>email</label>
     <input type="email"  required class="form-control" name="email"></div >
     <?php    if(isset($_SESSION['err'])){?>

    <small class="text-danger">
        <?php    echo  $_SESSION['err'];?>
        <?php  unset($_SESSION['err']);?>
    </small>

<?php   } ?>
    <div class="form-group"> <label>password</label>
     <input type="password"  required class="form-control" name="password"></div>
     <div class="form-group"><label>nationality</label>
     <input type="text"  required class="form-control"  name="nationality"></div>
    <div class="form-group"> <label>religion</label>
     <input type="text" required class="form-control"  name="religion"></div>



     <input type="submit" name="add_user" class="btn btn-success">


 </form>
 </div>
 </div>
  </div>
<?php include 'layout/footer1.php'; ?>