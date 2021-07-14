<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php   include "layout/header1.php";
$dsql="SELECT * FROM `cities`";
$dr=mysqli_query($con,$dsql);
checkquery($dr);

?>
	<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3>add place</h3>
            <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
        
 <form action="action1/aplacea.php" method="post">
 	<div class="form-group">
        <label>name</label>
     <input type="text" class="form-control"  name="name">
 </div >
     <?php
      if(isset($_SESSION["err"])){
        echo "<small>".$_SESSION["err"]."</small>";
        unset($_SESSION["err"]);
      }

     ?>
    <div class="form-group"> <label>lng</label>
     <input type="varchar"  class="form-control" name="lng"></div >
     
    <div class="form-group"> <label>lat</label>
     <input type="varchar"  class="form-control" name="lat"></div>
     <div class="form-group">
        <label>city_name</label>
        <select name="city_name" required class="form-control">                        
        <option value="">...please select...</option>
        <?php   while ($drow=mysqli_fetch_assoc($dr)){?>
         <option value="<?php  echo $drow['city_id']; ?>"> <?php echo $drow['city_name']; ?> </option>



                          <?php }?>
                        </select>   
                        </div>
                        
    <div class="form-group"> 
        <label>img</label>
     <input type="varchar" class="form-control"  name="img"></div>



     <input type="submit" name="add_place" class="btn btn-success">


 </form>
 </div>
 </div>
  </div>
<?php include 'layout/footer1.php'; ?>