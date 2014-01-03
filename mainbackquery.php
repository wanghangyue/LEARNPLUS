<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
	session_start();
	if($_SESSION[name]==''){
	header("Location: login.php");
	}
	include 'conn/conn1.php';
header("Content-Type:text/html;charset=gbk");  //网页编码
//mysql_query("set names utf-8");  //数据库编码
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
                                             //首先从数据库中查出不会做的题目的字符串
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array1 = $rows0;
     //print_r($array1);                         //题目id值，然后把字符串拆开为独立的id数组,并去重取得唯一值
     
     $array1count = count($array1);              //统计分拆成独立数字以后array1唯一值的数量
     //echo "$array1count";                               
     foreach ($array1 as $value){                      //每个都要执行下面的操作
     	 //echo $value;
     	 $sql1 = "select detail from math where id= '$value'";
	     $result1 = mysql_query($sql1,$conn);
	     $ok1 = mysql_fetch_array($result1,MYSQL_ASSOC);
	     $string1 .= $ok1[detail].',';        //对每一个数组中的值都要查其detail的值，然后把这些用逗号分开，融为一体
	     //echo $string1.'<br />';
	     $string1;                           
    }
         $array2 = explode(",",$string1);    //以逗号查分字符串为数组成为含有所有知识点的去重数组
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
	     		$rows[]=$value3;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
	     	}
	     }
	     $array2 = $rows;
	     $array2count = count($array2);
         //print_r($array2);
         //echo $array2count;                  
                                             //去重数组后获得知识点表示的结果集和知识点条数
         /*上面就是要把不会的题目的涉及到的知识点找出来，知识点编号找出来，不重复的写入一个数组应该是较为
          * 满意的结果，后面再在用这个数组中的值与每题中的detail相匹配，而且这个循环就应该结束了*/
         
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
     	     	if (stristr($rows1[$i][detail],$value))        //每个不会做的知识点与查询每道题的知识点字符串匹配，而且自己和自己匹配上是应该的
     	     	{
     	     	$string2 .= $rows1[$i][id].',';               //存到字符串中，用逗号分开，
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
//查询出与不会的知识点相对应的题目，出来一个键值对递增的数组，以后就是对这个的操作了
	        	     if($backclass !=''&& $backlevel !=''&& $backtype !=''){
	     	foreach ($rows3 as $value){
			     		$sql2 = "select id,class from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
				     		$sql2 = "select id,level from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
						     		$sql2 = "select id,type from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
			     		$sql2 = "select id,class from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
				     		$sql2 = "select id,level from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
				     		$sql2 = "select id,level from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
						     		$sql2 = "select id,type from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
			     		$sql2 = "select id,class from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
						     		$sql2 = "select id,type from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
			     		$sql2 = "select id,class from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
				     		$sql2 = "select id,level from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
						     		$sql2 = "select id,type from math where id = '$value'";    //把所有结果都查询出来在进行匹配
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
//这才第一大板块刚刚结束
			else {
	 $sql0 = "select cannot from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[cannot];
     //echo $string;
                                             //首先从数据库中查出不会做的题目的字符串
     $array = explode("+",$string);
     $array1 = array_unique($array);
     $rows0=array();
     foreach ($array1 as $value2){
     	if ($value2 !=''){
     		$rows0[]=$value2;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
     	}
     }
     $array1 = $rows0;
     //print_r($array1);                         //题目id值，然后把字符串拆开为独立的id数组,并去重取得唯一值
     
     $array1count = count($array1);              //统计分拆成独立数字以后array1唯一值的数量
     //echo "$array1count";                               
     foreach ($array1 as $value){                      //每个都要执行下面的操作
     	 //echo $value;
     	 $sql1 = "select detail from math where id= '$value'";
	     $result1 = mysql_query($sql1,$conn);
	     $ok1 = mysql_fetch_array($result1,MYSQL_ASSOC);
	     $string1 .= $ok1[detail].',';        //对每一个数组中的值都要查其detail的值，然后把这些用逗号分开，融为一体
	     //echo $string1.'<br />';
	     $string1;                           
    }
         $array2 = explode(",",$string1);    //以逗号查分字符串为数组成为含有所有知识点的去重数组
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
	     		$rows[]=$value3;                  //把数组中的空元素去掉，避免干扰，提高效率。foreach配合写入数组很方便
	     	}
	     }
	     $array2 = $rows;
	     $array2count = count($array2);
         //print_r($array2);
         //echo $array2count;                  
                                             //去重数组后获得知识点表示的结果集和知识点条数
         /*上面就是要把不会的题目的涉及到的知识点找出来，知识点编号找出来，不重复的写入一个数组应该是较为
          * 满意的结果，后面再在用这个数组中的值与每题中的detail相匹配，而且这个循环就应该结束了*/
         
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
     	     	if (stristr($rows1[$i][detail],$value))        //每个不会做的知识点与查询每道题的知识点字符串匹配，而且自己和自己匹配上是应该的
     	     	{
     	     	$string2 .= $rows1[$i][id].',';               //存到字符串中，用逗号分开，
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
//查询出与不会的知识点相对应的题目，出来一个键值对递增的数组，以后就是对这个的操作了
	     
			}

      
?>