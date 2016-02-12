<?php 
include "connect.php";

$sql = @mysql_query("SELECT * FROM tamu");
$html = '';
if (mysql_num_rows($sql) > 0) {
	$no = 1;
	$html = '<table class="table table-striped"><thead><th>No</th><th>Nama</th><th>Email</th></thead><tbody>';
	while ($row = mysql_fetch_array($sql)) {
		$html .= '<tr>';
		$html .= '<td>'.$no.'</td>';
		$html .= '<td>'.$row['nama'].'</td>';
		$html .= '<td>'.$row['email'].'</td>';
		$html .= '</tr>';

		$no++;	
	}
	$html .= '</tbody></table>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Tamu | PTI Labs</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<center>
			<h1>Daftar Tamu</h1>
			<?= $html ?>
			<a href="index.php">Form Tamu</a>
		</center>
	</div>
</body>
</html>