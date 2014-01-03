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
<title> application-mainpage </title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />

<meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">

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

<nav id="nav" style="height:75px">
				<ul style="height:75px">
			<div id="timer_controls"  id="end"  onclick="end()">
			    <label for="end">题目检测</label>
			</div>
				</ul>
</nav>  
<div style="margin-top:100px"></div>

		<div class="tab" id="tab2">
			<div class="tab-nav j-tab-nav">
				<a href="javascript:void(0);" class="current">反馈题目</a>
				<a href="javascript:void(0);">题目解析</a>
				<a href="javascript:void(0);">视频讲解</a>
				<a href="javascript:void(0);">题目信息</a>
				<a href="javascript:void(0);">温馨提示</a>
				<a href="javascript:void(0);" style="font-size:12px"><?php echo  $_SESSION['name']; ?></a>
				<a href="javascript:void(0);" style="font-size:12px"><?php 
				switch($_SESSION['class'])
						{
						case 0:
							$_SESSION['class'] = '函数、极限、连续';
						  break;
						case 1:
							$_SESSION['class'] = '一元函数微分学';
						  break;
						case 2:
							$_SESSION['class'] = '一元函数积分学';
						  break;
						case 3:
							$_SESSION['class'] = '向量代数和空间解析几何';
						  break;
						case 4:
							$_SESSION['class'] = '多元函数微分学';
						  break;
						case 5:
							$_SESSION['class'] = '多元函数积分学';
						  break;
						case 6:
							$_SESSION['class'] = '无穷级数';
						  break;
						case 7:
							$_SESSION['class'] = '常微分方程';
						  break;
						case 8:
							$_SESSION['class'] = '行列式';
						  break;
						case 9:
							$_SESSION['class'] = '矩阵';
						  break;
						case 10:
							$_SESSION['class'] = '向量';
						  break;
						case 11:
							$_SESSION['class'] = '线性方程组';
						  break;
						case 12:
							$_SESSION['class'] = '矩阵的特征值和特征向量';
						  break;
						case 13:
							$_SESSION['class'] = '二次型';
						  break;
						case 14:
							$_SESSION['class'] = '随机事件和概率';
						  break;
						case 15:
							$_SESSION['class'] = '随机变量及其分布';
						  break;
						case 16:
							$_SESSION['class'] = '多维随机变量及其分布';
						  break;
						case 17:
							$_SESSION['class'] = '随机变量的数字特征';
						  break;
						case 18:
							$_SESSION['class'] = '大数定律和中心极限定理';
						  break;
						case 19:
							$_SESSION['class'] = '数理统计的基本概念';
						  break;
						case 20:
							$_SESSION['class'] = '参数估计';
						  break;
						case 21:
							$_SESSION['class'] = '假设检验';
						  break;
						}
						echo  $_SESSION['class']; ?></a>
					    <div id="id1" style="display:none"></div>

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
                                $addition=$rs->addition;
                                $vedio=$rs->vedio;
                                setcookie("id", $id);
                                
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
					<div class="tab-con-item"  style="background-color: rgba(131, 183, 162, 0.6);background: rgba(131, 183, 162, 0.6);color: rgba(131, 183, 162, 0.6);">
					  <div class="vedio" id="vedio" style="padding-left:auto;padding-right:auto;padding-top:200px;font-size:45px;color:#969696">  

             </div> 
					</div>
					
					<div class="tab-con-item"  >
					   <div class="content">
					       <div class="info" >
					       题号：<div class="detail" id="id"><?php echo $id ?></div>
					       </div>
					       <div class="info">
					       分类：<div class="detail" id="class"><?php echo $class ?></div>
					       </div>
					       <div class="info">
					       难度：<div class="detail" id="level"><?php echo $level ?></div>
					       </div>
					       <div class="info">
					       题型：<div class="detail" id="type"><?php echo $type ?></div>
					       </div>
					       
					   </div>
				    </div>
					
				</div>
			</div>
        </div>
<div style="text-align:center">
            <input id="start" type="radio" style="display:none"/>
			<input id="end"  type="radio" style="display:none"/>

</div>
</body>
</html>