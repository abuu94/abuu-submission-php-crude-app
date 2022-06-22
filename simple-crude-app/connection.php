<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zaca_bundle_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function delete(){
	global $conn;
	if (isset($_GET["delete_id"])){
		$delete_id=$_GET["delete_id"];
		
	
	$sql = "DELETE FROM mobile_network WHERE id='$delete_id'";

	if ($conn->query($sql) === TRUE) {
	    header("location:records.php");
	} else {
	    echo "Error deleting record: " . $conn->error;
	}



	}
	
}
?>
