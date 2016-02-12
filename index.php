<?php 
session_start();
if (isset($_SESSION['username'])) {
	header("Location: form.php");
	exit;
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
					<h1>Login</h1>
				</center>
				<form action="login.php" method="POST">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" />
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="password" />
					</div>
					<center>
						<input class="btn btn-success" type="submit" value="Log in" /> <br/>
						<a href="register.php">Register</a> | <a href="index.php">Login</a> | <a href="tamu.php">Daftar Tamu</a>
					</center>
				</form>	
			</div>	
		</div>
	</div>
</body>
</html>