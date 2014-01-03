<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
include 'main1testcandoquerycon.php';
header("Content-Type:text/html;charset=gbk");  //ЭјвГБрТы
//mysql_query("set names utf-8");  //Ъ§ОнПтБрТы
$name=$_SESSION['name'];
$id1 = $_GET[id];
      $sql0 = "select cannot from test where name='".$name."'";
	  $result= mysql_query($sql0,$conn);
	  $rows1 = mysql_fetch_array($result,MYSQL_ASSOC);
	  $string = $rows1[cannot];
	  $rows2 = explode("+",$string);
	  //print_r($rows2);
	  $rs = array_search($id1,$rows2);
	  	if ($rs ==""){
        	$sql = "update test set cannot =  concat(cannot,'+',$id1) where name='".$name."'";
      		$ok = mysql_query($sql,$conn);
        }
      $sql03 = "select todaycannot from test where name='".$name."'";
	  $result03= mysql_query($sql03,$conn);
	  $rows13 = mysql_fetch_array($result03,MYSQL_ASSOC);
	  $string03 = $rows13[todaycannot];
	  $rows03 = explode("+",$string03);
	  //print_r($rows2);
	  $rs03 = array_search($id1,$rows03);
	  	if ($rs03 ==""){
        	$sql = "update test set todaycannot =  concat(todaycannot,'+',$id1) where name='".$name."'";
      		$ok = mysql_query($sql,$conn);
        }
      

?>