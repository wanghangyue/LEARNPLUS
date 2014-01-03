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

	  $sql00 = "select todayover from test where name='".$name."'";
	  $result00= mysql_query($sql00,$conn);
	  $rows100 = mysql_fetch_array($result00,MYSQL_ASSOC);
	  $string00 = $rows100[todayover];
	  $rows200 = explode("+",$string00);
	  //print_r($rows200);
	  $rs00 = array_search($id1,$rows200);
	  	if ($rs ==""){
        	$sql22 = "update test set todayover = concat(todayover,'+',$id) where name='".$name."'";
            $ok22 = mysql_query($sql22,$conn);
        }
      for ($j = 0; $j < $count03; $j++) {
	 	if($rows3[$j]==$id) break;
	   }
	 
	 $id2= $rows3[$j+1];
	 echo $id2;
?>