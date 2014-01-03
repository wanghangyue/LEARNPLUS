<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html>
 <head>
  <title>changepass-修改密码</title>
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
 
  <script language="javascript" src="js/changepass.js"></script>
<script language="javascript" src="js/xmlhttprequest.js"></script>

  
  
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

<nav id="nav" style = "text-align:center">
				<ul>
                	<li style="font-size:30px"><a href="index.html?#top">LEARN+PLUS(α版)</a></li>
					
				</ul>
</nav>  
 
<div id="cont">
    	<div id="login">
        	<h3 style="color:#fff;font-size:28px;text-align:center;font-size:bold">修改密码</h3>
        	<div class="field1"><span style="font-size:18px;margin-right:15px" >用&nbsp;户&nbsp;名</span><input id="name" type="text"  /><div   style="float:right;line-height:30px">请输入您的用户名</div></div>
        	<div class="field1"><span style="font-size:18px;margin-right:15px" >验&nbsp;证&nbsp;码</span><input id="yanzheng" type="text"  /><div   style="float:right;line-height:30px">请输入邮件中收到的验证码</div></div>
            <div class="field1"><span style="font-size:18px;margin-right:10px">输入密码</span><input  id="newpass" type="text"    /><div  style="float:right;line-height:30px">输入您的新密码</div></div>
            <div class="field1"><span style="font-size:18px;margin-right:10px">确认密码</span><input  id="confirmpass" type="text"    /><div  style="float:right;line-height:30px">再次输入确认您的新密码</div></div>
				
                <div class="submit"> <button id="step1" type="submit" style = "font-size:14px">提交</button></div>
               
        </div>
</div>

</body>
</html>