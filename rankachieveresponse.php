<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
header("Content-Type:text/html;charset=gbk");  //��ҳ����
//mysql_query("set names utf-8");  //���ݿ����

unset($_SESSION['rankcannot']);
unset($_SESSION['rankcando']);
unset($_SESSION['rankkey']);
unset($_SESSION['rankerror']);

$_SESSION['rankachieve'] = "ok";
?>