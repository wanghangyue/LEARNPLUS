<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
include 'mainbackquery.php';
header("Content-Type:text/html;charset=gbk");  //ЭјвГБрТы
//mysql_query("set names utf-8");  //Ъ§ОнПтБрТы
$name = $_SESSION['name'];
$id = $_GET['id'];
      
      $sql00 = "select error from test where name='".$name."'";
	  $result00= mysql_query($sql00,$conn);
	  $rows100 = mysql_fetch_array($result00,MYSQL_ASSOC);
	  $string00 = $rows100[error];
	  $rows200 = explode("+",$string00);
	  //print_r($rows200);
	  $rs00 = array_search($id1,$rows200);
	  	if ($rs ==""){
        	$sql22 = "update test set error =  concat(error,'+',$id) where name='$name'"; 
      $ok22 = mysql_query($sql22,$conn);
        }
      $sql001 = "select errorall from test where name='".$name."'";
	  $result001= mysql_query($sql001,$conn);
	  $rows1001 = mysql_fetch_array($result001,MYSQL_ASSOC);
	  $string001 = $rows100[errorall];
	  $rows2001 = explode("+",$string001);
	  //print_r($rows200);
	  $rs00 = array_search($id1,$rows2001);
	  	if ($rs ==""){
        	$sql22 = "update test set errorall =  concat(errorall,'+',$id) where name='$name'"; 
            $ok22 = mysql_query($sql22,$conn);
        }
        if($ok22!=""){
        	echo "ok";
        }
?>