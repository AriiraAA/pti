<?php
session_start();
include "connect.php"; 
if (isset($_SESSION['username'])) {
	if (isset($_POST['nama']) || isset($_POST['email'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		@mysql_query("INSERT INTO tamu VALUES('".$nama."', '".$email."')");
		header("Location: form.php");
	}
} else {
	header("Location: index.php");
}
?>