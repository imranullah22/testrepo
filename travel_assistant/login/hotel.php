<?php session_start(); 
if(!isset($_SESSION['login'])){
	header("location:login.php");
}
 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; 


$us="SELECT
hotels.hotel_id,
hotels.hotel_name,
hotels.room_price,
hotels.email,
hotels.phone,
hotels.hotel_address,
cities.city_name
FROM
hotels
INNER JOIN cities ON cities.city_id=hotels.city_id ";
$rs=mysqli_query($con,$us);
checkquery($rs);


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
         if(isset($_SESSION['del'])){?>
         <div class="allert allert-danger">
             <?php  echo  $_SESSION["del"]; ?>

            <?php  unset($_SESSION["del"]);?>
         </div>
    <?php      }?>


    <table class="table table-bordered">
				<thead>
					<tr>
					<th>hotel_id</th>
					<th> hotel_name</th>
					<th>room_price</th>
					<th> hotel_address</th>
					<th> phone</th>
					<th> email</th>
					<th> city_name</th>
					
					<th>edit</th>
					<th>delete</th>
					</tr>
				</thead>
				<tbody>
				<?php	while($row=mysqli_fetch_assoc($rs)){?>
					<tr>
					<td><?php echo $row['hotel_id'];?> </td>
					<td><?php echo $row['hotel_name'];?> </td>
					<td><?php echo $row['room_price'];?> </td>
					<td><?php echo $row['hotel_address'];?> </td>
					<td><?php echo $row['phone'];?> </td>
					<td><?php echo $row['email'];?> </td>
					<td><?php echo $row['city_name'];?> </td>
					
					<td><a href="edit_hotel.php?id=<?php echo $row['hotel_id'];?>">edit</a> </td>
					<td><a onclick="return(confirm('are you sure to delete this user '))" href="action1/duhotel.php?id=<?php echo $row['hotel_id'];?>">delete</a> </td></tr>


			<?php	}?>
				</tbody>

			</table>
			
		</div>

	</div>
</div>


<?php include 'layout/footer1.php'; ?>


