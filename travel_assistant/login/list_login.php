<?php session_start(); 
if(!isset($_SESSION['login'])){
	header(location:login.php);
}

 ?>
<?php include '_inc/connection.php';?>
<?php include '_inc/function.php';?>
<?php include 'layout/header1.php'; 

$usql="select * from admin";
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
					<th>id</th>
					<th>email</th>
					<th>email</th>
					<th>password</th>
					<th>edit</th>
					<th>delete</th>
					</tr>
				</thead>
				<tbody>
				<?php	while($urow=mysqli_fetch_assoc($ur)){?>
					<tr>
						<td><?php  echo  $urow["id"];?></td>
						<td><?php echo $urow["name"]; ?></td>	
						<td><?php  echo  $urow["email"];?></td>
						<td><?php  echo  $urow["password"];?></td>
						
						<td><a href="edit_login.php?id=<?php echo $urow['id'];?>">edit</a> </td>
					<td><a onclick="return(confirm('are you sure to delete this user'))" href="action1/dlogin.php?id=<?php echo $urow['id'];?>">delete</a> </td></tr>


						</tr>

					 
		        	<?php	}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include 'layout/footer1.php'; ?>