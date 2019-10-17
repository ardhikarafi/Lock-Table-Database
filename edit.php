<?php
include "connect_by_session.php";


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


$id = $_GET['id'];
$query = "SELECT * from person where ID='$id'";
$search = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body {
  background: #3498db;
  font-family: sans-serif;
}

h2 {
  color: #fff;
}

.login {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}

label {
  font-size: 10pt;
  color: #555;
}

input[type="text"],
input[type="password"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}

.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
}
</style>
<script src="timer.js">
</script>
<body>
	<br/>
	<br/>
	<center><h2>Edit</h2></center>	
	<br/>
	<div class="login">
	<br/>
	<span>
		<p class="user" align="center"> User: <?php echo $_SESSION['username'] ?> </p>
		<p id="timer" align="center"></p>
	</span>
		<form action="save_edit_data.php"method="POST">
					<?php
						while($data = mysqli_fetch_array($search)){
					?>
			<div>
				<label>ID:</label>
				<input type="text" name="id" id="id" value="<?php echo $data[0]; ?>"/>
			</div>
			
			<div>
				<label>Name:</label>
				<input type="text" name="name" id="name" value="<?php echo $data[1]; ?>" />
				
			</div>	
			<div>
				<label>Nim:</label>
				<input type="text" name="nim" id="nim" value="<?php echo $data[2]; ?>"/>
			</div>
			<div>
				<label>Jurusan:</label>
				<input type="text" name="jurusan" id="jurusan" value="<?php echo $data[3]; ?>"/>
			</div>
			<div>
				<label>Kelamin:</label>
				<input type="text" name="kelamin" id="kelamin" value="<?php echo $data[4]; ?>"/>
			</div>		
			<div>
				<input type="submit" value="Edit Data" class="tombol">
			</div>
			<?php 
				}
			 ?>
		</form>
	</div>
</body>
</html>