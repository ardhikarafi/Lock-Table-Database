<?php
include "connect_by_session.php";

	$del = mysqli_query($conn, "DELETE FROM ACTIVE_USER");
	if(!$del){
		printf("Error: %s\n", mysqli_error($conn));
    	exit();
	}
	header("location:view.php");

?>