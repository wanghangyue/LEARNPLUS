<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
	session_start();
	if($_SESSION[name]==''){
	header("Location: login.php");
	}
	include 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //��ҳ����
//mysql_query("set names utf-8");  //���ݿ����
$name = $_SESSION[name];
$backclass = $_SESSION[backclass];
$backlevel = $_SESSION[backlevel];
$backtype = $_SESSION[backtype];
     
	        if($_SESSION[start]){
		        $sql0 = "select cannot from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[cannot];
     //echo $string;
                                             //���ȴ����ݿ��в������������Ŀ���ַ���
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''){
     		$rows0[]=$value2;                  //�������еĿ�Ԫ��ȥ����������ţ����Ч�ʡ�foreach���д������ܷ���
     	}
     }
     $array1 = $rows0;
     //print_r($array1);                         //��Ŀidֵ��Ȼ����ַ�����Ϊ������id����,��ȥ��ȡ��Ψһֵ
     
     $array1count = count($array1);              //ͳ�Ʒֲ�ɶ��������Ժ�array1Ψһֵ������
     //echo "$array1count";                               
     foreach ($array1 as $value){                      //ÿ����Ҫִ������Ĳ���
     	 //echo $value;
     	 $sql1 = "select detail from math where id= '$value'";
	     $result1 = mysql_query($sql1,$conn);
	     $ok1 = mysql_fetch_array($result1,MYSQL_ASSOC);
	     $string1 .= $ok1[detail].',';        //��ÿһ�������е�ֵ��Ҫ����detail��ֵ��Ȼ�����Щ�ö��ŷֿ�����Ϊһ��
	     //echo $string1.'<br />';
	     $string1;                           
    }
         $array2 = explode(",",$string1);    //�Զ��Ų���ַ���Ϊ�����Ϊ��������֪ʶ���ȥ������
         //print_r($array2);
         $array2 = array_reverse ($array2);
         $array2 = array_unique($array2);
         //print_r($array2);
         foreach( $array2 as $k=>$v){   
                if( !$v )   
                unset( $array2[$k] );
         }
         //print_r($array2);   
	     $rows = array();
         foreach ($array2 as $value3){
	     	if ($value3 !=''){
	     		$rows[]=$value3;                  //�������еĿ�Ԫ��ȥ����������ţ����Ч�ʡ�foreach���д������ܷ���
	     	}
	     }
	     $array2 = $rows;
	     $array2count = count($array2);
         //print_r($array2);
         //echo $array2count;                  
                                             //ȥ���������֪ʶ���ʾ�Ľ������֪ʶ������
         /*�������Ҫ�Ѳ������Ŀ���漰����֪ʶ���ҳ�����֪ʶ�����ҳ��������ظ���д��һ������Ӧ���ǽ�Ϊ
          * ����Ľ����������������������е�ֵ��ÿ���е�detail��ƥ�䣬�������ѭ����Ӧ�ý�����*/
         
	     $sql = "select id,detail from math where detail != ''";
	     $result = mysql_query($sql,$conn);
	     $count=mysql_num_rows($result); 
	     //echo $count;
	     $rows1= array();
	     while ($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
		      $rows1[]= $rows;
	     }
	     foreach ($rows1 as $value){
	     	$rows1[] = $value;
	     }
	     //print_r($rows1);
	     $count = count($rows1);
	     foreach ($array2 as $value){
     	      for ($i = 1; $i <$count ; $i++){
     	     	if (stristr($rows1[$i][detail],$value))        //ÿ����������֪ʶ�����ѯÿ�����֪ʶ���ַ���ƥ�䣬�����Լ����Լ�ƥ������Ӧ�õ�
     	     	{
     	     	$string2 .= $rows1[$i][id].',';               //�浽�ַ����У��ö��ŷֿ���
     	     	}
     	     }                    
         }
         //echo $string2;
         $rows5 = explode(",",$string2);               
         $rows5 = array_unique($rows5);                     
         //print_r($rows5); 
         $rows3 = array();
         foreach ($rows5 as $value){
         	if($value!=''){
         	$rows3[] = $value;
         	}
         }   
         $count03 = count($rows3);
         if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         }
         //print_r($rows3);
//��ѯ���벻���֪ʶ�����Ӧ����Ŀ������һ����ֵ�Ե��������飬�Ժ���Ƕ�����Ĳ�����
	        	     if($backclass !=''&& $backlevel !=''&& $backtype !=''){
	     	foreach ($rows3 as $value){
			     		$sql2 = "select id,class from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
	                    $result2 = mysql_query($sql2,$conn);
	                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
	                    if(stristr($ok3['class'],$backclass)){
	                    	$string4 .= $ok3[id].','; 
	                    }
			     	}
			     	$rows7 = explode(",",$string4);
			     	$rows7 = array_unique($rows7);
			     	//print_r($rows7);   
			        foreach( $rows7 as $k=>$v){   
		                if( !$v )   
		                unset( $rows7[$k] );
		            }
		            //print_r($rows7); 
		            $rows3 = $rows7;
		            //print_r($rows3);
		            foreach ($rows3 as $value){
				     		$sql2 = "select id,level from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
		                    $result2 = mysql_query($sql2,$conn);
		                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
			                    if(stristr($ok3['level'],$backlevel)){
			                    	$string5 .= $ok3[id].','; 
			                        }
						     	}
						    //echo  $string4;
					     	$rows7 = explode(",",$string5);
					     	$rows7 = array_unique($rows7);
					     	//print_r($rows7);   
					        foreach( $rows7 as $k=>$v){   
				                if( !$v )   
				                unset( $rows7[$k] );
				            }
				            //print_r($rows7); 
				            $rows3 = $rows7;
				            //print_r($rows3);
				            foreach ($rows3 as $value){
						     		$sql2 = "select id,type from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
				                    $result2 = mysql_query($sql2,$conn);
				                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
					                    if(stristr($ok3['type'],$backtype)){
					                    	$string6 .= $ok3[id].','; 
					                        }
								     	}
								    //echo  $string4;
							     	$rows7 = explode(",",$string6);
							     	$rows7 = array_unique($rows7);
							     	//print_r($rows7);   
							        foreach( $rows7 as $k=>$v){   
						                if( !$v )   
						                unset( $rows7[$k] );
						            }
						            //print_r($rows7); 
						            $rows3 = $rows7;
						            //print_r($rows3);
						            $count03 = count($rows3);
	     }else {}
	     if ($backclass !=''&& $backlevel !=''){
	     	foreach ($rows3 as $value){
			     		$sql2 = "select id,class from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
	                    $result2 = mysql_query($sql2,$conn);
	                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
	                    if(stristr($ok3['class'],$backclass)){
	                    	$string4 .= $ok3[id].','; 
	                    }
			     	}
			     	$rows7 = explode(",",$string4);
			     	$rows7 = array_unique($rows7);
			     	//print_r($rows7);   
			        foreach( $rows7 as $k=>$v){   
		                if( !$v )   
		                unset( $rows7[$k] );
		            }
		            //print_r($rows7); 
		            $rows3 = $rows7;
		            //print_r($rows3);
		            foreach ($rows3 as $value){
				     		$sql2 = "select id,level from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
		                    $result2 = mysql_query($sql2,$conn);
		                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
			                    if(stristr($ok3['level'],$backlevel)){
			                    	$string5 .= $ok3[id].','; 
			                        }
						     	}
						    //echo  $string4;
					     	$rows7 = explode(",",$string5);
					     	$rows7 = array_unique($rows7);
					     	//print_r($rows7);   
					        foreach( $rows7 as $k=>$v){   
				                if( !$v )   
				                unset( $rows7[$k] );
				            }
				            //print_r($rows7); 
				            $rows3 = $rows7;
				            //print_r($rows3);
				            $count03 = count($rows3);
	     }
	     else{}
	     if($backlevel !=''&& $backtype !=''){
	     	foreach ($rows3 as $value){
				     		$sql2 = "select id,level from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
		                    $result2 = mysql_query($sql2,$conn);
		                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
			                    if(stristr($ok3['level'],$backlevel)){
			                    	$string5 .= $ok3[id].','; 
			                        }
						     	}
						    //echo  $string4;
					     	$rows7 = explode(",",$string5);
					     	$rows7 = array_unique($rows7);
					     	//print_r($rows7);   
					        foreach( $rows7 as $k=>$v){   
				                if( !$v )   
				                unset( $rows7[$k] );
				            }
				            //print_r($rows7); 
				            $rows3 = $rows7;
				            //print_r($rows3);
				            foreach ($rows3 as $value){
						     		$sql2 = "select id,type from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
				                    $result2 = mysql_query($sql2,$conn);
				                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
					                    if(stristr($ok3['type'],$backtype)){
					                    	$string6 .= $ok3[id].','; 
					                        }
								     	}
								    //echo  $string4;
							     	$rows7 = explode(",",$string6);
							     	$rows7 = array_unique($rows7);
							     	//print_r($rows7);   
							        foreach( $rows7 as $k=>$v){   
						                if( !$v )   
						                unset( $rows7[$k] );
						            }
						            //print_r($rows7); 
						            $rows3 = $rows7;
						            //print_r($rows3);
						            $count03 = count($rows3);
	     }
	     else{}
	     if($backclass !=''&& $backtype !=''){
	     	foreach ($rows3 as $value){
			     		$sql2 = "select id,class from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
	                    $result2 = mysql_query($sql2,$conn);
	                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
	                    if(stristr($ok3['class'],$backclass)){
	                    	$string4 .= $ok3[id].','; 
	                    }
			     	}
			     	$rows7 = explode(",",$string4);
			     	$rows7 = array_unique($rows7);
			     	//print_r($rows7);   
			        foreach( $rows7 as $k=>$v){   
		                if( !$v )   
		                unset( $rows7[$k] );
		            }
		            //print_r($rows7); 
		            $rows3 = $rows7;
		            //print_r($rows3);
		              foreach ($rows3 as $value){
						     		$sql2 = "select id,type from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
				                    $result2 = mysql_query($sql2,$conn);
				                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
					                    if(stristr($ok3['type'],$backtype)){
					                    	$string6 .= $ok3[id].','; 
					                        }
								     	}
								    //echo  $string4;
							     	$rows7 = explode(",",$string6);
							     	$rows7 = array_unique($rows7);
							     	//print_r($rows7);   
							        foreach( $rows7 as $k=>$v){   
						                if( !$v )   
						                unset( $rows7[$k] );
						            }
						            //print_r($rows7); 
						            $rows3 = $rows7;
						            //print_r($rows3);
						            $count03 = count($rows3);
	     }
	     else{}
	     if($backclass !=''){
	     	foreach ($rows3 as $value){
			     		$sql2 = "select id,class from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
	                    $result2 = mysql_query($sql2,$conn);
	                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
	                    if(stristr($ok3['class'],$backclass)){
	                    	$string4 .= $ok3[id].','; 
	                    }
			     	}
			     	$rows7 = explode(",",$string4);
			     	$rows7 = array_unique($rows7);
			     	//print_r($rows7);   
			        foreach( $rows7 as $k=>$v){   
		                if( !$v )   
		                unset( $rows7[$k] );
		            }
		            //print_r($rows7); 
		            $rows3 = $rows7;
		            //print_r($rows3);
		            $count03 = count($rows3);
	     }
	     else{}
	     if($backlevel !=''){
	     	foreach ($rows3 as $value){
				     		$sql2 = "select id,level from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
		                    $result2 = mysql_query($sql2,$conn);
		                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
			                    if(stristr($ok3['level'],$backlevel)){
			                    	$string5 .= $ok3[id].','; 
			                        }
						     	}
						    //echo  $string4;
					     	$rows7 = explode(",",$string5);
					     	$rows7 = array_unique($rows7);
					     	//print_r($rows7);   
					        foreach( $rows7 as $k=>$v){   
				                if( !$v )   
				                unset( $rows7[$k] );
				            }
				            //print_r($rows7); 
				            $rows3 = $rows7;
				            //print_r($rows3);
				            $count03 = count($rows3);
	     }
	     else{}
	     if($backtype !=''){
	     	foreach ($rows3 as $value){
						     		$sql2 = "select id,type from math where id = '$value'";    //�����н������ѯ�����ڽ���ƥ��
				                    $result2 = mysql_query($sql2,$conn);
				                    $ok3 = mysql_fetch_array($result2,MYSQL_ASSOC);
					                    if(stristr($ok3['type'],$backtype)){
					                    	$string6 .= $ok3[id].','; 
					                        }
								     	}
								    //echo  $string4;
							     	$rows7 = explode(",",$string6);
							     	$rows7 = array_unique($rows7);
							     	//print_r($rows7);   
							        foreach( $rows7 as $k=>$v){   
						                if( !$v )   
						                unset( $rows7[$k] );
						            }
						            //print_r($rows7); 
						            $rows3 = $rows7;
						            //print_r($rows3);
						            $count03 = count($rows3);
	     }
	     else{}
	}
//��ŵ�һ����ոս���
			else {
	 $sql0 = "select cannot from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[cannot];
     //echo $string;
                                             //���ȴ����ݿ��в������������Ŀ���ַ���
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''){
     		$rows0[]=$value2;                  //�������еĿ�Ԫ��ȥ����������ţ����Ч�ʡ�foreach���д������ܷ���
     	}
     }
     $array1 = $rows0;
     //print_r($array1);                         //��Ŀidֵ��Ȼ����ַ�����Ϊ������id����,��ȥ��ȡ��Ψһֵ
     
     $array1count = count($array1);              //ͳ�Ʒֲ�ɶ��������Ժ�array1Ψһֵ������
     //echo "$array1count";                               
     foreach ($array1 as $value){                      //ÿ����Ҫִ������Ĳ���
     	 //echo $value;
     	 $sql1 = "select detail from math where id= '$value'";
	     $result1 = mysql_query($sql1,$conn);
	     $ok1 = mysql_fetch_array($result1,MYSQL_ASSOC);
	     $string1 .= $ok1[detail].',';        //��ÿһ�������е�ֵ��Ҫ����detail��ֵ��Ȼ�����Щ�ö��ŷֿ�����Ϊһ��
	     //echo $string1.'<br />';
	     $string1;                           
    }
         $array2 = explode(",",$string1);    //�Զ��Ų���ַ���Ϊ�����Ϊ��������֪ʶ���ȥ������
         //print_r($array2);
         $array2 = array_reverse ($array2);
         $array2 = array_unique($array2);
         //print_r($array2);
         foreach( $array2 as $k=>$v){   
                if( !$v )   
                unset( $array2[$k] );
         }
         //print_r($array2);   
	     $rows = array();
         foreach ($array2 as $value3){
	     	if ($value3 !=''){
	     		$rows[]=$value3;                  //�������еĿ�Ԫ��ȥ����������ţ����Ч�ʡ�foreach���д������ܷ���
	     	}
	     }
	     $array2 = $rows;
	     $array2count = count($array2);
         //print_r($array2);
         //echo $array2count;                  
                                             //ȥ���������֪ʶ���ʾ�Ľ������֪ʶ������
         /*�������Ҫ�Ѳ������Ŀ���漰����֪ʶ���ҳ�����֪ʶ�����ҳ��������ظ���д��һ������Ӧ���ǽ�Ϊ
          * ����Ľ����������������������е�ֵ��ÿ���е�detail��ƥ�䣬�������ѭ����Ӧ�ý�����*/
         
	     $sql = "select id,detail from math where detail != ''";
	     $result = mysql_query($sql,$conn);
	     $count=mysql_num_rows($result); 
	     //echo $count;
	     $rows1= array();
	     while ($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
		      $rows1[]= $rows;
	     }
	     foreach ($rows1 as $value){
	     	$rows1[] = $value;
	     }
	     //print_r($rows1);
	     $count = count($rows1);
	     foreach ($array2 as $value){
     	      for ($i = 1; $i <$count ; $i++){
     	     	if (stristr($rows1[$i][detail],$value))        //ÿ����������֪ʶ�����ѯÿ�����֪ʶ���ַ���ƥ�䣬�����Լ����Լ�ƥ������Ӧ�õ�
     	     	{
     	     	$string2 .= $rows1[$i][id].',';               //�浽�ַ����У��ö��ŷֿ���
     	     	}
     	     }                    
         }
         //echo $string2;
         $rows5 = explode(",",$string2);               
         $rows5 = array_unique($rows5);                     
         //print_r($rows5); 
         $rows3 = array();
         foreach ($rows5 as $value){
         	if($value!=''){
         	$rows3[] = $value;
         	}
         } 
         $count03 = count($rows3);  
			if($count03>100){
         	$rows3 = array_slice($rows3,0,100,true);
         } 
         //print_r($rows3);
//��ѯ���벻���֪ʶ�����Ӧ����Ŀ������һ����ֵ�Ե��������飬�Ժ���Ƕ�����Ĳ�����
	     
			}

      
?>