<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: index.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form | PTI Labs</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4">
				<center>
					<h1>Selamat datang, <?= $_SESSION['username'] ?>!</h1>
				</center>
				<form action="isi_tamu.php" method="POST">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input class="form-control" type="text" name="nama" />
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="email" name="email" />
					</div>
					<center>
						<input class="btn btn-success" type="submit" value="Submit" /> <br/>
						<a href="logout.php">Logout</a> | <a href="tamu.php">Daftar Tamu</a>
					</center>
				</form>	
			</div>	
		</div>
	</div>
</body>
</html>
