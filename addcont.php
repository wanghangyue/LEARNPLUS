<html>
<head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="/ckeditor/ckfinder/ckfinder.js"></script>  
<script src="/ckeditor/config.js"></script><!--引入ckeditor配置-->  
<link href="/ckeditor/content.css" rel="stylesheet">  
<script type="text/javascript">                                                                                     window.onload = function()

　　      {
　      　 CKEDITOR.replace( 'cont' );
　            CKEDITOR.replace( 'anwser' );

　　      };

</script>

　      　 

</head>
<?php
error_reporting(E_ALL & ~E_NOTICE); //回避错误提示
error_reporting(0); 
include 'conn/conn1.php';
session_start();
    $filename = $_FILES['vedio']['name'];			//读取上传文件名，并存为数组
	//$filetype = $_POST['foundtype'];				//读取上传文件的类别
	$tmpname = $_FILES['vedio']['tmp_name'];		//读取临时文件名，并存为数组
	//$tmpsize = $_FILES['upname']['size'];			//上传文件大小
	//$tmppub = $_POST['ispub'];						//是否公开
	$file_path = 'http://localhost/regandlog/vedio/';

if(isset($_POST['submit']) && $_POST['submit'])
{
        $array0 = $_POST[class1];
        $class = implode(',',$array0);
        
        $array = $_POST[detail];
        $detail = implode(',',$array);
        
	    $array1 = $_POST[type];
        $type = implode(',',$array1);
        
    if(move_uploaded_file($tmpname, $file_path.$filename)){
        //这就算上传成功了，插入数据库
         
      $sql="insert ignore into math (cont,anwser,class,detail,level,type,addition,vedio) values ('$_POST[cont]','$_POST[anwser]','$class','$detail','$_POST[level]','$type','$_POST[addition]','$file_path$filename')";
      mysql_query($sql,$conn); echo "成功！";   
    }
    else {
      $sql="insert ignore into math (cont,anwser,class,detail,level,type,addition,vedio) values ('$_POST[cont]','$_POST[anwser]','$class','$detail','$_POST[level]','$type','$_POST[addition]','$file_path$filename')";
      mysql_query($sql,$conn); echo "成功！"; 
    }
    
}
	

//mysql_query("insert into ·test·.·math· (·id·, ·cont·, ·level·, ·class·) values (NULL, '".$_POST['cont']."', '".$_POST['level']."', '".$_POST['class']."')",$conn); //".$_POST['']."这个格式相当重要
?>
<form id="form1" name="form1" method="post" action="addcont.php" enctype="multipart/form-data">
内容:                       <textarea name="cont"  id="math"></textarea><br>
答案：                                                           <textarea name="anwser" ></textarea><br><br><br><br>
分类：
			                <input name="class1[]" type="checkbox" value='A'  > 函数、极限、连续 
			                <input name="class1[]" type="checkbox" value='B'  > 一元函数微分学
			                <input name="class1[]" type="checkbox" value='C'  > 一元函数积分学 
			                <input name="class1[]" type="checkbox" value='D'  > 向量代数和空间解析几何
			                <input name="class1[]" type="checkbox" value='E'  > 多元函数微分学 
			                <input name="class1[]" type="checkbox" value='F'  > 多元函数积分学 
			                <input name="class1[]" type="checkbox" value='G'  > 无穷级数 
			                <input name="class1[]" type="checkbox" value='H'  > 常微分方程 
			                <input name="class1[]" type="checkbox" value='I'  > 行列式 
			                <input name="class1[]" type="checkbox" value='J'  > 矩阵
			                <input name="class1[]" type="checkbox" value='K'  > 向量 
			                <input name="class1[]" type="checkbox" value='L'  > 线性方程组 
			                <input name="class1[]" type="checkbox" value='M'  > 矩阵的特征值和特征向量 
			                <input name="class1[]" type="checkbox" value='N'  > 二次型 
			                <input name="class1[]" type="checkbox" value='O'  > 随机事件和概率 
			                <input name="class1[]" type="checkbox" value='P'  > 随机变量及其分布 
			                <input name="class1[]" type="checkbox" value='Q'  > 多维随机变量及其分布
			                <input name="class1[]" type="checkbox" value='R'  > 随机变量的数字特征
			                <input name="class1[]" type="checkbox" value='S'  > 大数定律和中心极限定理
			                <input name="class1[]" type="checkbox" value='T'  > 数理统计的基本概念
			                <input name="class1[]" type="checkbox" value='U'  > 参数估计
			                <input name="class1[]" type="checkbox" value='V'  > 假设检验 
			                <br><br><br><br>
			                <a href="#1" style="margin:10px 20px 5px 20px">一、函数、极限、连续</a>
			                <a href="#2" style="margin:10px 20px 5px 20px">二、一元函数微分学</a>
			                <a href="#3" style="margin:10px 20px 5px 20px">三、一元函数积分学</a>
			                <a href="#4" style="margin:10px 20px 5px 20px">四、向量代数和空间解析几何</a>
			                <a href="#5" style="margin:10px 20px 5px 20px">五、多元函数微分学</a>
			                <a href="#6" style="margin:10px 20px 5px 20px">六、多元函数积分学</a>
			                <a href="#7" style="margin:10px 20px 5px 20px">七、无穷级数</a>
			                <a href="#8" style="margin:10px 20px 5px 20px">八、常微分方程</a>
			                <a href="#9" style="margin:10px 20px 5px 20px">九、行列式</a>
			                <a href="#10" style="margin:10px 20px 5px 20px">十、矩阵</a>
			                <a href="#11" style="margin:10px 20px 5px 20px">十一、向量</a>
			                <a href="#12" style="margin:10px 20px 5px 20px">十二、线性方程组</a>
			                <a href="#13" style="margin:10px 20px 5px 20px">十三、矩阵的特征值和特征向量</a>
			                <a href="#14" style="margin:10px 20px 5px 20px">十四、二次型</a>
			                <a href="#15" style="margin:10px 20px 5px 20px">十五、随机事件和概率</a>
			                <a href="#16" style="margin:10px 20px 5px 20px">十六、随机变量及其概率分布</a>
			                <a href="#17" style="margin:10px 20px 5px 20px">十七、二维随机变量及其概率分布</a>
			                <a href="#18" style="margin:10px 20px 5px 20px">十八、随机变量的数字特征</a>
			                <a href="#19" style="margin:10px 20px 5px 20px">十九、大数定律和中心极限定理</a>
			                <a href="#20" style="margin:10px 20px 5px 20px">二十、数理统计的基本概念</a>
			                <a href="#21" style="margin:10px 20px 5px 20px">二十一、参数估计</a>
			                <a href="#22" style="margin:10px 20px 5px 20px">二十二、假设检验</a><br />
			                 细分知识点：    <hr/><div id="1">一、函数、极限、连续</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>                                      
			                <input name="detail[]" type="checkbox" value="300" >函数的概念及表示法
                            <input name="detail[]" type="checkbox" value="301" >函数的有界性(有界和收敛的关系注意与无穷大的区别-如振荡型函数)、单调性、周期性(注意周期函数的定积分性质)和奇偶性(奇偶性的前提是定义域关于原点对称)
			                <input name="detail[]" type="checkbox" value="302" >复合函数(两个函数的定义域值域之间关系)、反函数(函数必须严格单调，则存在单调性相同的反函数且与其原函数关于y=x对称)、分段函数和隐函数
			                <input name="detail[]" type="checkbox" value="303" >基本初等函数的性质及其图形、函数关系的建立
			                <input name="detail[]" type="checkbox" value="304" >数列极限(转化为函数极限 单调有界 定积分 夹逼定理)与函数极限(四则变换 无穷小代换 积分中值定理 洛必塔法则 泰勒公式-要齐次展开)的定义及其性质(局部保号性)
			                <input name="detail[]" type="checkbox" value="305" >函数的左极限与右极限(注意正负号)
			                <input name="detail[]" type="checkbox" value="306" >无穷小(以零为极限)和无穷大(大于任意正数)的概念及其关系
			                <input name="detail[]" type="checkbox" value="307" >无穷小的性质(和性质 积性质)及无穷小的比较(求导定阶)
			                <input name="detail[]" type="checkbox" value="308" >极限的四则运算(要在各自极限存在的条件下)
			                <input name="detail[]" type="checkbox" value="309" >极限存在的两个准则：单调有界准则和夹逼准则
			                <input name="detail[]" type="checkbox" value="310" >两个重要极限
			                <input name="detail[]" type="checkbox" value="311" >函数连续的概念(点极限存在且等于函数值)
			                <input name="detail[]" type="checkbox" value="312" >函数间断点的类型(第一型(有定义)：可去型，跳跃型 第二型(无定义)：无穷型，振荡型)
			                <input name="detail[]" type="checkbox" value="313" >初等函数的连续性
			                <input name="detail[]" type="checkbox" value="314" >闭区间上连续函数的性质(零点定理 介值定理)
			                <hr/><div id="2">二、一元函数微分学</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="315" >导数和微分的概念(点可导与域可导的关系)
			                <input name="detail[]" type="checkbox" value="316" >导数的几何意义和物理意义
			                <input name="detail[]" type="checkbox" value="317" >函数的可导性与连续性之间的关系
			                <input name="detail[]" type="checkbox" value="318" >平面曲线的切线和法线
			                <input name="detail[]" type="checkbox" value="319" >导数和微分的四则运算 基本初等函数的导数
			                <input name="detail[]" type="checkbox" value="320" >复合函数、反函数、隐函数以及参数方程所确定的函数的微分法
			                <input name="detail[]" type="checkbox" value="321" >高阶导数(数学归纳法 赖布妮子公式法)
			                <input name="detail[]" type="checkbox" value="322" >一阶微分形式的不变性
			                <input name="detail[]" type="checkbox" value="323" >微分中值定理(闭区间连续开区间可导)
			                <input name="detail[]" type="checkbox" value="324" >洛必达（L’Hospital）法则(注意使用条件 洛必塔求解不存在时，原极限可能存在)
			                <input name="detail[]" type="checkbox" value="325" >函数单调性的判别(利用导数)
			                <input name="detail[]" type="checkbox" value="326" >函数的极值(极值的判定：定义一阶去心邻域可导且左右邻域导数异号 二阶可导且该点一阶导为零)
			                <input name="detail[]" type="checkbox" value="327" >函数图形的凹凸性(证明)、拐点及渐近线(求解步骤：垂直 水平 斜)
			                <input name="detail[]" type="checkbox" value="328" >函数图形的描绘
			                <input name="detail[]" type="checkbox" value="329" >函数最大值和最小值
			                <input name="detail[]" type="checkbox" value="330" >弧微分曲率的概念(有绝对值 注意参数方程公式)、曲率半径
			                <hr/><div id="3">三、一元函数积分学</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="331" >原函数和不定积分的概念(被积函数的要求 连续只是原函数存在的充分条件)
			                <input name="detail[]" type="checkbox" value="332" >不定积分的基本性质(线性 和差 与求导互逆)
			                <input name="detail[]" type="checkbox" value="333" >基本积分公式
			                <input name="detail[]" type="checkbox" value="334" >定积分的概念(求极限的应用)和基本性质(注意上下限的位置 线性 分区间 上限大于下限时比大小 估值定理)
			                <input name="detail[]" type="checkbox" value="335" >定积分中值定理
			                <input name="detail[]" type="checkbox" value="336" >用定积分表达和计算质心
			                <input name="detail[]" type="checkbox" value="337" >积分上限的函数及其导数
			                <input name="detail[]" type="checkbox" value="338" >牛顿一莱布尼茨（Newton-Leibniz）公式
			                <input name="detail[]" type="checkbox" value="339" >不定积分和定积分的换元积分法(换元要彻底，不要忘了dx  定积分换元要注意上下限也要换)与分部积分法
			                <input name="detail[]" type="checkbox" value="340" >有理函数、三角函数的有理式和简单无理函数的积分
			                <input name="detail[]" type="checkbox" value="341" >广义积分概定积分的应用
			               <hr/> <div id="4">四、向量代数和空间解析几何</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="342" >向量的概念(自由移动)
			                <input name="detail[]" type="checkbox" value="343" >向量的线性运算
			                <input name="detail[]" type="checkbox" value="344" >向量的数量积(是数 可交换)和向量积(是向量 交换后变号)
			                <input name="detail[]" type="checkbox" value="345" >向量的混合积(交换的性质与行列式性质相同 几何意义 用于求异面直线的距离)
			                <input name="detail[]" type="checkbox" value="346" >两向量垂直(数量积为零)、平行(向量积与零向量)的条件
			                <input name="detail[]" type="checkbox" value="347" >两向量的夹角(面面 线线 线面)
			                <input name="detail[]" type="checkbox" value="348" >向量的坐标表达式及其运算
			                <input name="detail[]" type="checkbox" value="349" >单位向量
			                <input name="detail[]" type="checkbox" value="350" >方向数与方向余弦
			                <input name="detail[]" type="checkbox" value="351" >曲面方程和空间曲线方程的概念
			                <input name="detail[]" type="checkbox" value="352" >平面方程(点法式 截距式 一般式 平面束方程)、直线方程(对称式 参数式 一般式)
			                <input name="detail[]" type="checkbox" value="353" >平面与平面、平面与直线、直线与直线的以及平行、垂直的条件(转化为向量之间的关系)
			                <input name="detail[]" type="checkbox" value="354" >点到平面和点到直线的距离(利用平行四边形)
			                <input name="detail[]" type="checkbox" value="355" >球面、母线平行于坐标轴的柱面
			                <input name="detail[]" type="checkbox" value="356" >旋转轴为坐标轴的旋转曲面的方程
			                <input name="detail[]" type="checkbox" value="357" >常用的二次曲面方程及其图形
			                <input name="detail[]" type="checkbox" value="358" >空间曲线的参数方程和一般方程
			                <input name="detail[]" type="checkbox" value="359" >空间曲线在坐标面上的投影曲线方程
			              <hr/> <div id="5">五、多元函数微分学</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="360" >多元函数的概念
			                <input name="detail[]" type="checkbox" value="361" >二元函数的几何意义
			                <input name="detail[]" type="checkbox" value="362" >二元函数的极限(极限存在的判定)和连续的概念
			                <input name="detail[]" type="checkbox" value="363" >有界闭区域上多元连续函数的性质(有界性 最值存在 介值定理)
			                <input name="detail[]" type="checkbox" value="364" >多元函数偏导数和全微分(和全增量的区别)
			                <input name="detail[]" type="checkbox" value="365" >全微分存在的必要条件(连续 偏导存在 任意方向的方向导数存在)和充分条件(偏导存在且连续)
			                <input name="detail[]" type="checkbox" value="366" >多元复合函数、隐函数的求导法
			                <input name="detail[]" type="checkbox" value="367" >二阶偏导数、方向导数和梯度
			                <input name="detail[]" type="checkbox" value="368" >空间曲线的切线和法平面(参数方程—注意以x,y,z为参数 方程组)
			                <input name="detail[]" type="checkbox" value="369" >曲面的切平面和法线
			                <input name="detail[]" type="checkbox" value="370" >二元函数的二阶泰勒公式
			                <input name="detail[]" type="checkbox" value="371" >多元函数的极值和条件极值
			                <input name="detail[]" type="checkbox" value="372" >多元函数的最大值、最小值及其简单应用
			               <hr/> <div id="6">六、多元函数积分学</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="373" >二重积分与三重积分的概念、性质、计算和应用
			                <input name="detail[]" type="checkbox" value="374" >两类曲线积分的概念、性质及计算
			                <input name="detail[]" type="checkbox" value="375" >两类曲线积分的关系
			                <input name="detail[]" type="checkbox" value="376" >格林（Green）公式
			                <input name="detail[]" type="checkbox" value="377" >平面曲线积分与路径无关的条件(注意单连通域与复连通域的区别)
			                <input name="detail[]" type="checkbox" value="378" >已知全微分求原函数
			                <input name="detail[]" type="checkbox" value="379" >两类曲线积分的概念、性质及计算
			                <input name="detail[]" type="checkbox" value="380" >两类曲面积分的关系
			                <input name="detail[]" type="checkbox" value="381" >高斯（Gauss）公式
			                <input name="detail[]" type="checkbox" value="382" >斯托克斯（STOKES)公式
			                <input name="detail[]" type="checkbox" value="383" >散度、旋度的概念及计算
			                <input name="detail[]" type="checkbox" value="384" >曲线积分和曲面积分的应用
			                <hr/><div id="7">七、无穷级数</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="385" >常数项级数(级数是数列和的概念)的收敛与发散的概念
			                <input name="detail[]" type="checkbox" value="386" >收敛级数的和(和函数)的概念
			                <input name="detail[]" type="checkbox" value="387" >级数的基本性质与收敛的必要条件(一般项趋零)
			                <input name="detail[]" type="checkbox" value="388" >几何级数与p级数以及它们的收敛性
			                <input name="detail[]" type="checkbox" value="389" >正项级数收敛性的判别法(比较 根值 比值)
			                <input name="detail[]" type="checkbox" value="390" >交错级数与莱布尼茨定理(一般项趋零递减)
			                <input name="detail[]" type="checkbox" value="391" >任意项级数的绝对收敛与条件收敛
			                <input name="detail[]" type="checkbox" value="392" >函数项级数的收敛域与和函数的概念
			                <input name="detail[]" type="checkbox" value="393" >幂级数及其收敛半径、收敛区间（指开区间）和收敛域
			                <input name="detail[]" type="checkbox" value="394" >幂级数的和函数(有收敛域的要求)
			                <input name="detail[]" type="checkbox" value="395" >幂级数在其收敛区间内的基本性质(阿贝尔定理及其推论 连续性 可积可导且收敛区间不变)
			                <input name="detail[]" type="checkbox" value="396" >简单幂级数的和函数的求法(有收敛域的要求)
			                <input name="detail[]" type="checkbox" value="397" >初等幂级数展开式(有收敛域的要求)
			                <input name="detail[]" type="checkbox" value="398" >函数的傅里叶（Fourier）系数与傅里叶级数
			                <input name="detail[]" type="checkbox" value="399" >狄利克雷（Dlrichlei）定理
			                <input name="detail[]" type="checkbox" value="100" >函数在[-l，l]上的傅里叶级数、函数在[０,l]上的正弦级数和余弦级数
			                <hr/><div id="8">八、常微分方程</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="101" >常微分方程的基本概念
			                <input name="detail[]" type="checkbox" value="102" >变量可分离的方程
			                <input name="detail[]" type="checkbox" value="103" >齐次微分方程
			                <input name="detail[]" type="checkbox" value="104" >一阶线性微分方程
			                <input name="detail[]" type="checkbox" value="105" >伯努利（Bernoulli）方程
			                <input name="detail[]" type="checkbox" value="106" >全微分方程
			                <input name="detail[]" type="checkbox" value="107" >可用简单的变量代换求解的某些微分方程
			                <input name="detail[]" type="checkbox" value="108" >可降阶的高阶微分方程
			                <input name="detail[]" type="checkbox" value="109" >线性微分方程解的性质及解的结构定理
			                <input name="detail[]" type="checkbox" value="110" >二阶常系数齐次线性微分方程
			                <input name="detail[]" type="checkbox" value="111" >高于二阶的某些常系数齐次线性微分方程
			                <input name="detail[]" type="checkbox" value="112" >简单的二阶常系数非齐次线性微分方程
			                <input name="detail[]" type="checkbox" value="113" >欧拉（Euler）方程
			                <input name="detail[]" type="checkbox" value="114" >微分方程简单应用
			                <hr/><div id="9">九、行列式</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="115" >行列式的概念和基本性质(转置不变 交换两行变号 公因子 成比例 分行可加性 一行乘数加另一行不变)
			                <input name="detail[]" type="checkbox" value="116" >行列式按行（列）展开定理(余子式 代数余子式)
			                <input name="detail[]" type="checkbox" value="117" >行列式的计算(三角式 反的猛 数学归纳法)
			                <hr/><div id="10">十、矩阵</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="118" >矩阵的概念
			                <input name="detail[]" type="checkbox" value="119" >矩阵的线性运算
			                <input name="detail[]" type="checkbox" value="120" >矩阵的乘法
			                <input name="detail[]" type="checkbox" value="121" >方阵的幂
			                <input name="detail[]" type="checkbox" value="122" >方阵乘积的行列式
			                <input name="detail[]" type="checkbox" value="123" >矩阵的转置
			                <input name="detail[]" type="checkbox" value="124" >逆矩阵的概念和性质
			                <input name="detail[]" type="checkbox" value="125" >矩阵可逆的充分必要条件
			                <input name="detail[]" type="checkbox" value="126" >伴随矩阵
			                <input name="detail[]" type="checkbox" value="127" >矩阵的初等变换(求逆矩阵 解方程组 求行列式 求向量组极大无关组)
			                <input name="detail[]" type="checkbox" value="128" >初等矩阵
			                <input name="detail[]" type="checkbox" value="129" >矩阵的秩(对非零子式的理解)
			                <input name="detail[]" type="checkbox" value="130" >矩阵等价
			                <input name="detail[]" type="checkbox" value="131" >分块矩阵及其运算(相互的分块之间也是同型矩阵)
			               <hr/> <div id="11">十一、向量</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="132" >向量的概念
			                <input name="detail[]" type="checkbox" value="133" >向量的线性组合和线性表示(不考虑系数是否为零)
			                <input name="detail[]" type="checkbox" value="134" >向量组的线性相关与线性无关(考虑是否存在一组系数不为零)
			                <input name="detail[]" type="checkbox" value="135" >向量组的极大线性无关组
			                <input name="detail[]" type="checkbox" value="136" >等价向量组
			                <input name="detail[]" type="checkbox" value="137" >向量组的秩
			                <input name="detail[]" type="checkbox" value="138" >向量组的秩与矩阵的秩之间的关系
			                <input name="detail[]" type="checkbox" value="139" >向量空间以及相关概念
			                <input name="detail[]" type="checkbox" value="140" >n维向量空间的基变换和坐标变换
			                <input name="detail[]" type="checkbox" value="141" >过渡矩阵
			                <input name="detail[]" type="checkbox" value="142" >向量的内积
			                <input name="detail[]" type="checkbox" value="143" >线性无关向量组的正交规范化方法
			                <input name="detail[]" type="checkbox" value="144" >规范正交基
			                <input name="detail[]" type="checkbox" value="145" >正交矩阵及其性质
			                <hr/><div id="12">十二、线性方程组</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="146" >线性方程组的克莱姆(又译：克拉默)（Cramer）法则
			                <input name="detail[]" type="checkbox" value="147" >齐次线性方程组有非零解的充分必要条件
			                <input name="detail[]" type="checkbox" value="148" >非齐次线性方程组有解的充分必要条件
			                <input name="detail[]" type="checkbox" value="149" >线性方程组解的性质和解的结构
			                <input name="detail[]" type="checkbox" value="150" >齐次线性方程组的基础解系(单个解向量)和通解
			                <input name="detail[]" type="checkbox" value="151" >解空间(解向量的线形组合)
			                <input name="detail[]" type="checkbox" value="152" >非齐次线性方程组的通解(行变换 最简型)
			                <hr/><div id="13">十三、矩阵的特征值和特征向量</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="153" >矩阵的特征值和特征向量的概念及性质
			                <input name="detail[]" type="checkbox" value="154" >相似变换、相似矩阵的概念及性质(相似同秩，但同秩未必相似)
			                <input name="detail[]" type="checkbox" value="155" >矩阵可相似对角化的充分必要条件(存在n个线形无关特征向量)及相似对角矩阵
			                <input name="detail[]" type="checkbox" value="156" >实对称矩阵的特征值、特征向量及相似对角矩阵
			                <hr/><div id="14">十四、二次型</div><br/><hr/>
			                <input name="detail[]" type="checkbox" value="157" >二次型及其矩阵表示
			                <input name="detail[]" type="checkbox" value="158" >合同变换与合同矩阵
			                <input name="detail[]" type="checkbox" value="159" >二次型的秩
			                <input name="detail[]" type="checkbox" value="160" >惯性定理
			                <input name="detail[]" type="checkbox" value="161" >二次型的标准形(只反映特征值的正负个数)和规范形(系数只能是1，-1，0)
			                <input name="detail[]" type="checkbox" value="162" >用正交变换(系数是特征值)和配方法化二次型为标准形
			                <input name="detail[]" type="checkbox" value="163" >二次型及其矩阵的正定性
			                <hr/><div id="15">十五、随机事件和概率</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="164" >随机事件(可能发生可能不发生的事情)与样本空间(包括所有的样本点)
			                <input name="detail[]" type="checkbox" value="165" >事件的关系(包含 相等 和 积 差 互斥 对立)与运算(交换 分配 结合 德摸根 对差事件 文氏图)
			                <input name="detail[]" type="checkbox" value="166" >完全事件组(所有基本事件的集合)
			                <input name="detail[]" type="checkbox" value="167" >概率的概念
			                <input name="detail[]" type="checkbox" value="168" >概率的基本性质(非负性 规范性 可列可加性)
			                <input name="detail[]" type="checkbox" value="169" >古典型概率
			                <input name="detail[]" type="checkbox" value="170" >几何型概率
			                <input name="detail[]" type="checkbox" value="171" >条件概率
			                <input name="detail[]" type="checkbox" value="172" >概率的基本公式
			                <input name="detail[]" type="checkbox" value="173" >事件的独立性
			                <input name="detail[]" type="checkbox" value="174" >独立重复试验
			               <hr/><div id="16"> 十六、随机变量及其概率分布</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="175" >随机变量(事件结果数量化)及其概率分布(取某一个随机变量的概率)
			                <input name="detail[]" type="checkbox" value="176" >随机变量的分布函数的概念及其性质
			                <input name="detail[]" type="checkbox" value="177" >离散型随机变量的概率分布
			                <input name="detail[]" type="checkbox" value="178" >连续型随机变量的概率密度
			                <input name="detail[]" type="checkbox" value="179" >常见随机变量的概率分布
			                <input name="detail[]" type="checkbox" value="180" >随机变量函数的概率分布
			                <hr/><div id="17">十七、二维随机变量及其概率分布</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="181" >多维随机变量及其分布
			                <input name="detail[]" type="checkbox" value="182" >二维离散型随机变量的概率分布、边缘分布和条件分布
			                <input name="detail[]" type="checkbox" value="183" >二维连续性随机变量的概率密度、边缘概率密度和条件密度
			                <input name="detail[]" type="checkbox" value="184" >随机变量的独立性(判定)和相关性
			                <input name="detail[]" type="checkbox" value="185" >常用二维随机变量的概率分布
			                <input name="detail[]" type="checkbox" value="186" >两个及两个以上随机变量简单函数的分布
			               <hr/> <div id="18">十八、随机变量的数字特征</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="187" >随机变量的数学期望（均值）、方差和标准差及其性质
			                <input name="detail[]" type="checkbox" value="188" >随机变量函数的数学期望
			                <input name="detail[]" type="checkbox" value="189" >矩、协方差
			                <input name="detail[]" type="checkbox" value="190" >相关系数及其性质
			                <hr/><div id="19">十九、大数定律和中心极限定理</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="191" >切比雪夫（Chebyshev）不等式
			                <input name="detail[]" type="checkbox" value="192" >切比雪夫大数定律
			                <input name="detail[]" type="checkbox" value="193" >伯努利大数定律
			                <input name="detail[]" type="checkbox" value="194" >辛钦（Khinchine）大数定律
			                <input name="detail[]" type="checkbox" value="195" >棣莫弗－拉普拉斯定理
			                <input name="detail[]" type="checkbox" value="196" >列维－林德伯格（Levy－Undbe）定理
			               <hr/> <div id="20">二十、数理统计的基本概念</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="197" >总体(所研究对象的全体组成的集合)
			                <input name="detail[]" type="checkbox" value="198" >个体(总体中的每个元素)
			                <input name="detail[]" type="checkbox" value="199" >简单随机样本(独立同分布)
			                <input name="detail[]" type="checkbox" value="200" >统计量(不含知参数的样本函数)
			                <input name="detail[]" type="checkbox" value="201" >样本均值
			                <input name="detail[]" type="checkbox" value="202" >样本方差和样本矩(k阶原点矩k阶中心矩)
			                <input name="detail[]" type="checkbox" value="203" >x2分布、t分布、F分布
			                <input name="detail[]" type="checkbox" value="204" >分位数
			                <input name="detail[]" type="checkbox" value="205" >正态总体的某些常用抽样分布
			                <hr/><div id="21">二十一、参数估计</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="206" >点估计的概念(用样本估计参数)
			                <input name="detail[]" type="checkbox" value="207" >估计量(样本的函数)与估计值(样本函数的一个取值)
			                <input name="detail[]" type="checkbox" value="208" >矩估计法
			                <input name="detail[]" type="checkbox" value="209" >最大似然估计法
			                <input name="detail[]" type="checkbox" value="210" >估计量的评选标准(无偏性 有效性 一致性)
			                <input name="detail[]" type="checkbox" value="211" >区间估计的概念
			                <input name="detail[]" type="checkbox" value="212" >单个正态总体的均值和方差的区间估计
			                <input name="detail[]" type="checkbox" value="213" >两个正态总体的均值差和方差比的区间估计
			                <hr/><div id="22">二十二、假设检验</div><a href="#first">到最前</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">到最后</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="214" >显著性检验
			                <input name="detail[]" type="checkbox" value="215" >假设检验的两类错误
			                <input name="detail[]" type="checkbox" value="216" >单个及两个正态总体的均值和万差的假设检验
			                <br><br><br><br>
  难度系数：                                                  <select name="level" style="width:1000px;background-color:#00dd00" id="last">
			                 <option value='A' selected> 难度一</option> 
			                 <option value='B'> 难度二</option>
			                 <option value='C'> 难度三</option>
			                 <option value='D'> 难度四</option>
			                 <option value='E'> 难度五</option> 
			                 </select><br><br><br><br>
  题型：                                                          
			                 <input name="type[]" type="checkbox" value='A'>  选择题 
			                 <input name="type[]" type="checkbox" value='B'>  填空题
			                 <input name="type[]" type="checkbox" value='C'>  解答题 
			                 <input name="type[]" type="checkbox" value='D'>  证明题
			                 <br><br><br><br>
  备注：                                                            <input name="addition" type="text" size="24" maxlength="1000"><br><br><br><br>
视频上传:                    <input name="vedio" type="file" style="width:1000px"/>
                             <input type="hidden" name="MAX_FILE_SIZE" value="2048000000" /><br>

 <input name="submit" type="submit" value="提交"> 
 <input name="reset" type="reset" value="重置">
</form>
<?php 
$getid = mysql_insert_id($conn);
echo $getid;
?>
<a href="show.php">显示内容</a>
<a href="check.php?id=<?php echo $getid ?>">题目检测</a>
<a href="test4.php?id=<?php echo $getid ?>">题目检测测试页面</a>
</html>