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
    header("location:place.php");
}

$usql="SELECT * FROM places WHERE  place_id='$pageid'";
$ur=mysqli_query($con,$usql);
$urow=mysqli_fetch_assoc($ur);
$us="SELECT * from cities ";
$dr=mysqli_query($con,$us);
checkquery($dr);

?>
<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Edit Place</h3>
             <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
           
        
 <form action="action1/epa.php?id=<?php echo $pageid; ?>" method="post">
    <div class="form-group">
        <label>Name</label>
     <input type="text" required class="form-control"  name="name" value="<?php echo $urow['place_name']; ?>"></div >
     <?php /*
      if(isset($_SESSION["err"])){
        echo "<small>".$_SESSION["err"]."</small>";
        unset($_SESSION["err"]);
      }
     */
     ?>
    <div class="form-group">
     <label>lng</label>
     <input type="varchar" required  class="form-control" name="lng" value="<?php echo $urow['lng']; ?>"></div >
     <?php    if(isset($_SESSION['err'])){?>

    <small class="text-danger">
        <?php    echo  $_SESSION['err'];?>
        <?php  unset($_SESSION['err']);?>
    </small>

<?php   } ?>
    <div class="form-group"> 
        <label>lat</label>
     <input type="varchar" required  class="form-control" name="lat" value="<?php echo $urow['lat'];?>"></div>
     <div class="form-group">
        
    <label>City Name</label>
                            <select name="city_name" required class="form-control">
                                <option value="">...please select...</option>
                                <?php   while ($drow=mysqli_fetch_assoc($dr)){?>
                                    <option value="<?php  echo $drow['city_id']; ?>"> <?php echo $drow['city_name']; ?> </option>



                          <?php }?>
                        </select>  
                        </div> 

    <div class="form-group"> 
        <label>img</label>
     <input type="varchar" required class="form-control"  name="img" value="<?php echo $urow['img']; ?>"></div>



     <input type="submit" name="edit_place" class="btn btn-success">


 </form>
 </div>
 </div>
  </div>



<?php include 'layout/footer1.php'; ?>
