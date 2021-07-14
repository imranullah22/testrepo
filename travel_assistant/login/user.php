<?php session_start(); 
if(!isset($_SESSION['login'])){
	header('location:login.php');
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; 

$usql="select * from users";
$ur=mysqli_query($con,$usql);
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
					<th>user_id</th>
					<th> user_name</th>
					<th> user_email</th>
					<th>user_nationality</th>
					<th>religion</th>
					<th>edit</th>
					<th>delete</th>
					</tr>
				</thead>
				<tbody>
				<?php	while($urow=mysqli_fetch_assoc($ur)){?>
					<tr>
						<td><?php  echo  $urow["user_id"];?></td>
						<td><?php echo $urow["user_name"]; ?></td>	
						<td><?php  echo  $urow["user_email"];?></td>
						
						<td><?php echo $urow["user_nationality"]; ?></td>
						<td><?php  echo  $urow["religion"];?></td>

						<td><a href="edit_user.php?id=<?php echo $urow['user_id'];?>">edit</a> </td>
					<td><a onclick="return(confirm('are you sure to delete this user'))" href="action1/du.php?id=<?php echo $urow['user_id'];?>">delete</a> </td></tr>


						</tr>

					 
		        	<?php	}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include 'layout/footer1.php'; ?>