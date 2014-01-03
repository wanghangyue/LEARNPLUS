<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>register-注册页面</title>
  <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
  <meta name="Generator" content="Eclips">
  <meta name="Author" content="Shi Yuming">
  <meta name="Keywords" content="测试反馈交互,个性化,逆向学习,大数据,考研,数字化备考,考研题库,智能学习,在线学习">
  <meta name="Description" content="LEARN+PLUS通过测试反馈交互学习，科学合理的知识点构建，呈现个性化的复习内容，使用逆向的学习过程，使个人数据归类整理，大数据资料提取将更高效地助力考研！">
  <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/style-desktop.css" />
  <link href="css/style1.css" rel="stylesheet" type="text/css" />

  <script id="jquery_172" type="text/javascript" class="library" src="js/jquery-1.7.2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/loading.css" />
   
 
  <script type="text/javascript" src="js/register.js"></script>
  <script type="text/javascript" src="js/xmlhttprequest.js"></script>
 


  
  
 </head>

 <body >
<nav id="nav" style = "text-align:center">
				<ul>
                	<li style="font-size:30px"><a href="index.html">LEARN+PLUS(α版)</a></li>
					
				</ul>
</nav>  


<div id="cont1">
    	<div id="login">
        	<h3 style="color:#fff;font-size:28px;text-align:center;font-size:bold">注册</h3>
        	<div class="field1"><span style="font-size:18px;margin-right:10px" >用<span style="padding-left:10px"></span>户<span style="padding-left:10px"></span>名</span><input id="regname" type="text" name="regname"   /><div id="namediv" style="float:right;line-height:30px">按Enter键确认用户名</div></div>
            <div class="field1"><span style="font-size:18px;margin-right:10px">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span><input  id="regpwd1" type="password" name="regpwd1"   /><div id="pwddiv1" style="float:right;line-height:30px">请输入密码</div></div>
				
        	<div class="field1"><span style="font-size:18px;margin-right:12px" >确认密码</span><input id="regpwd2" type="password" name="regpwd2" value="" /><div id="pwddiv2" style="float:right;line-height:30px">请再次输入密码</div></div>
        	<div class="field1"><span style="font-size:18px;margin-right:12px" >电子邮箱</span><input id="email" type="text" name="email" value="" /> <div id="emaildiv" style="float:right;line-height:30px">用户激活和找回密码使用</div></div>
            <div class="field1">  
           
          <span style="font-size:18px;margin-right:6px" >选择分类 </span>
               <select name="fenlei" id="fenlei">
                <option value="0">  数学一</option> 
                <option value="1">  数学二</option> 
                <option value="2">  数学三</option> 
                <option value="3">  数学农</option> 
                </select>
            <div  style="float:right;line-height:30px">考试类型选择后不可更改</div>
			</div>  
	<div id="floatingBarsG"  style="margin:5px auto 0px auto ;display: none">
		<div class="blockG" id="rotateG_01">
		</div>
		<div class="blockG" id="rotateG_02">
		</div>
		<div class="blockG" id="rotateG_03">
		</div>
		<div class="blockG" id="rotateG_04">
		</div>
		<div class="blockG" id="rotateG_05">
		</div>
		<div class="blockG" id="rotateG_06">
		</div>
		<div class="blockG" id="rotateG_07">
		</div>
		<div class="blockG" id="rotateG_08">
		</div>
	</div>	
            <div class="submit"><button id="regbtn" style = "font-size:14px">注册</button></div>
            <div style="font-size:16px;text-align:center">已经有账号？<a href="login.php">点击登录</a></div>
        </div>
</div>

 </body>
</html>