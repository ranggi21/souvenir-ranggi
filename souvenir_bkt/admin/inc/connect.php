<?php
	$host ="localhost";
$dbname="souvenir";
$user="postgres";
$port="5432";
$pass="ranggi21";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
