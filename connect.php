<?php
$host = "ec2-18-206-103-49.compute-1.amazonaws.com";
$dbname="d5oo4bn0t3uh97";
$user="kgxyfexrbnhbco";
$port="5432";
$pass="d946107863eec460fc970129ccea38d649ca146a109905a7b343843b9755ebcc";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
