<?php
include "connect_by_session.php";

$id = $_GET['id'];

#region CEK USER
$query = "SELECT * FROM active_user WHERE name IS NOT NULL;";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if(isset($data['name'])){
	if($data['name'] != $_SESSION['username']){
		echo '<script language="javascript">';
		echo 'alert("Table sedang dipakai");
				window.location.href="view.php";';
		echo '</script>';
		die();
	}
}else{
	$insert = mysqli_query($conn, "INSERT INTO active_user VALUES('".$_SESSION['username']."')");
	if (!$insert) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
}
#endregion

$query = "DELETE FROM person WHERE ID='$id'";
$delete = mysqli_query($conn, $query);

if(!$delete){
	echo '<script language="javascript">';
		echo 'alert("Unknown Error");
				window.location.href="view.php";';
		echo '</script>';
}else{
	header('location:view.php');
}
?>