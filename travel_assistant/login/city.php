<?php session_start(); 
if(!isset($_SESSION['login'])){
	header("location:login.php");
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; 

$us="SELECT
cities.city_id,
cities.city_name,
country.country_name
from
cities
INNER JOIN country ON country.id=cities.country_id";
$r=mysqli_query($con,$us);
checkquery($r);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			 <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-success">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
 <?php
         if(isset($_SESSION['success'])){?>
         <div class="allert allert-warning">
             <?php  echo  $_SESSION["success"]; ?>

            <?php  unset($_SESSION["success"]);?>
         </div>
    <?php      }?>
    <?php
         if(isset($_SESSION['del'])){?>
         <div class="allert allert-danger">
             <?php  echo  $_SESSION["del"]; ?>

            <?php  unset($_SESSION["del"]);?>
         </div>
    <?php      }?>


    <table class="table table-bordered">
				<thead>
					<tr>
					<th>city_id</th>
					<th> city_name</th>
					<th> country_name</th>
					<th>edit</th>
					<th>delete</th>
					</tr>
				</thead>
				<tbody>
				<?php	while($row=mysqli_fetch_assoc($r)){?>
					<tr>
					<td><?php echo $row['city_id'];?> </td>
					<td><?php echo $row['city_name'];?> </td>
						<td><?php echo $row['country_name'];?> </td>
					<td><a href="edit_city.php?id=<?php echo $row['city_id'];?>">edit</a> </td>
					<td><a onclick="return(confirm('are you sure to delete this user city'))" href="action1/ducity.php?id=<?php echo $row['city_id'];?>">delete</a> </td></tr>


			<?php	}?>
				</tbody>

			</table>
			
		</div>

	</div>
</div>


<?php include 'layout/footer1.php'; ?>


