<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
	session_start();
	include 'conn/conn1.php';
	
	$suggest = $_GET['suggest'];
	$contanctway = $_GET['contanctway'];
	$sql="insert ignore into backus (suggest,contanctway) values ('$suggest','$contanctway')";
	mysql_query($sql,$conn);
	echo "ok";
?>