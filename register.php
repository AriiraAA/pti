<?php 
include "connect.php";
$message = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5($_POST['password']);
	@mysql_query("INSERT INTO user VALUES('".$username."', '".$password."')");
	$message = '<div class="text-success">Register berhasil!</div>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PTI Labs</title>
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
					<h1>Register</h1>
				</center>
				<form action="register.php" method="POST">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" />
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="password" />
					</div>
					<center>
						<input class="btn btn-success" type="submit" value="Register" /> <br/>
						<a href="register.php">Register</a> | <a href="index.php">Login</a> | <a href="tamu.php">Daftar Tamu</a>
						<?= $message ?>
					</center>
				</form>	
			</div>	
		</div>
	</div>
</body>
</html>