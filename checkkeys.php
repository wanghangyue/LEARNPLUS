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
<title>checkkeys-查看重点</title>
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
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
extensions: ["tex2jax.js"],
jax: ["input/TeX", "output/HTML-CSS"],
tex2jax: {
inlineMath: [ ['$','$'], ["\\(","\\)"] ],
displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
processEscapes: true
},
"HTML-CSS": { availableFonts: ["TeX"] }
});
</script>
<script type="text/javascript" src="mathjax2.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>

<script language="javascript" type="text/javascript">
var ajax1 = new xdh_ajax(9,'ajax1');
function update1(_obj){
	
}
function keysselect(){
 ajax1.query('GET','checkkeysresponse.php?class='+$$('fenleiselect').value+'&level='+$$('levelselect').value+'&type='+$$('typeselect').value,update1);
}   
</script>

<script language="javascript" type="text/javascript">
var ajax = new xdh_ajax(9,'ajax');
function update2(_obj){
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
function refreshjs(){
 ajax.query('GET','loadjs.php',update2);
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

<nav id="nav">
				<ul>
                	<li style="font-size:30px;margin-left:50px"><a href="index.html">LEARN+PLUS(α版)</a></li>
					<li><a href="main.php">返回首页</a></li>
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
<div style="text-align:center;margin-top:85px;color:#000">
<span style = "padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px; background-color:#E6E6FA;font-size:18px;font-weight:500">查看重点共获得<span style = "color:#ff0000"><?php include 'checkkeysquery.php';echo $count03;?></span>条结果，最多显示<span style = "color:#ff0000">100</span>条，您可以在左边选择反馈分类</span>
 </div>
 
  <div style="margin-top:5px;margin-left:115px;margin-right:115px;padding:5px 5px 10px 0px">
   <div style="width:300px;float:left;padding:5px 5px 5px 5px;text-align:center">
       <div style = "margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:center;font-weight:bold;font-family:宋体">选择重点类型</div>
       <div style = "margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:left;font-weight:bold;font-family:宋体;padding-left:10px">分类
       <?php  
if ($class1[0]==0){
	echo "
 			          <span id='select1'>
			                <select name='class' id='fenleiselect'>
			                <option value='' selected></option> 
			                <option value='A' > 函数、极限、连续 </option> 
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
			          </span >
			           
			 ";
}
elseif ($class1[0]==1){
	echo "
		              <span id='select1'>
			                <select name='class' id='fenleiselect'>
			                <option value='' selected></option> 
			                <option value='A' > 函数、极限、连续 </option> 
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
			          </span>
			           
			 ";         
}
elseif ($class1[0]==2){
	echo "
		          <span id='select1'>
			                <select name='class' id='fenleiselect'>
			                <option value='' selected></option> 
			                <option value='A' > 函数、极限、连续 </option> 
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
			          </span>
			           
			 ";         
}
elseif ($class1[0]==3){
	echo "
		          <span id='select1'>
			                <select name='class' id='fenleiselect'>
			                <option value='' selected></option> 
			                <option value='A' > 函数、极限、连续 </option> 
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
			          </span>
			            
			 ";         
}
?> </div>
       <div style = "margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:left;font-weight:bold;font-family:宋体;padding-left:10px">难度
       <span id='select1'>
			                 <select name='level' id='levelselect'>
			                 <option value=''></option> 
			                 <option value='A'> 难度一</option> 
			                 <option value='B'> 难度二</option>
			                 <option value='C'> 难度三</option>
			                 <option value='D'> 难度四</option>
			                 <option value='E'> 难度五</option> 
			                 </select>
			          </span></div>
       <div style = "margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:left;font-weight:bold;font-family:宋体;padding-left:10px">题型
       <span id='select1'>
			                 <select name='type' id='typeselect'>
			                  <option value=''></option> 
			                 <option value='A'>  选择题</option> 
			                 <option value='B'>  填空题</option>
			                 <option value='C'>  解答题</option> 
			                 <option value='D'>  证明题</option>
			                 </select>
			          </span></div>
	  <label for="refreshjs"><div onclick = "keysselect()" style = "cursor:pointer;margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:left;font-weight:bold;font-family:宋体;padding-left:10px;text-align:center">点击获取重点结果</div></label>
	 
   </div>
  
   <div style="width:690px;float:right;padding:5px 5px 5px 5px;margin-bottom:50px">
       <?php  
  include 'checkkeysquery.php';
  foreach ($rows3 as $value){
	     	$result=mysql_query("select * from math where id = '$value'",$conn);
	     	$rs = mysql_fetch_array($result,MYSQL_ASSOC);
	     	$cont = $rs[cont];
	     	$id = $rs[id];
	     	$type = $rs[type];
	     	$class = $rs['class'];
	     	$level = $rs[level];
	     	$addition = $rs[addition];
	     	
	 ?>    
       <a href="checkkeysshow.php?id=<?php echo $id; ?>">
       <div style = "margin-top:10px;line-height:25px;width:100%;background-color:#FCFCFC;color:#272727;font-size:18px;padding:2px 2px 2px 2px;border-bottom:3px solid #7700ff">
           <div style = "height:auto"><span style = "height:13px;width:13px;background-color:#7700ff;color:#7700ff">MA</span><?php $cont = strtok($cont, "。");echo $cont.'......'; ?></div>
           <div style = "height:25px;font-size:12px;display:inline">题号<span style = "color:#FF2D2D"><?php echo $id; ?></span>  题型 <span style = "color:#FF2D2D">
           <?php 
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
           $type=$string02;echo $type;$string02 = '' ?></span>  分类<span style = "color:#FF2D2D">
           <?php 
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
     $class=$string01;echo $class; $string01 = '';?></span> 难度<span style = "color:#FF2D2D">
     <?php 
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
					
						}echo $level; ?></span>  备注    <span style = "color:#FF2D2D"><?php echo $addition; ?></span></div>
       </div>
       </a><?php 
       }
                mysql_close();
                ?>
   </div>
 </div>
 <input type="radio" id = "refreshjs" onclick = "refreshjs()" style="display:none"></input>  
 
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
<script type="text/javascript" src="js/jquery.1.4.2-min.js"></script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
</body>
</html>