<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //网页编码
//mysql_query("set names utf-8");  //数据库编码
$class = $_SESSION['class01'];
 switch($class)
						{
						case "函数、极限、连续":
							$class = "A";
						  break;
						case '一元函数微分学':
							$class = "B";
						  break;
						case '一元函数积分学':
							$class = "C";
						  break;
						case '向量代数和空间解析几何':
							$class = "D";
						  break;
						case '多元函数微分学':
							$class = "E";
						  break;
						case '多元函数积分学':
							$class = "F";
						  break;
						case '无穷级数':
							$class = "G";
						  break;
						case '常微分方程':
							$class = "H";
						  break;
						case '行列式':
							$class = "I";
						  break;
						case '矩阵':
							$class = "J";
						  break;
						case '向量':
							$class = "K";
						  break;
						case '线性方程组':
							$class = "L";
						  break;
						case '矩阵的特征值和特征向量':
						    $class = "M";
						  break;
						case '二次型':
							$class = "N";
						  break;
						case '随机事件和概率':
							$class = "O";
						  break;
						case '随机变量及其分布':
							$class = "P";
						  break;
						case '多维随机变量及其分布':
							$class = "Q";
						  break;
						case '随机变量的数字特征':
							$class = "R";
						  break;
						case '大数定律和中心极限定理':
							$class = "S";
						  break;
						case '数理统计的基本概念':
							$class = "T";
						  break;
						case '参数估计':
							$class = "U";
						  break;
						case '假设检验':
							$class = "V";
						}
     
     	 $sql = "select id,class as class2 from math where class != ''";
	     $result= mysql_query($sql,$conn);
	     $count = mysql_num_rows($result);
	     //echo $count;
         $rows=array();
	     while ($rows1 = mysql_fetch_array($result,MYSQL_ASSOC)){
		      $rows[]= $rows1;
	     }
	     //print_r($rows);
	     for ($i = 0; $i <$count ; $i++){
     	     	if (stristr($rows[$i][class2],$class))        //每个不会做的知识点与查询每道题的知识点字符串匹配，而且自己和自己匹配上是应该的
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

?>
