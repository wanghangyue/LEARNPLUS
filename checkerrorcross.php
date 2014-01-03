<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
include 'checkerrorquery.php';
header("Content-Type:text/html;charset=gbk");  //ЭјвГБрТы
//mysql_query("set names utf-8");  //Ъ§ОнПтБрТы
$name = $_SESSION['name'];
$id = $_GET['id'];
	  
      $sql23 = "update test set num = num +1 where name= '$name'";
      $ok23 = mysql_query($sql23,$conn);
      $sql2 = "update test set todaytotalnum = todaytotalnum +1 where name= '$name'";
      $ok2 = mysql_query($sql2,$conn);

	   for ($j = 0; $j < $count03; $j++) {
	 	if($rows3[$j]==$id) break;
	   }
	 
	 $id2=$rows3[$j+1];
	 echo $id2;
?>