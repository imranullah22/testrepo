<?php

function checkquery($result){
	global $con;
	if(!$result){
		die("error in sqli:  ".mysqli_error($con)); 

	}
}


function check_query($result){
	global $con;
	if(!$result){
	die(mysqli_error($con));
}
}

function run_query($query){
	global $con;
	$result=mysqli_query($con,$query);
	check_query($result);
	return $result;
}

function SelectAllFromTable($tablename){
	$data=array();
	$sql="SELECT * FROM $tablename";
	$result=run_query($sql);
	while($row=mysqli_fetch_assoc($result)){
		$data[]=$row;
	}
	return $data;
}

function selectSingleFromTable($tablename,$field,$value){
	$sql="SELECT * FROM $tablename WHERE $field='$value'";
	$result=run_query($sql);
	$row=mysqli_fetch_assoc($result);
	return $row;
}
function selectMultipleFromTable($tablename,$field,$value){
	$data=array();
	$sql="SELECT * FROM $tablename WHERE $field='$value'";
	$result=run_query($sql);
	while($row=mysqli_fetch_assoc($result)){
		$data[]=$row;
	}
	return $data;
}

?>