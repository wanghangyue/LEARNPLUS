<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
date_default_timezone_set('Asia/Shanghai');//'Asia/Shanghai'   ����/�Ϻ�
$name = $_SESSION[name];
unset($_SESSION['start']);
unset($_SESSION['start1']);
unset($_SESSION['start2']);
unset($_SESSION['cannot']);
unset($_SESSION['achieve']);
unset($_SESSION['key']);
unset($_SESSION['error']);
unset($_SESSION['cando']);
unset($_SESSION['rankcannot']);
unset($_SESSION['rankcando']);
unset($_SESSION['rankachieve']);
unset($_SESSION['rankerror']);
unset($_SESSION['rankkey']);
$today = date('Y-m-j');
     $sql10 = "select today from test where name= '$name'";
     $result10= mysql_query($sql10,$conn);
     $todayrow = mysql_fetch_array($result10,MYSQL_ASSOC);
     $todaybefore = $todayrow[today]; 
     //echo  "$today";                       //���ԭ����today�ֶ��µ�ֵ���ж������ֵ��Ҫ�Ƚ��ǲ���һ��
     if ($today == $todaybefore) {
			$_SESSION['class4'] = ($_GET['class']);
			$_SESSION['level4'] = ($_GET['level']);
			$_SESSION['type4'] = ($_GET['type']);
			echo "1";
     }
     elseif ($today != $todaybefore){
     	 $sql11 = "update test set today = '".$today."' where name='".$name."'";
		      $ok11 = mysql_query($sql11,$conn);
		      $sql13 = "update test set  cando= '' where name='".$name."'";
		      $ok13 = mysql_query($sql13,$conn);
		      $sql14  = "update test set  cannot= '' where name='".$name."'";
		      $ok14 = mysql_query($sql14,$conn);
		      
		      $sql13 = "update test set  todayover= '' where name='".$name."'";
		      $ok13 = mysql_query($sql13,$conn);
		      $sql16 = "update test set  key1= '' where name='".$name."'";
		      $ok16 = mysql_query($sql16,$conn);
		      $sql17 = "update test set  error= '' where name='".$name."'";
		      $ok17 = mysql_query($sql17,$conn);
		      
		      //�������ں�ȫ����λ����������ȷ��
		        $_SESSION['class4'] = ($_GET['class']);
			    $_SESSION['level4'] = ($_GET['level']);
			    $_SESSION['type4'] = ($_GET['type']);
					echo "1";
		      
     }
?>