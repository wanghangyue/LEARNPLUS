<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'conn/conn1.php';
header("Content-Type:text/html;charset=gb2312");  //��ҳ����

 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
 <head>
  <title>message-��Ϣ����</title>
  <meta name="Generator" content="Eclips">
  <meta name="Author" content="Shi Yuming">
  <meta name="Keywords" content="���Է�������,���Ի�,����ѧϰ,������,����,���ֻ�����,�������,����ѧϰ,����ѧϰ">
  <meta name="Description" content="LEARN+PLUSͨ�����Է�������ѧϰ����ѧ�����֪ʶ�㹹�������ָ��Ի��ĸ�ϰ���ݣ�ʹ�������ѧϰ���̣�ʹ�������ݹ�������������������ȡ������Ч���������У�">
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
                	<li style="font-size:30px"><a href="index.html">LEARN+PLUS(����)</a></li>
				</ul>
</nav>  

<div id="cont">
    	<div id="login" style ="text-align:center;font-size:18px">
        	<?php 
        	if($_POST['name']==""&&$_POST['email']==""&&$_POST['subject']==""&&$_POST['message']==""){
        		echo "����û����д�κ���Ϣ����<a href = 'index1.html?#contact'>����������д</a>��лл��";
        	}
        	else{
        		$sql00 = "INSERT INTO `message` VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['message']."')";
            mysql_query("SET NAMES 'UTF8'");
            $num = mysql_query($sql00);
        	if($num!=""){
	              echo "���ķ�����Ϣ�Ѿ��ɹ��ύ��лл����ָ���ͽ���";
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