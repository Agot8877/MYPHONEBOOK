<?php
	include('edit.php');





if(isset($_GET['contact_id'])){ //Getting id number on the link
		$contact_id = $_GET['contact_id'];

    	
/* Query for selected id to delete */
$query = "DELETE FROM Contacts WHERE contact_id = '$contact_id'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
header("location: index.php");
}
?>