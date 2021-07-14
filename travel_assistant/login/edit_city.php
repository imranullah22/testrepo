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
    header("location:city.php");
}

$usql="SELECT * from cities where city_id=$pageid";
$ur=mysqli_query($con,$usql);
$urow=mysqli_fetch_assoc($ur);
$us="SELECT * from country ";
$dr=mysqli_query($con,$us);
checkquery($dr);

?>
<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Edit city</h3>
             <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
           
        
 <form action="action1/ecitya.php?id=<?php echo $pageid; ?>" method="post">
    <div class="form-group">
        <label> City</label>
     <input type="text" required class="form-control"  name="city_name" value="<?php echo $urow['city_name']; ?>">
 </div >
       <div class="form-group">
     
    <label>country name</label>
                            <select name="country_name" required class="form-control">
                                <option value="">...please select...</option>
                                <?php   while ($drow=mysqli_fetch_assoc($dr)){?>
                                    <option value="<?php  echo $drow['id']; ?>"> <?php echo $drow['country_name']; ?> </option>



                          <?php }?>
                        </select>  
                        </div> 
     
<?php
/*
    <small class="text-danger">
        <?php    echo  $_SESSION['err'];?>
        <?php  unset($_SESSION['err']);?>
    </small>
*/ ?>

    


     <input type="submit" name="edit_city" class="btn btn-success">


 </form>
 </div>
 </div>
  </div>



<?php include 'layout/footer1.php'; ?>
