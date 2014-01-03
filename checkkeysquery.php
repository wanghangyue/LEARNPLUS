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

if($_SESSION[start1]){
	 $sql0 = "select key1all from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[key1all];
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
else {
	 $sql0 = "select key1all from test where name= '$name'";
     $result0 = mysql_query($sql0,$conn);
     $ok0 = mysql_fetch_array($result0,MYSQL_ASSOC);
     $string = $ok0[key1all];
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
     //print_r($array1);
     $rows3 = $array1;
     $count03 = count($rows3);
   
}
?>

     