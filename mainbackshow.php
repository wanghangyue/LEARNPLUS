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
<title>mainbackshow</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />

<meta name="Generator" content="Eclips">
<meta name="Author" content="Shi Yuming">
<meta name="Keywords" content="���Է�������,���Ի�,����ѧϰ,������,����,���ֻ�����,�������,����ѧϰ,����ѧϰ">
<meta name="Description" content="LEARN+PLUSͨ�����Է�������ѧϰ����ѧ�����֪ʶ�㹹�������ָ��Ի��ĸ�ϰ���ݣ�ʹ�������ѧϰ���̣�ʹ�������ݹ�������������������ȡ������Ч���������У�">
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
        var url = "mainbackshow.php?id="+id2;
        if(id2 > 0){
        	location = url;
        }
        else {alert(
        '���Ѿ���ɱ��η���������Ŀ�����ȷ���ص�������ҳ������������');
		location = "mainback.php";
		}
	}
function cross(){
 ajax.query('GET','mainbackshowcross.php?id='+$$('id').innerHTML,update);
}
</script>    
   
<script language="javascript" type="text/javascript">
var ajax1 = new xdh_ajax(10,'ajax1');
function update1(_obj){
	var id2 = _obj.responseText;
    var url = "mainbackshow.php?id="+id2;
    if(id2 > 0){
        alert ("�Ѿ���ɱ��⣬���ȷ��������һ��");
    	location = url;
    }
    else {
    alert('���Ѿ���ɱ��η���������Ŀ�����ȷ���ص�������ҳ������������');
    location = "mainback.php";
	}
}
function achieve(){
 ajax1.query('GET','mainbackshowachieve.php?id='+$$('id').innerHTML,update1);
}   
</script>

<script language="javascript" type="text/javascript">
var ajax2 = new xdh_ajax(10,'ajax2');
function update2(_obj){
	if(_obj.responseText=="ok"){
		alert('�Ѿ��ѱ����Ϊ�ص�');
	}
}
function key(){
 ajax2.query('GET','mainbackshowkey.php?id='+$$('id').innerHTML,update2);
}
</script>

<script language="javascript" type="text/javascript">
var ajax3 = new xdh_ajax(10,'ajax3');
function update3(_obj){
	if(_obj.responseText=="ok"){
		alert('�Ѿ��ѱ��������Ȿ');
	}
}
function error(){

 ajax3.query('GET','mainbackshowerror.php?id='+$$('id').innerHTML,update3);
}
</script>
<script language="javascript" type="text/javascript">
var ajax4 = new xdh_ajax(10,'ajax4');
function update4(_obj){
	 var id2 = _obj.responseText;
     var url = "mainbackshow.php?id="+id2;
     if(id2 > 0){
     	location = url;
     }
     else {alert(
     '���Ѿ����ص�һ�⣬���ȷ���ص�������ҳ������������');
		location = "mainback.php";
	 }
}
function last(){

 ajax4.query('GET','mainbackshowlast.php?id='+$$('id').innerHTML,update4);
}
</script>
<script language="javascript" type="text/javascript">
var ajax7 = new xdh_ajax(10,'ajax4');
function update7(_obj){
	url = location.href; //�ѵ�ǰҳ��ĵ�ַ�������� url 
    var times = url.split("?"); //���б��� url �ָ�����Ϊ "?" 
    if(times[1] != 1){ //���?���ֵ������1��ʾû��ˢ�� 
    url += "?1"; //�ѱ��� url ��ֵ���� ?1 
    self.location.replace(url); //ˢ��ҳ�� 
    } 
    else if(times[1] == 1){ //���?���ֵ������1��ʾû��ˢ�� 
    url += ""; //�ѱ��� url ��ֵ���� ?1 
    self.location.replace(url); //ˢ��ҳ�� 
    } 
}
function loadjs(){
ajax7.query('GET','loadjs.php',update7);
}
</script>
<script language="javascript" type="text/javascript">
var ajax8 = new xdh_ajax(10,'ajax4');
function update8(_obj){
		if(_obj.responseText!=""){
			alert('���ȷ����ͣ���η����������Իص�Ӧ����ҳ��������������Ҳ������Ӧ����ҳ���ٴν��뱾�η���');
			location='main.php';
		}
}
function pause(){
ajax8.query('GET','main1backpauseresponse.php?id='+$$('id').innerHTML,update8);
}
</script>
<script language="javascript" type="text/javascript">
var ajax9 = new xdh_ajax(10,'ajax4');
function update9(_obj){
	$$('kpoint').innerHTML = _obj.responseText;
}
function pause(){
ajax9.query('GET','main1backkpointresponse.php?id='+$$('id').innerHTML,update9);
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
				<label >��һ��</label>
			</div> 
			<div id="timer_controls" id="goback" onclick="location='mainback.php';" >
				<label >����</label>
			</div>
			<div id="timer_controls" id="achieve" onclick=" achieve()" >
				<label >���</label>
			</div> 
			<div id="timer_controls" id="key"  onclick="key()" >
				<label >�ص�</label>
			</div> 
			<div id="timer_controls"  id="error"  onclick="error()">
			    <label >����</label>
			</div>
			<div id="timer_controls" id="cross" onclick="cross()" >
				<label >��һ��</label>
			</div> 

				</ul>
</nav>  
<div style="margin-top:100px"></div>

		<div class="tab" id="tab2">
			<div class="tab-nav j-tab-nav">
				<a href="javascript:void(0);" class="current">������Ŀ</a>
				<a href="javascript:void(0);" >��Ŀ����</a>
				<a href="javascript:void(0);" >֪ʶӳ��</a>
				<a href="javascript:void(0);" >��Ŀ��Ϣ</a>
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
					       ��ţ�<div class="detail" id="id"><?php echo $id ?></div>
					       </div>
					       <div class="info">
					       ���ࣺ<div class="detail" id="class"><?php 
			$class01 = explode(",",$class);
	     	$count02 = count($class01);
	     	for($i = 0;$i< $count02;$i++){
     	    switch($class01[$i])
						{
						case "A":
							$class03 = '���������ޡ�����';
						  break;
						case "B":
							$class03 = 'һԪ����΢��ѧ';
						  break;
						case "C":
							$class03 = 'һԪ��������ѧ';
						  break;
						case "D":
							$class03 = '���������Ϳռ��������';
						  break;
						case "E":
							$class03 = '��Ԫ����΢��ѧ';
						  break;
						case "F":
							$class03 = '��Ԫ��������ѧ';
						  break;
						case "G":
							$class03 = '�����';
						  break;
						case "H":
							$class03 = '��΢�ַ���';
						  break;
						case "I":
							$class03 = '����ʽ';
						  break;
						case "J":
							$class03 = '����';
						  break;
						case "K":
							$class03 = '����';
						  break;
						case "L":
							$class03 = '���Է�����';
						  break;
						case "M":
							$class03 = '���������ֵ����������';
						  break;
						case "N":
							$class03 = '������';
						  break;
						case "O":
							$class03 = '����¼��͸���';
						  break;
						case "P":
							$class03 = '�����������ֲ�';
						  break;
						case "Q":
							$class03 = '��ά�����������ֲ�';
						  break;
						case "R":
							$class03 = '�����������������';
						  break;
						case "S":
							$class03 = '�������ɺ����ļ��޶���';
						  break;
						case "T":
							$class03 = '����ͳ�ƵĻ�������';
						  break;
						case "U":
							$class03 = '��������';
						  break;
						case "V":
							$class03 = '�������';
						  break;
						}
		 $string01 .= $class03.',';
     }
     $class=$string01;echo $class; ?></div>
					       </div>
					       <div class="info">
					       �Ѷȣ�<div class="detail" id="level"><?php 
					       switch($level)
						{
						case A:
							$level = 'һ';
						  break;
						case B:
							$level = '��';
						  break;
						case C:
							$level = '��';
						  break;
						case D:
							$level = '��';
						  break;
						case E:
							$level = '��';
						  break;
					
						}echo $level; ?></div>
					       </div>
					       <div class="info">
					       ���ͣ�<div class="detail" id="type"><?php 
		   $type = explode(",",$type);
           $count02 = count($type);
           for($i = 0;$i< $count02;$i++){
     	   switch($type[$i])
     	   {
						case A:
							$type03 = 'ѡ����';
						  break;
						case B:
							$type03 = '�����';
						  break;
						case C:
							$type03 = '�����';
						  break;
						case D:
							$type03 = '֤����';
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