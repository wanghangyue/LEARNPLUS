<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
include 'main2teststartquerycon.php';
header("Content-Type:text/html;charset=gbk");  //ЭјвГБрТы
//mysql_query("set names utf-8");  //Ъ§ОнПтБрТы

     $id = $info[id];
     $cont=$info[cont];
     $anwser=$info[anwser];
     
     $array = array($id,$cont,$anwser);
     $text = implode("#",$array);
     
     echo $text;

?>