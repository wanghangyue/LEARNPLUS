<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
	session_start();
	include 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //网页编码
//mysql_query("set names utf-8");  //数据库编码
$name = $_SESSION[name];

$ok1 = $_SESSION['rankcando'];
$ok2 = $_SESSION['rankcannot'];
$ok3 = $_SESSION['rankachieve'];
$ok4 = $_SESSION['rankkey'];
$ok5 = $_SESSION['rankerror'];

if($ok1){
	 	$sql0 = "select todaycando from test";
        $result0 = mysql_query($sql0,$conn);
     
        while($ok0 = mysql_fetch_array($result0,MYSQL_ASSOC)){
     	$array = explode("+",$ok0[todaycando]);
        $array1 = array_unique($array);
        $string0 = implode("+",$array1);
     	$string .= $string0.'+';
     }
     
     //echo $string;
     $array3 = explode("+",$string);
     $rows0=array();
     foreach ($array3 as $value2){
     	if ($value2 !=''&&$value2 !='0'){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array4 = array_count_values($rows0);
	 ksort($array4);
	 arsort($array4);
	 $array4 = array_keys($array4);
     //print_r($array4);
     $rows3 = $array4;
     $count03 = count($rows3);
	     if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok2){
	 $sql0 = "select todaycannot from test";
        $result0 = mysql_query($sql0,$conn);
     
        while($ok0 = mysql_fetch_array($result0,MYSQL_ASSOC)){
     	$array = explode("+",$ok0[todaycannot]);
        $array1 = array_unique($array);
        $string0 = implode("+",$array1);
     	$string .= $string0.'+';
     }
     
     //echo $string;
     $array3 = explode("+",$string);
     $rows0=array();
     foreach ($array3 as $value2){
     	if ($value2 !=''&&$value2 !='0'){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array4 = array_count_values($rows0);
	 ksort($array4);
	 arsort($array4);
	 $array4 = array_keys($array4);
     //print_r($array4);
     $rows3 = $array4;
     $count03 = count($rows3);
         if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok3){
	 $sql0 = "select todayover from test";
        $result0 = mysql_query($sql0,$conn);
     
        while($ok0 = mysql_fetch_array($result0,MYSQL_ASSOC)){
     	$array = explode("+",$ok0[todayover]);
        $array1 = array_unique($array);
        $string0 = implode("+",$array1);
     	$string .= $string0.'+';
     }
     
     //echo $string;
     $array3 = explode("+",$string);
     $rows0=array();
     foreach ($array3 as $value2){
     	if ($value2 !=''&&$value2 !='0'){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array4 = array_count_values($rows0);
	 ksort($array4);
	 arsort($array4);
	 $array4 = array_keys($array4);
     //print_r($array4);
     $rows3 = $array4;
     $count03 = count($rows3);
		 if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok4){
     	 $sql0 = "select key1 from test";
        $result0 = mysql_query($sql0,$conn);
     
        while($ok0 = mysql_fetch_array($result0,MYSQL_ASSOC)){
     	$array = explode("+",$ok0[key1]);
        $array1 = array_unique($array);
        $string0 = implode("+",$array1);
     	$string .= $string0.'+';
     }
     
     //echo $string;
     $array3 = explode("+",$string);
     $rows0=array();
     foreach ($array3 as $value2){
     	if ($value2 !=''&&$value2 !='0'){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array4 = array_count_values($rows0);
	 ksort($array4);
	 arsort($array4);
	 $array4 = array_keys($array4);
     //print_r($array4);
     $rows3 = $array4;
     $count03 = count($rows3);
		 if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
if ($ok5){
	 	 $sql0 = "select error from test";
        $result0 = mysql_query($sql0,$conn);
     
        while($ok0 = mysql_fetch_array($result0,MYSQL_ASSOC)){
     	$array = explode("+",$ok0[error]);
        $array1 = array_unique($array);
        $string0 = implode("+",$array1);
     	$string .= $string0.'+';
     }
     
     //echo $string;
     $array3 = explode("+",$string);
     $rows0=array();
     foreach ($array3 as $value2){
     	if ($value2 !=''&&$value2 !='0'){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array4 = array_count_values($rows0);
	 ksort($array4);
	 arsort($array4);
	 $array4 = array_keys($array4);
     //print_r($array4);
     $rows3 = $array4;
     $count03 = count($rows3);
		 if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
}
?>

