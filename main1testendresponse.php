<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //ЭјвГБрТы
//mysql_query("set names utf-8");  //Ъ§ОнПтБрТы
$name=$_SESSION[name];
$id1 = $_GET[id];
      if($id1 !=""){
      $sql0 = "select cannot from test where name= '$name'";
      $result1 = mysql_query($sql0,$conn);
      $ok3 = mysql_fetch_array($result1,MYSQL_ASSOC);
      if($ok3['cannot']!=''){
      echo "1";
      }
      else {echo "0";}
  }
      else {;}

?>