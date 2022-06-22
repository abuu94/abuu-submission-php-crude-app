<?php

if (isset($_GET['delete_id'])){
	$delete_id=$_GET['delete_id'];
	

	$sql = "DELETE FROM mobile_network WHERE id='$delete_id'";

	if ($conn->query($sql) === TRUE) {
	    header("location:records.php");
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
}?>
