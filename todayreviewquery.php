<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //网页编码
//mysql_query("set names utf-8");  //数据库编码
$name = $_SESSION['name'];

$ok1 = $_SESSION['cando'];
$ok2 = $_SESSION['cannot'];
$ok3 = $_SESSION['achieve'];
$ok4 = $_SESSION['key'];
$ok5 = $_SESSION['error'];

if($ok1){
	 $sql0 = "select todaycando from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[todaycando];
     //echo $string;
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''&&$value2 !='0'){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array1 = $rows0;
     $array1 = array_reverse ($array1);
     //print_r($array1);
     $rows3 = $array1;
     $count03 = count($rows3);
         if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok2){
	 $sql0 = "select todaycannot from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[todaycannot];
     //echo $string;
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''&&$value2 !='0'){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array1 = $rows0;
     $array1 = array_reverse ($array1);
     //print_r($array1);
     $rows3 = $array1;
     $count03 = count($rows3);
		 if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok3){
	 $sql0 = "select todayover from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[todayover];
     //echo $string;
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array1 = $rows0;
     $array1 = array_reverse ($array1);
     //print_r($array1);
     $rows3 = $array1;
     $count03 = count($rows3);
		 if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok4){
     $sql0 = "select key1 from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[key1];
     //echo $string;
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array1 = $rows0;
     $array1 = array_reverse ($array1);
     //print_r($array1);
     $rows3 = $array1;
     $count03 = count($rows3);
		 if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok5){
	 $sql0 = "select error from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[error];
     //echo $string;
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array1 = $rows0;
     $array1 = array_reverse ($array1);
     //print_r($array1);
     $rows3 = $array1;
     $count03 = count($rows3);
		 if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
?>