<?php 
include "connect_by_session.php";
$kunci = "LOCK TABLES person as person1 WRITE";
$result = mysqli_query($conn, $kunci);
?>