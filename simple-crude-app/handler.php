<?php
include("connection.php");
if (isset($_POST["add"])){
	$name=$_POST["name"];
	$headquater=$_POST["headquater"];
	$website=$_POST["website"];
	

	$sql = "INSERT INTO mobile_network (network_name, headquater, website) VALUES ('$name', '$headquater', '$website');";

	if ($conn->query($sql) === TRUE) {
		header("location:records.php");
		   
	} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}elseif(isset($_POST["update"])){
	$id=$_POST["id"];
	$name=$_POST["name"];
	$headquater=$_POST["headquater"];
	$website=$_POST["website"];
	
	$sql = "UPDATE mobile_network SET network_name='$name',headquater='$headquater',website='$website' WHERE id='$id'";
	

	if ($conn->query($sql) === TRUE) {
		header("location:records.php");
		   
	} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}
	
?>
