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
<title>main-Ӧ����ҳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<meta name="Generator" content="Eclips">
<meta name="Author" content="Shi Yuming">
<meta name="Keywords" content="���Է�������,���Ի�,����ѧϰ,������,����,���ֻ�����,�������,����ѧϰ,����ѧϰ">
<meta name="Description" content="LEARN+PLUSͨ�����Է�������ѧϰ����ѧ�����֪ʶ�㹹�������ָ��Ի��ĸ�ϰ���ݣ�ʹ�������ѧϰ���̣�ʹ�������ݹ�������������������ȡ������Ч���������У�">
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
	alert("��������Ŭ��ʹ��ҳ�ܹ���"+ browser+"�ں������������ʹ�ã����ǻ���ҪһЩʱ�䣬ϣ�����ܹ���⣬�����ʹ�õĲ���΢��IE����������Գ����л������ģʽ�ı����Ч����Ϊȡ�ø��õ�ʹ��Ч�����Ƽ�ʹ�û����firefox���������лл��")
}
</script>

<body>

<nav id="nav" >
				<ul style= "margin-left:50px">
                	<li style="font-size:30px"><a href="index.html">LEARN+PLUS(����)</a></li>				
					<li><a href="checkkeys.php">�鿴�ص�</a></li>
					<li><a href="checkerror.php">�鿴����</a></li>
					<li><a href="todayreview.php">���ջع�</a></li>
					<li><a href="rankpage.php">��Ŀ����</a></li>
                    <li><a href="mainback.php">���뷴��</a></li>
                    <li style="float:right;margin-right:20px;margin-top:14px"><a href="logout.php">�˳�</a></li>
                    <li style="float:right;margin-right:10px;padding-top:26px;padding-bottom:10px; "><?php echo $_SESSION['name']; ?>|<?php  

 $name = $_SESSION['name'];
 $sql = "select class1 from test where name = '".$name."'";
 $result = mysql_query($sql,$conn);
 $class1 = mysql_fetch_array($result);
 mysql_close($conn);
 switch ($class1[0]){
 	case  "0":
 	echo "������ѧһ";
 	break;
 	case  "1":
 	echo "������ѧ��";
 	break;
 	case  "2":
 	echo "������ѧ��";
 	break;
 	case  "3":
 	echo "������ѧũ";
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
            	<h11 style="font-size:28px"><img src="images/icon1.png" alt="">�ְ�鸴ϰ</h11>
              <div class="inner1" style="line-height:23px" >
              	 <img src="images/main1.png" />
<?php  
if ($class1[0]==0){
	echo "
 			          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			                <option value='D'  > ���������Ϳռ��������</option> 
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                <option value='G'  > ����� </option> 
			                <option value='H'  > ��΢�ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                <option value='O'  > ����¼��͸��� </option>
			                <option value='P'  > �����������ֲ� </option>
			                <option value='Q'  > ��ά�����������ֲ� </option>
			                <option value='R'  > ����������������� </option>
			                <option value='S'  > �������ɺ����ļ��޶��� </option>
			                <option value='T'  > ����ͳ�ƵĻ������� </option>
			                <option value='U'  > �������� </option>
			                <option value='V'  > ������� </option> 
			                </select>
			          </div >
			           
			 ";
}
elseif ($class1[0]==1){
	echo "
		              <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			         
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                
			                <option value='H'  > ��΢�ַ������ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                 
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==2){
	echo "
		          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			         
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                <option value='G'  > ����� </option> 
			                <option value='H'  > ��΢�ַ������ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                <option value='O'  > ����¼��͸��� </option>
			                <option value='P'  > �����������ֲ� </option>
			                <option value='Q'  > ��ά�����������ֲ� </option>
			                <option value='R'  > ����������������� </option>
			                <option value='S'  > �������ɺ����ļ��޶��� </option>
			                <option value='T'  > ����ͳ�ƵĻ������� </option>
			                <option value='U'  > �������� </option>
			                <option value='V'  > ������� </option> 
			               
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==3){
	echo "
		          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			         
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                
			                <option value='H'  > ��΢�ַ������ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                <option value='O'  > ����¼��͸��� </option>
			                <option value='P'  > �����������ֲ� </option>
			                <option value='Q'  > ��ά�����������ֲ� </option>
			                <option value='R'  > ����������������� </option>
			                <option value='S'  > �������ɺ����ļ��޶��� </option>
			                <option value='T'  > ����ͳ�ƵĻ������� </option>
			                
			               
			               
			               
			                </select>
			          </div>
			            
			 ";         
}
?>   
					 
              <button id="main1btn" class="button1" onclick="main1()"><span></span> ���Ͻ��� </button>
              </div>
          
          	<!-- /.box -->
          </div>
        	
          	<!-- .box -->
          	<div class="box color2">
            	<h11 style="font-size:28px"><img src="images/icon2.png" alt="">���Ѷȸ�ϰ</h11>
              <div class="inner1" style="line-height:23px">
              	<img src="images/main2.png" />
              	     <div id='select'>
			                 <select name='level' id='level'>
			                 <option value='A'> �Ѷ�һ</option> 
			                 <option value='B'> �Ѷȶ�</option>
			                 <option value='C'> �Ѷ���</option>
			                 <option value='D'> �Ѷ���</option>
			                 <option value='E'> �Ѷ���</option> 
			                 </select>
			          </div>
			           
                <button class="button1" onclick = "main2()"><span></span> ���Ͻ��� </button>
              </div>
           
          	<!-- /.box -->
          </div>
        	
          	<!-- .box -->
          	<div class="box color3">
            	<h11 style="font-size:28px"><img src="images/icon3.png" alt="">�����͸�ϰ</h11>
              <div class="inner1" style="line-height:23px">
              	 <img src="images/main3.png" />
              	      <div id='select'>
			                 <select name='type' id='type'>
			                 <option value='A'>  ѡ����</option> 
			                 <option value='B'>  �����</option>
			                 <option value='C'>  �����</option> 
			                 <option value='D'>  ֤����</option>
			                 </select>
			          </div>
			           
                <button class="button1" onclick = "main3()"><span></span> ���Ͻ��� </button>
              </div>
         
          	<!-- /.box -->
          </div>
        	
          	<!-- .box -->
          	<div class="box color4">
            	<h11 style="font-size:28px"><img src="images/icon4.png" alt="">��ȫ�Զ���</h11>
              <div class="inner1" style="line-height:24px">
              	<img src="images/main4.png" />
              	<?php  
if ($class1[0]==0){
	echo "
 			          <div id='select'>
			                <select name='class4' id='class4'>
			                <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			                <option value='D'  > ���������Ϳռ��������</option> 
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                <option value='G'  > ����� </option> 
			                <option value='H'  > ��΢�ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                <option value='O'  > ����¼��͸��� </option>
			                <option value='P'  > �����������ֲ� </option>
			                <option value='Q'  > ��ά�����������ֲ� </option>
			                <option value='R'  > ����������������� </option>
			                <option value='S'  > �������ɺ����ļ��޶��� </option>
			                <option value='T'  > ����ͳ�ƵĻ������� </option>
			                <option value='U'  > �������� </option>
			                <option value='V'  > ������� </option> 
			                </select>
			          </div >
			           
			 ";
}
elseif ($class1[0]==1){
	echo "
		              <div id='select'>
			                <select name='class4' id='class4'>
			                 <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			         
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                
			                <option value='H'  > ��΢�ַ������ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                 
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==2){
	echo "
		          <div id='select'>
			                <select name='class' id='fenlei'>
			                <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			         
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                <option value='G'  > ����� </option> 
			                <option value='H'  > ��΢�ַ������ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                <option value='O'  > ����¼��͸��� </option>
			                <option value='P'  > �����������ֲ� </option>
			                <option value='Q'  > ��ά�����������ֲ� </option>
			                <option value='R'  > ����������������� </option>
			                <option value='S'  > �������ɺ����ļ��޶��� </option>
			                <option value='T'  > ����ͳ�ƵĻ������� </option>
			                <option value='U'  > �������� </option>
			                <option value='V'  > ������� </option> 
			               
			               
			                </select>
			          </div>
			           
			 ";         
}
elseif ($class1[0]==3){
	echo "
		          <div id='select'>
			                <select name='class4' id='class4'>
			                <option value='A' selected> ���������ޡ����� </option> 
			                <option value='B'  > һԪ����΢��ѧ </option> 
			                <option value='C'  > һԪ��������ѧ </option> 
			         
			                <option value='E'  > ��Ԫ����΢��ѧ </option> 
			                <option value='F'  > ��Ԫ��������ѧ </option> 
			                
			                <option value='H'  > ��΢�ַ������ַ��� </option>
			                <option value='I'  > ����ʽ </option>
			                <option value='J'  > ���� </option>
			                <option value='K'  > ���� </option>
			                <option value='L'  > ���Է����� </option>
			                <option value='M'  > ���������ֵ���������� </option>
			                <option value='N'  > ������ </option>
			                <option value='O'  > ����¼��͸��� </option>
			                <option value='P'  > �����������ֲ� </option>
			                <option value='Q'  > ��ά�����������ֲ� </option>
			                <option value='R'  > ����������������� </option>
			                <option value='S'  > �������ɺ����ļ��޶��� </option>
			                <option value='T'  > ����ͳ�ƵĻ������� </option>
			                
			               
			               
			               
			                </select>
			          </div>
			            
			 ";         
}
?> 
                <div id='select'>
			                 <select name='level4' id='level4'>
			                 <option value='A'> �Ѷ�һ</option> 
			                 <option value='B'> �Ѷȶ�</option>
			                 <option value='C'> �Ѷ���</option>
			                 <option value='D'> �Ѷ���</option>
			                 <option value='E'> �Ѷ���</option> 
			                 </select>
			   </div>
               <div id='select'>
			                 <select name='type4' id='type4'>
			                 <option value='A'>  ѡ����</option> 
			                 <option value='B'>  �����</option>
			                 <option value='C'>  �����</option> 
			                 <option value='D'>  ֤����</option>
			                 </select>
			   </div>	
              	     
                 <button class="button1" onclick = "main4()"><span></span> ���Ͻ��� </button>
          
            </div>
           
        </div>  
     </div>
                 
				</article>
			</div> 
<div style="margin:15px auto auto auto;text-align:center;font-size:18px "><a href="index1.html?#news">
<span style=" text-align:center;font-size:18px;color:#00f;font-weight:bold ">��֪����ôʹ�ã�</span></a><span style="width:30px;padding-left:10px;padding-right:10px"></span><a href="index1.html?#contact">
<span style=" text-align:center;font-size:18px;color:#00f;font-weight:bold ">��Ҫ���ࣿ</span></a>
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
