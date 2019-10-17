<?php
include "connect_by_session.php";
$id = $_POST['id'];
$name = $_POST['name'];
$nim= $_POST['nim'];
$jurusan= $_POST['jurusan'];
$kelamin= $_POST['kelamin'];


$query = "UPDATE person SET name='$name',nim='$nim', jurusan='$jurusan', kelamin='$kelamin' WHERE id='$id'";

if(!$conn){
	echo '<script language="javascript">';
	echo 'alert("Koneksi Eror")';
	echo '</script>';
}else{
	mysqli_query($conn, $query);
	include_once("timeout.php");
}
?>