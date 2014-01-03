<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
	session_start();
	if($_SESSION[name]==''){
	header("Location: login.php");
	}
	include 'conn/conn1.php';
	
$backclass = $_GET['class'];
$backlevel = $_GET['level'];
$backtype = $_GET['type'];

$_SESSION[backclass] = $_GET['class'];
$_SESSION[backlevel] = $_GET['level'];
$_SESSION[backtype] = $_GET['type'];
$_SESSION[start1] = "1";
?>