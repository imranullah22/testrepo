<?php session_start(); 
if(!isset($_SESSION['login'])){
	header("location:login.php");
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; 

$us="SELECT 
places.place_id,
places.place_name,
places.lng,
places.lat,
places.img,
cities.city_name
FROM 
places
INNER JOIN cities ON cities.city_id=places.city_id";
$ur=mysqli_query($con,$us);
checkquery($ur);
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
					<th>place_id</th>
					<th> place_name</th>
					<th>lng</th>
					<th>lat</th>
					<th>city_name</th>
					<th>img</th>
					<th>edit</th>
					<th>delete</th>
					</tr>
				</thead>
				<tbody>
				<?php	while($drow=mysqli_fetch_assoc($ur)){?>
					<tr>
					<td><?php echo $drow['place_id'];?> </td>
					<td><?php echo $drow['place_name'];?> </td>
					<td><?php echo $drow['lng'];?> </td>
					<td><?php echo $drow['lat'];?> </td>
					<td><?php echo $drow['city_name'];?> </td>
					<td><?php echo $drow['img'];?> </td>
					<td><a href="edit_place.php?id=<?php echo $drow['place_id'];?>">edit</a> </td>
					<td><a onclick="return(confirm('are you want to delete this user'))" href="action1/duplace.php?id=<?php echo $drow['place_id'];?>">delete</a> </td>
				    </tr>


			<?php	}?>
				</tbody>

			</table>
			
		</div>

	</div>
</div>


<?php include 'layout/footer1.php'; ?>
