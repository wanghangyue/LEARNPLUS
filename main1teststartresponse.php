<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
header("Content-Type:text/html;charset=utf8");  //网页编码
mysql_query("set names utf-8");  //数据库编码
$class = $_SESSION['class'];
$id = $_GET[id];


     $sql = "select * from math where id= '$id'";
     $result = mysql_query($sql,$conn);
     $info = mysql_fetch_array($result,MYSQL_ASSOC);
     $level = $info[level];
     $class01 = explode(",",$info['class']);
     $type02 = explode(",",$info[type]);
     mysql_close($conn);
     $count01 = count($class01);
     for($i = 0;$i< $count01;$i++){
     	switch($class01[$i])
						{
						case "A":
							$info['class'] = '函数、极限、连续';
						  break;
						case "B":
							$info['class'] = '一元函数微分学';
						  break;
						case "C":
							$info['class'] = '一元函数积分学';
						  break;
						case "D":
							$info['class'] = '向量代数和空间解析几何';
						  break;
						case "E":
							$info['class'] = '多元函数微分学';
						  break;
						case "F":
							$info['class'] = '多元函数积分学';
						  break;
						case "G":
							$info['class'] = '无穷级数';
						  break;
						case "H":
							$info['class'] = '常微分方程';
						  break;
						case "I":
							$info['class'] = '行列式';
						  break;
						case "J":
							$info['class'] = '矩阵';
						  break;
						case "K":
							$info['class'] = '向量';
						  break;
						case "L":
							$info['class'] = '线性方程组';
						  break;
						case "M":
							$info['class'] = '矩阵的特征值和特征向量';
						  break;
						case "N":
							$info['class'] = '二次型';
						  break;
						case "O":
							$info['class'] = '随机事件和概率';
						  break;
						case "P":
							$info['class'] = '随机变量及其分布';
						  break;
						case "Q":
							$info['class'] = '多维随机变量及其分布';
						  break;
						case "R":
							$info['class'] = '随机变量的数字特征';
						  break;
						case "S":
							$info['class'] = '大数定律和中心极限定理';
						  break;
						case "T":
							$info['class'] = '数理统计的基本概念';
						  break;
						case "U":
							$info['class'] = '参数估计';
						  break;
						case "V":
							$info['class'] = '假设检验';
						  break;
						}
		 $string01 .= $info['class'].',';
     }
     $info['class']=$string01;
      
     switch($level)
						{
						case A:
							$info[level] = '难度一';
						  break;
						case B:
							$info[level] = '难度二';
						  break;
						case C:
							$info[level] = '难度三';
						  break;
						case D:
							$info[level] = '难度四';
						  break;
						case E:
							$info[level] = '难度五';
						  break;
						}
	 $count02 = count($type02);
     for($i = 0;$i< $count02;$i++){
     	switch($type02[$i])
     	{
						case A:
							$info[type] = '选择题';
						  break;
						case B:
							$info[type] = '填空题';
						  break;
						case C:
							$info[type] = '解答题';
						  break;
						case D:
							$info[type] = '证明题';
						  break;
						}	
						$string02 .= $info[type].',';
     }
     $info[type]=$string02;
						
	   
								
    /* $info1[0]=$info[id];
     $info1[1]=$info['class'];
     $info1[2]=$info[level];
     $info1[3]=$info[type];*/
        /*$info[id] = urlencode( $info[id]);
        $info['class'] = urlencode( $info['class'] );
        $info[level] = urlencode( $info[level] );
        $info[type] = urlencode( $info[type] ); */
  
     //$info = json_encode($info);

     $infook = array($info['class'],$info[level],$info[type]);
     //print_r($infook);
	 $text = implode("#",$infook);
     //echo json_encode($infook) ; 
     echo $text;
     

?>
                        