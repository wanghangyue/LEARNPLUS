<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
	session_start();
	if($_SESSION[name]==''){
	header("Location: login.php");
	}
	include 'conn/conn1.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>checkkeysshow</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />

<meta name="Generator" content="EditPlus">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
<link rel="stylesheet" href="css/xmlhttprequest.css" />
<link rel="stylesheet" href="css/main1.css" />
<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/clock.css" />

<script type="text/javascript" src="mathjax.js"></script>
<script type="text/javascript" src="mathjax2.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
   
   <script id="jquery_172" type="text/javascript" class="library" src="js/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="js/xdh_ajax.js"></script>
   <script type="text/javascript" src="js/jQuery.rTabs.js"></script>

<script language="javascript" type="text/javascript">
var ajax = new xdh_ajax(10,'ajax');
function update(_obj){
    var id2 = _obj.responseText;
        var url = "checkkeysshow.php?id="+id2;
        if(id2 > 0){
        	location = url;
        }
        else {alert(
        '您已经完成本次反馈所有题目，点击确定回到反馈主页进行其他操作');
		location = "checkkeys.php";
		}
	}
function cross(){
 ajax.query('GET','checkkeyscross.php?id='+$$('id').innerHTML,update);
}
</script>    

<script language="javascript" type="text/javascript">
var ajax4 = new xdh_ajax(10,'ajax4');
function update4(_obj){
	 var id2 = _obj.responseText;
     var url = "checkkeysshow.php?id="+id2;
     if(id2 > 0){
     	location = url;
     }
     else {alert(
     '您已经返回第一题，点击确定回到反馈主页进行其他操作');
		location = "checkkeys.php";
	 }
}
function last(){

 ajax4.query('GET','checkkeyslast.php?id='+$$('id').innerHTML,update4);
}
</script>
<script language="javascript" type="text/javascript">
var ajax7 = new xdh_ajax(10,'ajax4');
function update7(_obj){
	url = location.href; //把当前页面的地址赋给变量 url 
    var times = url.split("?"); //分切变量 url 分隔符号为 "?" 
    if(times[1] != 1){ //如果?后的值不等于1表示没有刷新 
    url += "?1"; //把变量 url 的值加入 ?1 
    self.location.replace(url); //刷新页面 
    } 
    else if(times[1] == 1){ //如果?后的值不等于1表示没有刷新 
    url += ""; //把变量 url 的值加入 ?1 
    self.location.replace(url); //刷新页面 
    } 
}
function loadjs(){
ajax7.query('GET','loadjs.php',update7);
}
</script>

		<script type="text/javascript">
			$(function() {

			$("#tab2").rTabs({
			bind : 'click',
			animation : 'left'
		    });

			})
		</script>
<style>
body{background-color: rgb(220, 220, 220) }
</style>

</head>
<body id = "body">

<nav id="nav" style="text-align:center">
				<ul >
			<div id="timer_controls" id="last" onclick="last()" >
				<label >上一题</label>
			</div>
			<div id="timer_controls" id="last" onclick="location='checkkeys.php';" >
				<label >返回</label>
			</div> 
			<div id="timer_controls" id="cross" onclick="cross()" >
				<label >下一题</label>
			</div> 
			
				</ul>
</nav>  
<div style="margin-top:100px"></div>

		<div class="tab" id="tab2">
			<div class="tab-nav j-tab-nav">
				<a href="javascript:void(0);" class="current">反馈题目</a>
				<a href="javascript:void(0);" >题目解析</a>
				<a href="javascript:void(0);" >知识映射</a>
				<a href="javascript:void(0);" >题目信息</a>
			</div>
			<?php 
$currentid = $_GET[id];
$result=mysql_query("select * from math where id = '$currentid'",$conn);
$rs=mysql_fetch_object($result);
                                $id=$rs->id;
                                $cont=$rs->cont;
                                $anwser=$rs->anwser;
                                $class=$rs->class;
                                $level=$rs->level;
                                $type=$rs->type;
                                $detail=$rs->detail;
?>			
			
			<div class="tab-con">
				<div class="j-tab-con">
					<div class="tab-con-item" style="display:block;">
					  <div class="cont10"  id="cont10">  
					<?php echo $cont ?>
					  </div> 
					</div>  
					<div class="tab-con-item" >
					  <div class="analy" id="analy" >  
					<?php echo $anwser ?>
					  </div> 
					</div>
					<div class="tab-con-item" >
					  <div id="kpoint" class="analy">  
					<?php 
					$array88 = explode(",",$detail);
				       foreach ($array88 as $value){
				       	    $result88=mysql_query("select kpoint from kpdetail where id = '$value'",$conn);
				       	    $detail88 = mysql_fetch_array($result88,MYSQL_ASSOC);
				       	    $kpstr .= $detail88[kpoint].'<br/>';
				       }                        
       				echo $kpstr;
       				?>
                     </div> 
					</div>
					
					<div class="tab-con-item"  >
					   <div class="content">
					       <div class="info" >
					       题号：<div class="detail" id="id"><?php echo $id ?></div>
					       </div>
					       <div class="info">
					       分类：<div class="detail" id="class"><?php 
			$class01 = explode(",",$class);
	     	$count02 = count($class01);
	     	for($i = 0;$i< $count02;$i++){
     	    switch($class01[$i])
						{
						case "A":
							$class03 = '函数、极限、连续';
						  break;
						case "B":
							$class03 = '一元函数微分学';
						  break;
						case "C":
							$class03 = '一元函数积分学';
						  break;
						case "D":
							$class03 = '向量代数和空间解析几何';
						  break;
						case "E":
							$class03 = '多元函数微分学';
						  break;
						case "F":
							$class03 = '多元函数积分学';
						  break;
						case "G":
							$class03 = '无穷级数';
						  break;
						case "H":
							$class03 = '常微分方程';
						  break;
						case "I":
							$class03 = '行列式';
						  break;
						case "J":
							$class03 = '矩阵';
						  break;
						case "K":
							$class03 = '向量';
						  break;
						case "L":
							$class03 = '线性方程组';
						  break;
						case "M":
							$class03 = '矩阵的特征值和特征向量';
						  break;
						case "N":
							$class03 = '二次型';
						  break;
						case "O":
							$class03 = '随机事件和概率';
						  break;
						case "P":
							$class03 = '随机变量及其分布';
						  break;
						case "Q":
							$class03 = '多维随机变量及其分布';
						  break;
						case "R":
							$class03 = '随机变量的数字特征';
						  break;
						case "S":
							$class03 = '大数定律和中心极限定理';
						  break;
						case "T":
							$class03 = '数理统计的基本概念';
						  break;
						case "U":
							$class03 = '参数估计';
						  break;
						case "V":
							$class03 = '假设检验';
						  break;
						}
		 $string01 .= $class03.',';
     }
     $class=$string01;echo $class; ?></div>
					       </div>
					       <div class="info">
					       难度：<div class="detail" id="level"><?php 
					       switch($level)
						{
						case A:
							$level = '一';
						  break;
						case B:
							$level = '二';
						  break;
						case C:
							$level = '三';
						  break;
						case D:
							$level = '四';
						  break;
						case E:
							$level = '五';
						  break;
					
						}echo $level; ?></div>
					       </div>
					       <div class="info">
					       题型：<div class="detail" id="type"><?php 
		   $type = explode(",",$type);
           $count02 = count($type);
           for($i = 0;$i< $count02;$i++){
     	   switch($type[$i])
     	   {
						case A:
							$type03 = '选择题';
						  break;
						case B:
							$type03 = '填空题';
						  break;
						case C:
							$type03 = '解答题';
						  break;
						case D:
							$type03 = '证明题';
						  break;
						}	
						$string02 .= $type03.',';
           }
           $type=$string02;echo $type; ?></div>
					       </div>
					       
					   </div>
				    </div>
					
				</div>
			</div>
        </div>
        
</body>
</html>