<?php session_start(); 
if(!isset($_SESSION['login'])){
	header("location:login.php");
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; 



$us="SELECT * from  country";
$r=mysqli_query($con,$us);
checkquery($r);



?>

<div class="container">
	
	<div class="row">
		<div class="col-md-12">
		
<?php if (isset($_SESSION['success'])) {?>
						<div class="alert alert-success">
							<?php echo $_SESSION['success'];
							unset($_SESSION['success']);?>
						</div>
				<?php }?>
		
<?php if (isset($_SESSION['success'])) {?>
						<div class="alert alert-danger">
							<?php echo $_SESSION['success'];
							unset($_SESSION['success']);?>
						</div>
				<?php }?>

				<?php if (isset($_SESSION['del'])) {?>
						<div class="alert alert-danger">
							<?php echo $_SESSION['del'];
							unset($_SESSION['del']);?>
						</div>
				<?php }?>

    <table class="table table-bordered">
				<thead>
					<tr>
					<th>id</th>
					<th> country name</th>
					<th>edit</th>
					<th>delete</th>
					</tr>
				</thead>
				<tbody>
				<?php	while($row=mysqli_fetch_assoc($r)){?>
					<tr>
					<td><?php echo $row['id'];?> </td>
					<td><?php echo $row['country_name'];?> </td>
					
					<td><a href="edit_user_country.php?id=<?php echo $row['id'];?>">edit</a> </td>
					<td><a onclick="return(confirm('are you sure to delete this user country'))" href="action1/duc.php?id=<?php echo $row['id'];?>">delete</a> </td></tr>

			<?php	}?>
				</tbody>

			</table>
			
		</div>

	</div>
</div>


<?php include 'layout/footer1.php'; ?>


