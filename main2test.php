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
<title>main2test</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />

<meta name="Generator" content="Eclips">
<meta name="Author" content="Shi Yuming">
<meta name="Keywords" content="测试反馈交互,个性化,逆向学习,大数据,考研,数字化备考,考研题库,智能学习,在线学习">
<meta name="Description" content="LEARN+PLUS通过测试反馈交互学习，科学合理的知识点构建，呈现个性化的复习内容，使用逆向的学习过程，使个人数据归类整理，大数据资料提取将更高效地助力考研！">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
<link rel="stylesheet" href="css/xmlhttprequest.css" />
<link rel="stylesheet" href="css/main1.css" />
<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/clock.css" />

   <script id="jquery_172" type="text/javascript" class="library" src="js/jquery-1.7.2.min.js"></script> 
   <script type="text/javascript" src="js/xdh_ajax.js"></script>
   <script type="text/javascript" src="js/jQuery.rTabs.js"></script>
   
<script language="javascript" type="text/javascript">
var ajax1 = new xdh_ajax(5,'ajax1');
function update1(_obj){
	var cont = _obj.responseText.split("#");
		$$('class').innerHTML = cont[0];
		$$('level').innerHTML = cont[1];
		$$('type').innerHTML = cont[2];
		
}
function query2(){
 ajax1.query('GET','main1teststartresponse.php?id='+$$('id').innerHTML,update1);
}   
</script>

<script language="javascript" type="text/javascript">
var ajax = new xdh_ajax(5,'ajax');
function update(_obj){
	 
	var head = document.getElementsByTagName('head')[0];
	var obj1 = document.createElement('script');
	obj1.type = 'text/javascript';
	obj1.src = 'js/mathjax.js';
	head.appendChild(obj1);
	var obj2 = document.createElement('script');
	obj1.id = 'obj1';
	obj2.type = 'text/javascript';
	obj2.src = 'mathjax2.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML.js';
	obj2.id = 'obj2';
	head.appendChild(obj2);
	
     var cont = _obj.responseText.split("#");
     if(cont[0] ==""){
	      alert("暂时没有此类题目，我们正在努力制作中,点击确定重新选择");
	      location='main.php';  
	 }
	 $$('cont10').innerHTML = cont[1];
	 $$('id').innerHTML = cont[0];
	 $$('anwser').innerHTML = cont[2];
	 
}
function query1(){
 ajax.query('GET','main2teststartresponse.php',update);
}
</script>
<script language="javascript" type="text/javascript">
var ajax2 = new xdh_ajax(5,'ajax2');
function update2(_obj){

}
function query3(){
 ajax2.query('GET','main1testcannotresponse.php?id='+$$('id').innerHTML,update2);
}
</script>

<script language="javascript" type="text/javascript">
var ajax3 = new xdh_ajax(5,'ajax3');
function update3(_obj){
	
}
function cando(){

 ajax3.query('GET','main1testcandoresponse.php?id='+$$('id').innerHTML,update3);
}
</script>
<script language="javascript" type="text/javascript">
var ajax4 = new xdh_ajax(5,'ajax4');
function update4(_obj){
		if(_obj.responseText=="1"){
			alert('点击确定完成本轮测试并进入反馈页面');
			location='mainback.php';
		}
		else if(_obj.responseText=="0"){
			alert('您在本轮测试中没有不会做的题目，系统无法反馈，点击确定回到功能主页进行其他操作');
			location='main.php';  
		}
}
function end(){

 ajax4.query('GET','main1testendresponse.php?id='+$$('id').innerHTML,update4);
}
</script>
<script language="javascript" type="text/javascript">
var ajax5 = new xdh_ajax(5,'ajax5');
function update5(_obj){
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
 ajax5.query('GET','loadjs.php',update5);
}   
</script>
<script language="javascript" type="text/javascript">
var ajax6 = new xdh_ajax(7,'ajax6');
function update6(_obj){
	if(_obj.responseText=="ok"){
		alert('已经把本题标为重点');
	}
}
function key(){
 ajax6.query('GET','mainbackshowkey.php?id='+$$('id').innerHTML,update6);
}
</script>

<script language="javascript" type="text/javascript">
var ajax7 = new xdh_ajax(7,'ajax7');
function update7(_obj){
	if(_obj.responseText=="ok"){
		alert('已经把本题加入错题本');
	}
}
function error(){

 ajax7.query('GET','mainbackshowerror.php?id='+$$('id').innerHTML,update7);
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
<body onload="query1()">
<nav id="nav" style = "text-align:center">
				<ul >
		    <div id="timer_controls" id="cando" onclick="location='main.php'" >
				<label for="cando1">返回</label>
			</div>
			<div id="timer_controls" id="cando" onclick="cando()" >
				<label for="cando1">会做</label>
			</div> 
			<div id="timer_controls" id="cannot"  onclick="query3()" >
				<label  for="cannot1">不会做</label>
			</div> 
			<div id="timer_controls" id="key"  onclick="key()" >
				<label >重点</label>
			</div> 
			<div id="timer_controls"  id="error"  onclick="error()">
			    <label >错题</label>
			</div>
			<div id="timer_controls"  id="end"  onclick="end()">
			    <label for="end">结束</label>
			</div>
				</ul>
</nav>  
<div style="margin-top:100px"></div>

		<div class="tab" id="tab2">
			<div class="tab-nav j-tab-nav">
				<a href="javascript:void(0);" class="current">检测题目</a>
				<a href="javascript:void(0);" id="detailinfo" onclick="query2()">题目信息</a>
				
					    <div id="id1" style="display:none"></div>
			</div>
			<div class="tab-con">
				<div class="j-tab-con">
					<div class="tab-con-item" style="display:block;">
					  <div class="cont10" id="cont10" >  
					
					  </div> 
					</div>
					<div class="tab-con-item"  >
					   <div class="content">
					       <div class="info" >
					       题号：<div class="detail" id="id"></div>
					       </div>
					       <div class="info">
					       分类：<div class="detail" id="class"></div>
					       </div>
					       <div class="info">
					       难度：<div class="detail" id="level"></div>
					       </div>
					       <div class="info">
					       题型：<div class="detail" id="type"></div>
					       </div>
					       <div class="info">
					       答案：<div class="detail" id="anwser"></div>
					       </div>
					       
					   </div>
				    </div>
					
				</div>
			</div>
        </div>
<button type="radio" id="cando1" style="display:none" onclick="loadjs()"/>
<button type="radio" id="cannot1" style="display:none" onclick="loadjs()"/>

</body>
</html>