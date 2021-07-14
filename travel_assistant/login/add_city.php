<?php session_start(); 
if(!isset($_SESSION['login'])){
	header("location:login.php");
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php   include "layout/header1.php";
$us="SELECT * from country ";
$dr=mysqli_query($con,$us);
checkquery($dr);

?>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">

  <h3 class="text-center">Add City</h3>
            <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>


			<form action="action1/acitya.php"  method="post">
				<div class="row">
					<div class="col-md-4">
                       
                        <div class="form-group">
                        	<label>city name</label>
           <input type="text" class="form-control"  name="city_name">
       </div >
						
					</div>
				</div>
				<div class="row">
                         <div class="col-md-4">
				
						<div class="form-group">
							<label>country name</label>
							<select name="country_name" required class="form-control">
								<option value="">...please select...</option>
								<?php   while ($drow=mysqli_fetch_assoc($dr)){?>
									<option value="<?php  echo $drow['id']; ?>"> <?php echo $drow['country_name']; ?> </option>



                          <?php	}?>
						</select>	
						</div>
						
				
                    </div>
                </div>
                    <div class="col-md-12">
                    
                    	<input type="submit" class="btn btn-success" name="add_city">
                   </div>

			</form>
		</div>
	</div>
</div>



<?php   include "layout/footer1.php";?>


