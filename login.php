<?php

$username = $_POST['username'];
$pass = $_POST['pass'];
$hostname = gethostname();
$host = gethostbyname($hostname);
$db = "tugas";

$conn = mysqli_connect($host, $username, $pass, $db);
if(!$conn){
	echo '<script language="javascript">';
	echo 'alert("Login gagal. Cek username dan password.");
			window.location.href="index.html";';
	echo '</script>';
	
}else{
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['pass'] = $pass;
	header("location:view.php");
}

?>