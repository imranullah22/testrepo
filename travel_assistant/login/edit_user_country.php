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
    header("location:country.php");
}

$us="select * from country where id= $pageid";
$r=mysqli_query($con,$us);
$row=mysqli_fetch_assoc($r);

?>
<div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Edit Country</h3>
     <?php if (isset($_SESSION['success'])) {?>
                        <div class="alert alert-success">
                            <?php echo $_SESSION['success'];
                            unset($_SESSION['success']);?>
                        </div>
                <?php }?>

           
        
 <form action="action1/euca.php?id=<?php echo $pageid; ?>" method="post">
    <div class="form-group">
        <label>user_country</label>
     <input type="text" required class="form-control"  name="country_name" value="<?php echo $row['country_name']; ?>"></div >

    


     <input type="submit" name="add_country" class="btn btn-success">


 </form>
 </div>
 </div>
  </div>



<?php include 'layout/footer1.php'; ?>
