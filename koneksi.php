<?php
$dbHost = "localhost";
$userName = "root";
$passwd	= "";
$dbName = "appleshop";

mysql_connect($dbHost,$userName,$passwd) or die("Koneksi gagal.");
mysql_select_db($dbName) or die("Database not found");
?>