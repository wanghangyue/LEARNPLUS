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
<title>rankpage-��������</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<meta name="Generator" content="Eclips">
<meta name="Author" content="Shi Yuming">
<meta name="Keywords" content="���Է�������,���Ի�,����ѧϰ,������,����,���ֻ�����,�������,����ѧϰ,����ѧϰ">
<meta name="Description" content="LEARN+PLUSͨ�����Է�������ѧϰ����ѧ������֪ʶ�㹹�������ָ��Ի��ĸ�ϰ���ݣ�ʹ�������ѧϰ���̣�ʹ�������ݹ���������������������ȡ������Ч���������У�">
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
function rankcan(){
 ajax1.query('GET','rankcanresponse.php',update1);
}   
</script>
<script language="javascript" type="text/javascript">
var ajax2 = new xdh_ajax(9,'ajax2');
function update0(_obj){

}
function rankcannot(){
 ajax2.query('GET','rankcannotresponse.php',update0);
}   
</script>
<script language="javascript" type="text/javascript">
var ajax3 = new xdh_ajax(9,'ajax3');
function update3(_obj){

}
function rankachieve(){
 ajax3.query('GET','rankachieveresponse.php',update3);
}   
</script>
<script language="javascript" type="text/javascript">
var ajax4 = new xdh_ajax(9,'ajax4');
function update4(_obj){

}
function rankerror(){
 ajax4.query('GET','rankerrorresponse.php',update4);
}   
</script>
<script language="javascript" type="text/javascript">
var ajax5 = new xdh_ajax(9,'ajax5');
function update5(_obj){

}
function rankkey(){
 ajax5.query('GET','rankkeyresponse.php',update5);
}   
</script>

<script language="javascript" type="text/javascript">
var ajax = new xdh_ajax(9,'ajax');
function update2(_obj){
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
	alert("��������Ŭ��ʹ��ҳ�ܹ���"+ browser+"�ں������������ʹ�ã����ǻ���ҪһЩʱ�䣬ϣ�����ܹ����⣬�����ʹ�õĲ���΢��IE����������Գ����л������ģʽ�ı����Ч����Ϊȡ�ø��õ�ʹ��Ч�����Ƽ�ʹ�û����firefox���������лл��")
}
</script>
<body>

<nav id="nav" ">
				<ul>
                	<li style="font-size:30px;margin-left:50px"><a href="index.html">LEARN+PLUS(����)</a></li>
					<li><a href="main.php">������ҳ</a></li>
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
<div style="text-align:center;margin-top:85px;color:#000">
 <span style = "padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px; background-color:#E6E6FA;font-size:18px;font-weight:500">��Ŀ���й����<span style = "color:#ff0000"><?php include 'rankpagequery.php';echo $count03;?></span>������������ʾ<span style = "color:#ff0000">100</span>����������ѡ�����鿴</span>
 </div>
 
<div style="margin-top:5px;margin-left:115px;margin-right:115px;padding:5px 5px 10px 0px">
   <div style="width:300px;float:left;padding:5px 5px 5px 5px;text-align:center">
       <label for="refreshjs"><div onclick = "rankcan()" style = "cursor:pointer;margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:center;font-weight:bold;font-family:����">������������</div></label>
       <label for="refreshjs"><div onclick = "rankcannot()" style = "cursor:pointer;margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:center;font-weight:bold;font-family:����">��������������</div></label>
       <label for="refreshjs"><div onclick = "rankachieve()" style = "cursor:pointer;margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:center;font-weight:bold;font-family:����">�����������</div></label>
       <label for="refreshjs"><div onclick = "rankkey()" style = "cursor:pointer;margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:center;font-weight:bold;font-family:����">�ص���������</div></label>
       <label for="refreshjs"><div onclick = "rankerror()" style = "cursor:pointer;margin-top:10px;line-height:50px;height:50px;width:280px;background-color:#7700ff;color:#fff;font-size:20px;letter-spacing:2px;text-align:center;font-weight:bold;font-family:����">������������</div></label>
   </div>
  
   <div style="width:690px;float:right;padding:5px 5px 5px 5px;margin-bottom:50px">
       <?php  
  include 'rankpagequery.php';
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
       <a href="rankpageshow.php?id=<?php echo $id; ?>">
       <div style = "margin-top:10px;line-height:25px;width:100%;background-color:#FCFCFC;color:#272727;font-size:18px;padding:2px 2px 2px 2px;border-bottom:3px solid #7700ff">
           <div style = "height:auto"><span style = "height:13px;width:13px;background-color:#7700ff;color:#7700ff">MA</span><?php $cont = strtok($cont, "��");echo $cont.'......'; ?></div>
           <div style = "height:25px;font-size:12px;display:inline">���<span style = "color:#FF2D2D"><?php echo $id; ?></span>  ���� <span style = "color:#FF2D2D">
           <?php 
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
           $type=$string02;echo $type;$string02 = '' ?></span>  ����<span style = "color:#FF2D2D">
           <?php 
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
     $class=$string01;echo $class; $string01 = '';?></span> �Ѷ�<span style = "color:#FF2D2D">
     <?php 
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
					
						}echo $level; ?></span>  ��ע    <span style = "color:#FF2D2D"><?php echo $addition; ?></span></div>
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