<?php session_start(); 
if(!isset($_SESSION['login'])){
  header("location:login.php");
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php   include "layout/header1.php";

$us="SELECT * from cities ";
$dr=mysqli_query($con,$us);
checkquery($dr);


?>
		
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Add Hotel</h3>
			 <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
			<form action="action1/ahotela.php" enctype="multipart/form-data"  method="post">
				<div class="form-group"><label>hotel name</label>
     <input type="text" required  class="form-control"  name="name"></div >
     <?php
      if(isset($_SESSION["err"])){
        echo "<small>".$_SESSION["err"]."</small>";
        unset($_SESSION["err"]);
      }

     ?>
   
    <div class="form-group"> <label>room price</label>
     <input type="varchar" required  class="form-control" name="room_price"></div>
     <div class="form-group"><label>hotel address</label>
     <input type="text" required  class="form-control"  name="hotel_address"></div>
    <div class="form-group"> <label>phone</label>
     <input type="tel" required  class="form-control"  name="phone"></div>
       <div class="form-group"> <label>email</label>
     <input type="email" required  class="form-control" name="email"></div>
     <?php    if(isset($_SESSION['err'])){?>

    <small class="text-danger">
        <?php    echo  $_SESSION['err'];?>
        <?php  unset($_SESSION['err']);?>
    </small>

<?php   } ?>
     <div class="form-group">
        <label>city_name</label>
     <select name="city_name" required class="form-control">
     <option value="">...please select...</option>
     <?php   while($drow=mysqli_fetch_assoc($dr)){?>
     <option value="<?php  echo $drow['city_id']; ?>"> <?php echo $drow['city_name']; ?> </option>

                          <?php }?>
                        </select>
                        <label>Image:</label><input type="file" name="image" accept="file/*" class="form-control">

     <input type="submit" name="add_hotel" class="btn btn-success btn-block">


			</form>
		</div>
	</div>
</div>



<?php   include "layout/footer1.php";?>


