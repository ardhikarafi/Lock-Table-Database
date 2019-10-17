<?php
include "connect_by_session.php";
$name = $_POST['name'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$kelamin=$_POST['kelamin'];


$query = "INSERT INTO person(name, nim, jurusan, kelamin) VALUES('$name', '$nim','$jurusan','$kelamin');";

if(!$conn){
	echo '<script language="javascript">';
	echo 'alert("Koneksi Eror")';
	echo '</script>';
}else{
	mysqli_query($conn, $query);
	header("location:view.php");
}
?>