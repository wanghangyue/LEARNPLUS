<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
$name = $_GET['name'];
$yanzheng = $_GET['yanzheng'];
$newpass = $_GET['newpass'];
$confirmpass = $_GET['confirmpass'];

$sql = "select password from test where name = '".$name."'";
$result= mysql_query($sql,$conn);
$resultrow = mysql_fetch_array($result,MYSQL_ASSOC);
$password = $resultrow[password]; 

if(md5($yanzheng)==$password && $newpass==$confirmpass ){
	$sql = "update test set password = '".md5($newpass)."' where name = '".$name."'";
	mysql_query($sql,$conn);
	echo "1";
}
else {
	echo "0";
}
?>