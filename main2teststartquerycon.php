<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //ЭјвГБрТы
//mysql_query("set names utf-8");  //Ъ§ОнПтБрТы
$level = $_SESSION[level2];

     	 $sql = "select id,cont,anwser from math where level= '$level' order by rand() limit 1";
	     $result= mysql_query($sql,$conn);
	     $info = mysql_fetch_array($result,MYSQL_ASSOC);
?>