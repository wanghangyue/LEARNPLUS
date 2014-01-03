<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
header("Content-Type:text/html;charset=gbk");  //ЭјвГБрТы
//mysql_query("set names utf-8");  //Ъ§ОнПтБрТы

unset($_SESSION['cannot']);
unset($_SESSION['cando']);
unset($_SESSION['key']);
unset($_SESSION['error']);

$_SESSION['achieve'] = "ok";
?>