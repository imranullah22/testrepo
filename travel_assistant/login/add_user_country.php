<?php session_start(); 
if(!isset($_SESSION['login'])){
   header("location:login.php");
}
 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php   include "layout/header1.php";

?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			 <h3>Add Country </h3>
							
            <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
        
 <form action="action1/aca.php" method="post">
 	<div class="form-group"><label>Country name</label>
     <input type="text" class="form-control"  name="country_name"></div >
     <?php
      if(isset($_SESSION["err"])){
        echo "<small>".$_SESSION["err"]."</small>";
        unset($_SESSION["err"]);
      }

     ?>
						</div>
						
					</div>
				
                    <div class="col-md-6">
                    	<input type="submit" class="btn btn-success" name="add_country">
                    </div>
                    </div>

			</form>
		</div>
	</div>
</div>



<?php   include "layout/footer1.php";?>


