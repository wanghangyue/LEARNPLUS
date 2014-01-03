<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //网页编码
//mysql_query("set names utf-8");  //数据库编码

$class4 = $_SESSION['class4'];
$level4 = $_SESSION['level4'];
$type4 = $_SESSION['type4'];

     	 
     	 $sql = "select id,class,level,type from math";
	     $result= mysql_query($sql,$conn);
	     $count = mysql_num_rows($result);
	     //echo $count;
         $rows=array();
	     while ($rows1 = mysql_fetch_array($result,MYSQL_ASSOC)){
		      $rows[]= $rows1;
	     }
	     //print_r($rows);
	     for ($i = 0; $i <$count ; $i++){
     	     	if (stristr($rows[$i]['class'],$class4)&&stristr($rows[$i][level],$level4)&&stristr($rows[$i][type],$type4))        //每个不会做的知识点与查询每道题的知识点字符串匹配，而且自己和自己匹配上是应该的
     	     	{
     	     	$string2 .= $rows[$i][id].'+';               //存到字符串中，用逗号分开，
     	     	}
     	     } 
     	 //echo $string2;
     	 $rows2 = explode("+",$string2);
     	 foreach( $rows2 as $k=>$v){   
                if( !$v )   
                unset( $rows2[$k] );
         }   
     	 //print_r($rows2);
     	 
		 $count1 = count($rows2); 
	     $n=rand(0,$count1-1);
         $infoid = $rows2[$n];
         $sql = "select * from math where id= '$infoid' ";
         $result= mysql_query($sql,$conn);
         $info = mysql_fetch_array($result,MYSQL_ASSOC);
         
     $id = $info[id];
     $cont = $info[cont];
     
     $array = array($id,$cont);
     $text = implode("#",$array);
     
     echo $text;
?>