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
    header("location:hotel.php");
}

$usql="SELECT * FROM hotels WHERE hotel_id='$pageid'";
$que=mysqli_query($con,$usql);
$row=mysqli_fetch_assoc($que);

$drr="SELECT * from cities ";
$rr=mysqli_query($con,$drr);
checkquery($rr);


?>
<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Edit hotel</h3>
             <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
           
        
 <form action="action1/ehotela.php?id=<?php echo $pageid; ?>" method="post">
    <div class="form-group">

     <label>hotel_id</label>
     <input type="varchar" required class="form-control"  name="hotel_id" value=" <?php echo $row['hotel_id']; ?>"></div >
     

    <div class="form-group">
        <label>hotel</label>
     <input type="text" required class="form-control"  name="hotel" value="<?php echo $row['hotel_name']; ?>"></div >

    
    <div class="form-group">
        <label>room_price</label>
     <input type="text" required class="form-control"  name="room_price" value="<?php echo $row['room_price']; ?>"></div >

    

    <div class="form-group">
        <label>hotel_address</label>
     <input type="text" required class="form-control"  name="hotel_address" value="<?php echo $row['hotel_address']; ?>"></div >

    

    <div class="form-group">
        <label>phone</label>
     <input type="tel" required class="form-control"  name="phone" value="<?php echo $row['phone']; ?>"></div >

    
    <div class="form-group">
        <label>email</label>
     <input type="email" required class="form-control"  name="email" value="<?php echo $row['email']; ?>"></div >

    
    <div class="form-group">
                    <label>city_name</label>
                   <select name="city_name" required class="form-control">
                                <option value="">...please select...</option>
                                <?php   while($drow=mysqli_fetch_assoc($rr)){?>
                                    <option value="<?php  echo $drow['city_id']; ?>"> <?php echo $drow['city_name']; ?> </option>



                          <?php }?>
                        </select>   
</div>

     <input type="submit" name="edit_hotel" class="btn btn-success">


 </form>
 </div>
 </div>
  </div>



<?php include 'layout/footer1.php'; ?>
