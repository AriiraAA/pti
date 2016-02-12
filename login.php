<?php 
session_start();
include "connect.php";

if (isset($_POST['username'], $_POST['password'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5($_POST['password']);

	$sql = @mysql_query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
	if (mysql_num_rows($sql) === 1) {
		while ($row = mysql_fetch_array($sql)) {
			$_SESSION['username'] = $row['username'];
			header("Location: form.php");
		}
	} else {
		header("Location: index.php");
	}
}
?>