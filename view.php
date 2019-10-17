<?php
include "connect_by_session.php";
$query = "SELECT * FROM person";
$sql = mysqli_query ($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csstemp/util.css">
	<link rel="stylesheet" type="text/css" href="csstemp/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
			<p align="center">
				<a href="add.php">Add Data</a>
			</p>
					<div class="table">

						<div class="row header">
							<div class="cell">
								ID
							</div>
							<div class="cell">
								Nama
							</div>
							<div class="cell">
								Nim
							</div>
							<div class="cell">
								Jurusan
							</div>
							<div class="cell">
								Kelamin
							</div>
							<div class="cell">
								Aksi
							</div>
						</div>
						<?php
				while ($hasil = mysqli_fetch_array ($sql)) {
					$id = $hasil['id'];
					$name = $hasil['name'];
					$nim = $hasil['nim'];
					$jurusan = $hasil['jurusan'];
					$kelamin = $hasil['kelamin'];
					?>
						<div class="row">
							<div class="cell" data-title="Full Name">
								<?php echo "$id"; ?>
							</div>
							<div class="cell" data-title="Full Name">
								<?php echo "$name"; ?>
							</div>	
							<div class="cell" data-title="Full Name">
								<?php echo "$nim"; ?>
							</div>	
							<div class="cell" data-title="Full Name">
								<?php echo "$jurusan"; ?>
							</div>
							<div class="cell" data-title="Full Name">
								<?php echo "$kelamin"; ?>
							</div>
							<div class="cell" data-title="Full Name">
								<?php  echo "
								<a href='edit.php?id=$id'>Edit</a>
								<a href='delete.php?id=$id'>Hapus</a>
								";
								?>
							</div>						
										
						</div>
					<?php
					}
					?>
					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>