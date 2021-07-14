<?php

//include "layout/header.php";
include "login/_inc/connection.php";
$citysql="SELECT * FROM `cities` WHERE country_id=".$_POST["country"];
$sql=mysqli_query($con,$citysql);
while($crow=mysqli_fetch_assoc($sql)){?>
	<option value="<?php  echo $crow['city_id'] ?>"> <?php  echo $crow['city_name'] ?></option>




<?php }?>