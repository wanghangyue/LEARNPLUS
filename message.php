<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'conn/conn1.php';
header("Content-Type:text/html;charset=gb2312");  //网页编码

 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
 <head>
  <title>message-信息反馈</title>
  <meta name="Generator" content="Eclips">
  <meta name="Author" content="Shi Yuming">
  <meta name="Keywords" content="测试反馈交互,个性化,逆向学习,大数据,考研,数字化备考,考研题库,智能学习,在线学习">
  <meta name="Description" content="LEARN+PLUS通过测试反馈交互学习，科学合理的知识点构建，呈现个性化的复习内容，使用逆向的学习过程，使个人数据归类整理，大数据资料提取将更高效地助力考研！">
  <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/style-desktop.css" />
  <link href="css/style1.css" rel="stylesheet" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js" type="text/javascript"></script>
 
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="js/xmlhttprequest.js"></script>


  
  
 </head>

 <body>
<nav id="nav" style = "text-align:center">
				<ul>
                	<li style="font-size:30px"><a href="index.html">LEARN+PLUS(α版)</a></li>
				</ul>
</nav>  

<div id="cont">
    	<div id="login" style ="text-align:center;font-size:18px">
        	<?php 
        	if($_POST['name']==""&&$_POST['email']==""&&$_POST['subject']==""&&$_POST['message']==""){
        		echo "您还没有填写任何信息，请<a href = 'index1.html?#contact'>返回重新填写</a>，谢谢！";
        	}
        	else{
        		$sql00 = "INSERT INTO `message` VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['message']."')";
            mysql_query("SET NAMES 'UTF8'");
            $num = mysql_query($sql00);
        	if($num!=""){
	              echo "您的反馈信息已经成功提交，谢谢您的指导和建议";
			}
        	}
             
        	?>
        </div>
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