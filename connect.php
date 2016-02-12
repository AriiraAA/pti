<?php 
define("HOSTNAME", "br-cdbr-azure-south-a.cloudapp.net");
define("USERNAME", "b89ed51f5d9bbe");
define("PASSWORD", "3f2785a2");
define("DBNAME", "db_azurems");

$conn = @mysql_connect(HOSTNAME, USERNAME, PASSWORD) or die(mysql_error());
$db = @mysql_select_db(DBNAME) or die(mysql_error());
?>