<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
session_start();
include_once 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //��ҳ����
//mysql_query("set names utf-8");  //���ݿ����
$class = $_SESSION['class01'];
 switch($class)
						{
						case "���������ޡ�����":
							$class = "A";
						  break;
						case 'һԪ����΢��ѧ':
							$class = "B";
						  break;
						case 'һԪ��������ѧ':
							$class = "C";
						  break;
						case '���������Ϳռ��������':
							$class = "D";
						  break;
						case '��Ԫ����΢��ѧ':
							$class = "E";
						  break;
						case '��Ԫ��������ѧ':
							$class = "F";
						  break;
						case '�����':
							$class = "G";
						  break;
						case '��΢�ַ���':
							$class = "H";
						  break;
						case '����ʽ':
							$class = "I";
						  break;
						case '����':
							$class = "J";
						  break;
						case '����':
							$class = "K";
						  break;
						case '���Է�����':
							$class = "L";
						  break;
						case '���������ֵ����������':
						    $class = "M";
						  break;
						case '������':
							$class = "N";
						  break;
						case '����¼��͸���':
							$class = "O";
						  break;
						case '�����������ֲ�':
							$class = "P";
						  break;
						case '��ά�����������ֲ�':
							$class = "Q";
						  break;
						case '�����������������':
							$class = "R";
						  break;
						case '�������ɺ����ļ��޶���':
							$class = "S";
						  break;
						case '����ͳ�ƵĻ�������':
							$class = "T";
						  break;
						case '��������':
							$class = "U";
						  break;
						case '�������':
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
     	     	if (stristr($rows[$i][class2],$class))        //ÿ����������֪ʶ�����ѯÿ�����֪ʶ���ַ���ƥ�䣬�����Լ����Լ�ƥ������Ӧ�õ�
     	     	{
     	     	$string2 .= $rows[$i][id].'+';               //�浽�ַ����У��ö��ŷֿ���
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
