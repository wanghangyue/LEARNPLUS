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
<title>main-应用首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<meta name="Generator" content="Eclips">
<meta name="Author" content="Shi Yuming">
<meta name="Keywords" content="测试反馈交互,个性化,逆向学习,大数据,考研,数字化备考,考研题库,智能学习,在线学习">
<meta name="Description" content="LEARN+PLUS通过测试反馈交互学习，科学合理的知识点构建，呈现个性化的复习内容，使用逆向的学习过程，使个人数据归类整理，大数据资料提取将更高效地助力考研！">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
<link rel="stylesheet" href="css/xmlhttprequest.css" />
<link rel="stylesheet" href="css/style1.css" />

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/xdh_ajax.js"></script>

<script language="javascript" type="text/javascript">
var ajax1 = new xdh_ajax(9,'ajax1');
function update1(_obj){
		msg = _obj.responseText;
		if(msg == '1'){
			 location = 'main1test.php';
			 
		}else{
			alert(msg);
		}
}
function main1(){
 ajax1.query('GET','main1response.php?class='+$$('fenlei').value,update1);
}   
</script>

<script language="javascript" type="text/javascript">
var ajax = new xdh_ajax(9,'ajax');
function update2(_obj){
	msg = _obj.responseText;
	if(msg == '1'){
		 location = 'main2test.php';
		 
	}else{
		alert(msg);
	}
}
function main2(){
 ajax.query('GET','main2response.php?level='+$$('level').value,update2);
}
</script> 
<script language="javascript" type="text/javascript">
var ajax2 = new xdh_ajax(9,'ajax');
function update0(_obj){
	msg = _obj.responseText;
	if(msg == '1'){
		 location = 'main3test.php';
		 
	}else{
		alert(msg);
	}
}
function main3(){
 ajax2.query('GET','main3response.php?type='+$$('type').value,update0);
}
</script> 

<script language="javascript" type="text/javascript">
var ajax3 = new xdh_ajax(9,'ajax3');
function update3(_obj){
	msg = _obj.responseText;
	if(msg == '1'){
		 location = 'main4test.php';
		 
	}else{
		alert(msg);
	}
}
function main4(){

 ajax3.query('GET','main4response.php?class='+$('class4').value+'&level='+$('level4').value+'&type='+$('type4').value,update3);
}
</script>

<style>
body{background-color: rgb(240, 240, 240)}
</style>

</head>
<script type="text/javascript">
var browser=navigator.appName
var b_version=navigator.appVersion
var version=parseFloat(b_version)
if(browser == "Microsoft Internet Explorer"){
	alert("我们正在努力使网页能够在"+ browser+"内核浏览器上正常使用，但是还需要一些时间，希望您能够理解，如果您使用的不是微软IE浏览器，可以尝试切换浏览器模式改变浏览效果。为取得更好的使用效果，推荐使用火狐（firefox）浏览器，谢谢！")
}
</script>

<body>

<nav id="nav" >
				<ul style= "margin-left:50px">
                	<li style="font-size:30px"><a href="index.html">LEARN+PLUS(α版)</a></li>				
					<li><a href="checkkeys.php">查看重点</a></li>
					<li><a href="checkerror.php">查看错题</a></li>
					<li><a href="todayreview.php">今日回顾</a></li>
					<li><a href="rankpage.php">题目排行</a></li>
                    <li><a href="mainback.php">进入反馈</a></li>
                    <li style="float:right;margin-right:20px;margin-top:14px"><a href="logout.php">退出</a></li>
                    <li style="float:right;margin-right:10px;padding-top:26px;padding-bottom:10px; "><?php echo $_SESSION['name']; ?>|<?php  

 $name = $_SESSION['name'];
 $sql = "select class1 from test where name = '".$name."'";
 $result = mysql_query($sql,$conn);
 $class1 = mysql_fetch_array($result);
 mysql_close($conn);
 switch ($class1[0]){
 	case  "0":
 	echo "考研数学一";
 	break;
 	case  "1":
 	echo "考研数学二";
 	break;
 	case  "2":
 	echo "考研数学三";
 	break;
 	case  "3":
 	echo "考研数学农";
 	break;
 	
 }
 ?></li>
                   
				</ul>
</nav>  

<div  class="wrapper wrapper-style1 wrapper-first" style="padding-top:100px">
    <article class="5grid-layout" id="top">

      <div class="row" >
               
           <div class="clearfix" style=";margin-top :10px">
					
             <div class="box color1">
            	<h11 style="font-size:28px"><img src="images/icon1.png" alt="">分版块复习</h11>
              <div class="inner1" style="line-height:23px" >
              	 <img src="images/main1.png" />
<?php  
if ($class1[0]==0){
	echo "
 			          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			                <option value='D'  > 向量代数和空间解析几何</option> 
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                <option value='G'  > 无穷级数 </option> 
			                <option value='H'  > 常微分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                <option value='O'  > 随机事件和概率 </option>
			                <option value='P'  > 随机变量及其分布 </option>
			                <option value='Q'  > 多维随机变量及其分布 </option>
			                <option value='R'  > 随机变量的数字特征 </option>
			                <option value='S'  > 大数定律和中心极限定理 </option>
			                <option value='T'  > 数理统计的基本概念 </option>
			                <option value='U'  > 参数估计 </option>
			                <option value='V'  > 假设检验 </option> 
			                </select>
			          </div >
			           
			 ";
}
elseif ($class1[0]==1){
	echo "
		              <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			         
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                
			                <option value='H'  > 常微分方程与差分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                 
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==2){
	echo "
		          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			         
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                <option value='G'  > 无穷级数 </option> 
			                <option value='H'  > 常微分方程与差分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                <option value='O'  > 随机事件和概率 </option>
			                <option value='P'  > 随机变量及其分布 </option>
			                <option value='Q'  > 多维随机变量及其分布 </option>
			                <option value='R'  > 随机变量的数字特征 </option>
			                <option value='S'  > 大数定律和中心极限定理 </option>
			                <option value='T'  > 数理统计的基本概念 </option>
			                <option value='U'  > 参数估计 </option>
			                <option value='V'  > 假设检验 </option> 
			               
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==3){
	echo "
		          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			         
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                
			                <option value='H'  > 常微分方程与差分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                <option value='O'  > 随机事件和概率 </option>
			                <option value='P'  > 随机变量及其分布 </option>
			                <option value='Q'  > 多维随机变量及其分布 </option>
			                <option value='R'  > 随机变量的数字特征 </option>
			                <option value='S'  > 大数定律和中心极限定理 </option>
			                <option value='T'  > 数理统计的基本概念 </option>
			                
			               
			               
			               
			                </select>
			          </div>
			            
			 ";         
}
?>   
					 
              <button id="main1btn" class="button1" onclick="main1()"><span></span> 马上进入 </button>
              </div>
          
          	<!-- /.box -->
          </div>
        	
          	<!-- .box -->
          	<div class="box color2">
            	<h11 style="font-size:28px"><img src="images/icon2.png" alt="">分难度复习</h11>
              <div class="inner1" style="line-height:23px">
              	<img src="images/main2.png" />
              	     <div id='select'>
			                 <select name='level' id='level'>
			                 <option value='A'> 难度一</option> 
			                 <option value='B'> 难度二</option>
			                 <option value='C'> 难度三</option>
			                 <option value='D'> 难度四</option>
			                 <option value='E'> 难度五</option> 
			                 </select>
			          </div>
			           
                <button class="button1" onclick = "main2()"><span></span> 马上进入 </button>
              </div>
           
          	<!-- /.box -->
          </div>
        	
          	<!-- .box -->
          	<div class="box color3">
            	<h11 style="font-size:28px"><img src="images/icon3.png" alt="">分题型复习</h11>
              <div class="inner1" style="line-height:23px">
              	 <img src="images/main3.png" />
              	      <div id='select'>
			                 <select name='type' id='type'>
			                 <option value='A'>  选择题</option> 
			                 <option value='B'>  填空题</option>
			                 <option value='C'>  解答题</option> 
			                 <option value='D'>  证明题</option>
			                 </select>
			          </div>
			           
                <button class="button1" onclick = "main3()"><span></span> 马上进入 </button>
              </div>
         
          	<!-- /.box -->
          </div>
        	
          	<!-- .box -->
          	<div class="box color4">
            	<h11 style="font-size:28px"><img src="images/icon4.png" alt="">完全自定义</h11>
              <div class="inner1" style="line-height:24px">
              	<img src="images/main4.png" />
              	<?php  
if ($class1[0]==0){
	echo "
 			          <div id='select'>
			                <select name='class4' id='class4'>
			                <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			                <option value='D'  > 向量代数和空间解析几何</option> 
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                <option value='G'  > 无穷级数 </option> 
			                <option value='H'  > 常微分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                <option value='O'  > 随机事件和概率 </option>
			                <option value='P'  > 随机变量及其分布 </option>
			                <option value='Q'  > 多维随机变量及其分布 </option>
			                <option value='R'  > 随机变量的数字特征 </option>
			                <option value='S'  > 大数定律和中心极限定理 </option>
			                <option value='T'  > 数理统计的基本概念 </option>
			                <option value='U'  > 参数估计 </option>
			                <option value='V'  > 假设检验 </option> 
			                </select>
			          </div >
			           
			 ";
}
elseif ($class1[0]==1){
	echo "
		              <div id='select'>
			                <select name='class4' id='class4'>
			                 <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			         
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                
			                <option value='H'  > 常微分方程与差分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                 
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==2){
	echo "
		          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			         
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                <option value='G'  > 无穷级数 </option> 
			                <option value='H'  > 常微分方程与差分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                <option value='O'  > 随机事件和概率 </option>
			                <option value='P'  > 随机变量及其分布 </option>
			                <option value='Q'  > 多维随机变量及其分布 </option>
			                <option value='R'  > 随机变量的数字特征 </option>
			                <option value='S'  > 大数定律和中心极限定理 </option>
			                <option value='T'  > 数理统计的基本概念 </option>
			                <option value='U'  > 参数估计 </option>
			                <option value='V'  > 假设检验 </option> 
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==3){
	echo "
		          <div id='select'>
			                <select name='class4' id='class4'>
			                <option value='A' selected> 函数、极限、连续 </option> 
			                <option value='B'  > 一元函数微分学 </option> 
			                <option value='C'  > 一元函数积分学 </option> 
			         
			                <option value='E'  > 多元函数微分学 </option> 
			                <option value='F'  > 多元函数积分学 </option> 
			                
			                <option value='H'  > 常微分方程与差分方程 </option>
			                <option value='I'  > 行列式 </option>
			                <option value='J'  > 矩阵 </option>
			                <option value='K'  > 向量 </option>
			                <option value='L'  > 线性方程组 </option>
			                <option value='M'  > 矩阵的特征值和特征向量 </option>
			                <option value='N'  > 二次型 </option>
			                <option value='O'  > 随机事件和概率 </option>
			                <option value='P'  > 随机变量及其分布 </option>
			                <option value='Q'  > 多维随机变量及其分布 </option>
			                <option value='R'  > 随机变量的数字特征 </option>
			                <option value='S'  > 大数定律和中心极限定理 </option>
			                <option value='T'  > 数理统计的基本概念 </option>
			                
			               
			               
			               
			                </select>
			          </div>
			            
			 ";         
}
?> 
                <div id='select'>
			                 <select name='level4' id='level4'>
			                 <option value='A'> 难度一</option> 
			                 <option value='B'> 难度二</option>
			                 <option value='C'> 难度三</option>
			                 <option value='D'> 难度四</option>
			                 <option value='E'> 难度五</option> 
			                 </select>
			   </div>
               <div id='select'>
			                 <select name='type4' id='type4'>
			                 <option value='A'>  选择题</option> 
			                 <option value='B'>  填空题</option>
			                 <option value='C'>  解答题</option> 
			                 <option value='D'>  证明题</option>
			                 </select>
			   </div>	
              	     
                 <button class="button1" onclick = "main4()"><span></span> 马上进入 </button>
          
            </div>
           
        </div>  
     </div>
                 
				</article>
			</div> 
<div style="margin:15px auto auto auto;text-align:center;font-size:18px "><a href="index1.html?#news">
<span style=" text-align:center;font-size:18px;color:#00f;font-weight:bold ">不知道怎么使用？</span></a><span style="width:30px;padding-left:10px;padding-right:10px"></span><a href="index1.html?#contact">
<span style=" text-align:center;font-size:18px;color:#00f;font-weight:bold ">想要更多？</span></a>
</div> 

<!-- JiaThis Button BEGIN -->
<script type="text/javascript" >
var jiathis_config={
	summary:"",
	marginTop:150,
	showClose:false,
	hideMore:false
}
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?type=left&btn=l5.gif&move=1" charset="utf-8"></script>
<!-- JiaThis Button END -->    
</body>
</html>
