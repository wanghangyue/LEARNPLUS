<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
include 'mainbackquery.php';
header("Content-Type:text/html;charset=gbk");  //��ҳ����
//mysql_query("set names utf-8");  //���ݿ����
$name = $_SESSION['name'];
$id = $_GET['id'];

	  $sql00 = "select key1 from test where name='".$name."'";
	  $result00= mysql_query($sql00,$conn);
	  $rows100 = mysql_fetch_array($result00,MYSQL_ASSOC);
	  $string00 = $rows100[key1];
	  $rows200 = explode("+",$string00);
	  //print_r($rows200);
	  $rs00 = array_search($id1,$rows200);
	  	if ($rs ==""){
        	$sql22 = "update test set key1 =  concat(key1,'+',$id) where name='$name'"; 
            $ok22 = mysql_query($sql22,$conn);
        }
      $sql001 = "select key1all from test where name='".$name."'";
	  $result001= mysql_query($sql001,$conn);
	  $rows1001 = mysql_fetch_array($result001,MYSQL_ASSOC);
	  $string001 = $rows100[key1all];
	  $rows2001 = explode("+",$string001);
	  //print_r($rows200);
	  $rs00 = array_search($id1,$rows2001);
	  	if ($rs ==""){
        	$sql22 = "update test set key1all =  concat(key1all,'+',$id) where name='$name'"; 
            $ok22 = mysql_query($sql22,$conn);
        }
        if($ok22!=""){
        	echo "ok";
        }
      
?>