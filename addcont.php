<html>
<head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="/ckeditor/ckfinder/ckfinder.js"></script>  
<script src="/ckeditor/config.js"></script><!--����ckeditor����-->  
<link href="/ckeditor/content.css" rel="stylesheet">  
<script type="text/javascript">                                                                                     window.onload = function()

����      {
��      �� CKEDITOR.replace( 'cont' );
��            CKEDITOR.replace( 'anwser' );

����      };

</script>

��      �� 

</head>
<?php
error_reporting(E_ALL & ~E_NOTICE); //�رܴ�����ʾ
error_reporting(0); 
include 'conn/conn1.php';
session_start();
    $filename = $_FILES['vedio']['name'];			//��ȡ�ϴ��ļ���������Ϊ����
	//$filetype = $_POST['foundtype'];				//��ȡ�ϴ��ļ������
	$tmpname = $_FILES['vedio']['tmp_name'];		//��ȡ��ʱ�ļ���������Ϊ����
	//$tmpsize = $_FILES['upname']['size'];			//�ϴ��ļ���С
	//$tmppub = $_POST['ispub'];						//�Ƿ񹫿�
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
        //������ϴ��ɹ��ˣ��������ݿ�
         
      $sql="insert ignore into math (cont,anwser,class,detail,level,type,addition,vedio) values ('$_POST[cont]','$_POST[anwser]','$class','$detail','$_POST[level]','$type','$_POST[addition]','$file_path$filename')";
      mysql_query($sql,$conn); echo "�ɹ���";   
    }
    else {
      $sql="insert ignore into math (cont,anwser,class,detail,level,type,addition,vedio) values ('$_POST[cont]','$_POST[anwser]','$class','$detail','$_POST[level]','$type','$_POST[addition]','$file_path$filename')";
      mysql_query($sql,$conn); echo "�ɹ���"; 
    }
    
}
	

//mysql_query("insert into ��test��.��math�� (��id��, ��cont��, ��level��, ��class��) values (NULL, '".$_POST['cont']."', '".$_POST['level']."', '".$_POST['class']."')",$conn); //".$_POST['']."�����ʽ�൱��Ҫ
?>
<form id="form1" name="form1" method="post" action="addcont.php" enctype="multipart/form-data">
����:                       <textarea name="cont"  id="math"></textarea><br>
�𰸣�                                                           <textarea name="anwser" ></textarea><br><br><br><br>
���ࣺ
			                <input name="class1[]" type="checkbox" value='A'  > ���������ޡ����� 
			                <input name="class1[]" type="checkbox" value='B'  > һԪ����΢��ѧ
			                <input name="class1[]" type="checkbox" value='C'  > һԪ��������ѧ 
			                <input name="class1[]" type="checkbox" value='D'  > ���������Ϳռ��������
			                <input name="class1[]" type="checkbox" value='E'  > ��Ԫ����΢��ѧ 
			                <input name="class1[]" type="checkbox" value='F'  > ��Ԫ��������ѧ 
			                <input name="class1[]" type="checkbox" value='G'  > ����� 
			                <input name="class1[]" type="checkbox" value='H'  > ��΢�ַ��� 
			                <input name="class1[]" type="checkbox" value='I'  > ����ʽ 
			                <input name="class1[]" type="checkbox" value='J'  > ����
			                <input name="class1[]" type="checkbox" value='K'  > ���� 
			                <input name="class1[]" type="checkbox" value='L'  > ���Է����� 
			                <input name="class1[]" type="checkbox" value='M'  > ���������ֵ���������� 
			                <input name="class1[]" type="checkbox" value='N'  > ������ 
			                <input name="class1[]" type="checkbox" value='O'  > ����¼��͸��� 
			                <input name="class1[]" type="checkbox" value='P'  > �����������ֲ� 
			                <input name="class1[]" type="checkbox" value='Q'  > ��ά�����������ֲ�
			                <input name="class1[]" type="checkbox" value='R'  > �����������������
			                <input name="class1[]" type="checkbox" value='S'  > �������ɺ����ļ��޶���
			                <input name="class1[]" type="checkbox" value='T'  > ����ͳ�ƵĻ�������
			                <input name="class1[]" type="checkbox" value='U'  > ��������
			                <input name="class1[]" type="checkbox" value='V'  > ������� 
			                <br><br><br><br>
			                <a href="#1" style="margin:10px 20px 5px 20px">һ�����������ޡ�����</a>
			                <a href="#2" style="margin:10px 20px 5px 20px">����һԪ����΢��ѧ</a>
			                <a href="#3" style="margin:10px 20px 5px 20px">����һԪ��������ѧ</a>
			                <a href="#4" style="margin:10px 20px 5px 20px">�ġ����������Ϳռ��������</a>
			                <a href="#5" style="margin:10px 20px 5px 20px">�塢��Ԫ����΢��ѧ</a>
			                <a href="#6" style="margin:10px 20px 5px 20px">������Ԫ��������ѧ</a>
			                <a href="#7" style="margin:10px 20px 5px 20px">�ߡ������</a>
			                <a href="#8" style="margin:10px 20px 5px 20px">�ˡ���΢�ַ���</a>
			                <a href="#9" style="margin:10px 20px 5px 20px">�š�����ʽ</a>
			                <a href="#10" style="margin:10px 20px 5px 20px">ʮ������</a>
			                <a href="#11" style="margin:10px 20px 5px 20px">ʮһ������</a>
			                <a href="#12" style="margin:10px 20px 5px 20px">ʮ�������Է�����</a>
			                <a href="#13" style="margin:10px 20px 5px 20px">ʮ�������������ֵ����������</a>
			                <a href="#14" style="margin:10px 20px 5px 20px">ʮ�ġ�������</a>
			                <a href="#15" style="margin:10px 20px 5px 20px">ʮ�塢����¼��͸���</a>
			                <a href="#16" style="margin:10px 20px 5px 20px">ʮ�����������������ʷֲ�</a>
			                <a href="#17" style="margin:10px 20px 5px 20px">ʮ�ߡ���ά�������������ʷֲ�</a>
			                <a href="#18" style="margin:10px 20px 5px 20px">ʮ�ˡ������������������</a>
			                <a href="#19" style="margin:10px 20px 5px 20px">ʮ�š��������ɺ����ļ��޶���</a>
			                <a href="#20" style="margin:10px 20px 5px 20px">��ʮ������ͳ�ƵĻ�������</a>
			                <a href="#21" style="margin:10px 20px 5px 20px">��ʮһ����������</a>
			                <a href="#22" style="margin:10px 20px 5px 20px">��ʮ�����������</a><br />
			                 ϸ��֪ʶ�㣺    <hr/><div id="1">һ�����������ޡ�����</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>                                      
			                <input name="detail[]" type="checkbox" value="300" >�����ĸ����ʾ��
                            <input name="detail[]" type="checkbox" value="301" >�������н���(�н�������Ĺ�ϵע��������������-�����ͺ���)�������ԡ�������(ע�����ں����Ķ���������)����ż��(��ż�Ե�ǰ���Ƕ��������ԭ��Գ�)
			                <input name="detail[]" type="checkbox" value="302" >���Ϻ���(���������Ķ�����ֵ��֮���ϵ)��������(���������ϸ񵥵�������ڵ�������ͬ�ķ�����������ԭ��������y=x�Գ�)���ֶκ�����������
			                <input name="detail[]" type="checkbox" value="303" >�������Ⱥ��������ʼ���ͼ�Ρ�������ϵ�Ľ���
			                <input name="detail[]" type="checkbox" value="304" >���м���(ת��Ϊ�������� �����н� ������ �бƶ���)�뺯������(����任 ����С���� ������ֵ���� ��������� ̩�չ�ʽ-Ҫ���չ��)�Ķ��弰������(�ֲ�������)
			                <input name="detail[]" type="checkbox" value="305" >�������������Ҽ���(ע��������)
			                <input name="detail[]" type="checkbox" value="306" >����С(����Ϊ����)�������(������������)�ĸ�����ϵ
			                <input name="detail[]" type="checkbox" value="307" >����С������(������ ������)������С�ıȽ�(�󵼶���)
			                <input name="detail[]" type="checkbox" value="308" >���޵���������(Ҫ�ڸ��Լ��޴��ڵ�������)
			                <input name="detail[]" type="checkbox" value="309" >���޴��ڵ�����׼�򣺵����н�׼��ͼб�׼��
			                <input name="detail[]" type="checkbox" value="310" >������Ҫ����
			                <input name="detail[]" type="checkbox" value="311" >���������ĸ���(�㼫�޴����ҵ��ں���ֵ)
			                <input name="detail[]" type="checkbox" value="312" >������ϵ������(��һ��(�ж���)����ȥ�ͣ���Ծ�� �ڶ���(�޶���)�������ͣ�����)
			                <input name="detail[]" type="checkbox" value="313" >���Ⱥ�����������
			                <input name="detail[]" type="checkbox" value="314" >����������������������(��㶨�� ��ֵ����)
			                <hr/><div id="2">����һԪ����΢��ѧ</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="315" >������΢�ֵĸ���(��ɵ�����ɵ��Ĺ�ϵ)
			                <input name="detail[]" type="checkbox" value="316" >�����ļ����������������
			                <input name="detail[]" type="checkbox" value="317" >�����Ŀɵ�����������֮��Ĺ�ϵ
			                <input name="detail[]" type="checkbox" value="318" >ƽ�����ߵ����ߺͷ���
			                <input name="detail[]" type="checkbox" value="319" >������΢�ֵ��������� �������Ⱥ����ĵ���
			                <input name="detail[]" type="checkbox" value="320" >���Ϻ��������������������Լ�����������ȷ���ĺ�����΢�ַ�
			                <input name="detail[]" type="checkbox" value="321" >�߽׵���(��ѧ���ɷ� �������ӹ�ʽ��)
			                <input name="detail[]" type="checkbox" value="322" >һ��΢����ʽ�Ĳ�����
			                <input name="detail[]" type="checkbox" value="323" >΢����ֵ����(����������������ɵ�)
			                <input name="detail[]" type="checkbox" value="324" >��شL��Hospital������(ע��ʹ������ �������ⲻ����ʱ��ԭ���޿��ܴ���)
			                <input name="detail[]" type="checkbox" value="325" >���������Ե��б�(���õ���)
			                <input name="detail[]" type="checkbox" value="326" >�����ļ�ֵ(��ֵ���ж�������һ��ȥ������ɵ���������������� ���׿ɵ��Ҹõ�һ�׵�Ϊ��)
			                <input name="detail[]" type="checkbox" value="327" >����ͼ�εİ�͹��(֤��)���յ㼰������(��ⲽ�裺��ֱ ˮƽ б)
			                <input name="detail[]" type="checkbox" value="328" >����ͼ�ε����
			                <input name="detail[]" type="checkbox" value="329" >�������ֵ����Сֵ
			                <input name="detail[]" type="checkbox" value="330" >��΢�����ʵĸ���(�о���ֵ ע��������̹�ʽ)�����ʰ뾶
			                <hr/><div id="3">����һԪ��������ѧ</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="331" >ԭ�����Ͳ������ֵĸ���(����������Ҫ�� ����ֻ��ԭ�������ڵĳ������)
			                <input name="detail[]" type="checkbox" value="332" >�������ֵĻ�������(���� �Ͳ� ���󵼻���)
			                <input name="detail[]" type="checkbox" value="333" >�������ֹ�ʽ
			                <input name="detail[]" type="checkbox" value="334" >�����ֵĸ���(���޵�Ӧ��)�ͻ�������(ע�������޵�λ�� ���� ������ ���޴�������ʱ�ȴ�С ��ֵ����)
			                <input name="detail[]" type="checkbox" value="335" >��������ֵ����
			                <input name="detail[]" type="checkbox" value="336" >�ö����ֱ��ͼ�������
			                <input name="detail[]" type="checkbox" value="337" >�������޵ĺ������䵼��
			                <input name="detail[]" type="checkbox" value="338" >ţ��һ������ģ�Newton-Leibniz����ʽ
			                <input name="detail[]" type="checkbox" value="339" >�������ֺͶ����ֵĻ�Ԫ���ַ�(��ԪҪ���ף���Ҫ����dx  �����ֻ�ԪҪע��������ҲҪ��)��ֲ����ַ�
			                <input name="detail[]" type="checkbox" value="340" >�����������Ǻ���������ʽ�ͼ��������Ļ���
			                <input name="detail[]" type="checkbox" value="341" >������ָŶ����ֵ�Ӧ��
			               <hr/> <div id="4">�ġ����������Ϳռ��������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="342" >�����ĸ���(�����ƶ�)
			                <input name="detail[]" type="checkbox" value="343" >��������������
			                <input name="detail[]" type="checkbox" value="344" >������������(���� �ɽ���)��������(������ ��������)
			                <input name="detail[]" type="checkbox" value="345" >�����Ļ�ϻ�(����������������ʽ������ͬ �������� ����������ֱ�ߵľ���)
			                <input name="detail[]" type="checkbox" value="346" >��������ֱ(������Ϊ��)��ƽ��(��������������)������
			                <input name="detail[]" type="checkbox" value="347" >�������ļн�(���� ���� ����)
			                <input name="detail[]" type="checkbox" value="348" >������������ʽ��������
			                <input name="detail[]" type="checkbox" value="349" >��λ����
			                <input name="detail[]" type="checkbox" value="350" >�������뷽������
			                <input name="detail[]" type="checkbox" value="351" >���淽�̺Ϳռ����߷��̵ĸ���
			                <input name="detail[]" type="checkbox" value="352" >ƽ�淽��(�㷨ʽ �ؾ�ʽ һ��ʽ ƽ��������)��ֱ�߷���(�Գ�ʽ ����ʽ һ��ʽ)
			                <input name="detail[]" type="checkbox" value="353" >ƽ����ƽ�桢ƽ����ֱ�ߡ�ֱ����ֱ�ߵ��Լ�ƽ�С���ֱ������(ת��Ϊ����֮��Ĺ�ϵ)
			                <input name="detail[]" type="checkbox" value="354" >�㵽ƽ��͵㵽ֱ�ߵľ���(����ƽ���ı���)
			                <input name="detail[]" type="checkbox" value="355" >���桢ĸ��ƽ���������������
			                <input name="detail[]" type="checkbox" value="356" >��ת��Ϊ���������ת����ķ���
			                <input name="detail[]" type="checkbox" value="357" >���õĶ������淽�̼���ͼ��
			                <input name="detail[]" type="checkbox" value="358" >�ռ����ߵĲ������̺�һ�㷽��
			                <input name="detail[]" type="checkbox" value="359" >�ռ��������������ϵ�ͶӰ���߷���
			              <hr/> <div id="5">�塢��Ԫ����΢��ѧ</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="360" >��Ԫ�����ĸ���
			                <input name="detail[]" type="checkbox" value="361" >��Ԫ�����ļ�������
			                <input name="detail[]" type="checkbox" value="362" >��Ԫ�����ļ���(���޴��ڵ��ж�)�������ĸ���
			                <input name="detail[]" type="checkbox" value="363" >�н�������϶�Ԫ��������������(�н��� ��ֵ���� ��ֵ����)
			                <input name="detail[]" type="checkbox" value="364" >��Ԫ����ƫ������ȫ΢��(��ȫ����������)
			                <input name="detail[]" type="checkbox" value="365" >ȫ΢�ִ��ڵı�Ҫ����(���� ƫ������ ���ⷽ��ķ���������)�ͳ������(ƫ������������)
			                <input name="detail[]" type="checkbox" value="366" >��Ԫ���Ϻ��������������󵼷�
			                <input name="detail[]" type="checkbox" value="367" >����ƫ���������������ݶ�
			                <input name="detail[]" type="checkbox" value="368" >�ռ����ߵ����ߺͷ�ƽ��(�������̡�ע����x,y,zΪ���� ������)
			                <input name="detail[]" type="checkbox" value="369" >�������ƽ��ͷ���
			                <input name="detail[]" type="checkbox" value="370" >��Ԫ�����Ķ���̩�չ�ʽ
			                <input name="detail[]" type="checkbox" value="371" >��Ԫ�����ļ�ֵ��������ֵ
			                <input name="detail[]" type="checkbox" value="372" >��Ԫ���������ֵ����Сֵ�����Ӧ��
			               <hr/> <div id="6">������Ԫ��������ѧ</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="373" >���ػ��������ػ��ֵĸ�����ʡ������Ӧ��
			                <input name="detail[]" type="checkbox" value="374" >�������߻��ֵĸ�����ʼ�����
			                <input name="detail[]" type="checkbox" value="375" >�������߻��ֵĹ�ϵ
			                <input name="detail[]" type="checkbox" value="376" >���֣�Green����ʽ
			                <input name="detail[]" type="checkbox" value="377" >ƽ�����߻�����·���޹ص�����(ע�ⵥ��ͨ���븴��ͨ�������)
			                <input name="detail[]" type="checkbox" value="378" >��֪ȫ΢����ԭ����
			                <input name="detail[]" type="checkbox" value="379" >�������߻��ֵĸ�����ʼ�����
			                <input name="detail[]" type="checkbox" value="380" >����������ֵĹ�ϵ
			                <input name="detail[]" type="checkbox" value="381" >��˹��Gauss����ʽ
			                <input name="detail[]" type="checkbox" value="382" >˹�п�˹��STOKES)��ʽ
			                <input name="detail[]" type="checkbox" value="383" >ɢ�ȡ����ȵĸ������
			                <input name="detail[]" type="checkbox" value="384" >���߻��ֺ�������ֵ�Ӧ��
			                <hr/><div id="7">�ߡ������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="385" >�������(���������к͵ĸ���)�������뷢ɢ�ĸ���
			                <input name="detail[]" type="checkbox" value="386" >���������ĺ�(�ͺ���)�ĸ���
			                <input name="detail[]" type="checkbox" value="387" >�����Ļ��������������ı�Ҫ����(һ��������)
			                <input name="detail[]" type="checkbox" value="388" >���μ�����p�����Լ����ǵ�������
			                <input name="detail[]" type="checkbox" value="389" >����������Ե��б�(�Ƚ� ��ֵ ��ֵ)
			                <input name="detail[]" type="checkbox" value="390" >��������������Ķ���(һ��������ݼ�)
			                <input name="detail[]" type="checkbox" value="391" >��������ľ�����������������
			                <input name="detail[]" type="checkbox" value="392" >�����������������ͺ����ĸ���
			                <input name="detail[]" type="checkbox" value="393" >�ݼ������������뾶���������䣨ָ�����䣩��������
			                <input name="detail[]" type="checkbox" value="394" >�ݼ����ĺͺ���(���������Ҫ��)
			                <input name="detail[]" type="checkbox" value="395" >�ݼ����������������ڵĻ�������(���������������� ������ �ɻ��ɵ����������䲻��)
			                <input name="detail[]" type="checkbox" value="396" >���ݼ����ĺͺ�������(���������Ҫ��)
			                <input name="detail[]" type="checkbox" value="397" >�����ݼ���չ��ʽ(���������Ҫ��)
			                <input name="detail[]" type="checkbox" value="398" >�����ĸ���Ҷ��Fourier��ϵ���븵��Ҷ����
			                <input name="detail[]" type="checkbox" value="399" >�������ף�Dlrichlei������
			                <input name="detail[]" type="checkbox" value="100" >������[-l��l]�ϵĸ���Ҷ������������[��,l]�ϵ����Ҽ��������Ҽ���
			                <hr/><div id="8">�ˡ���΢�ַ���</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="101" >��΢�ַ��̵Ļ�������
			                <input name="detail[]" type="checkbox" value="102" >�����ɷ���ķ���
			                <input name="detail[]" type="checkbox" value="103" >���΢�ַ���
			                <input name="detail[]" type="checkbox" value="104" >һ������΢�ַ���
			                <input name="detail[]" type="checkbox" value="105" >��Ŭ����Bernoulli������
			                <input name="detail[]" type="checkbox" value="106" >ȫ΢�ַ���
			                <input name="detail[]" type="checkbox" value="107" >���ü򵥵ı�����������ĳЩ΢�ַ���
			                <input name="detail[]" type="checkbox" value="108" >�ɽ��׵ĸ߽�΢�ַ���
			                <input name="detail[]" type="checkbox" value="109" >����΢�ַ��̽�����ʼ���Ľṹ����
			                <input name="detail[]" type="checkbox" value="110" >���׳�ϵ���������΢�ַ���
			                <input name="detail[]" type="checkbox" value="111" >���ڶ��׵�ĳЩ��ϵ���������΢�ַ���
			                <input name="detail[]" type="checkbox" value="112" >�򵥵Ķ��׳�ϵ�����������΢�ַ���
			                <input name="detail[]" type="checkbox" value="113" >ŷ����Euler������
			                <input name="detail[]" type="checkbox" value="114" >΢�ַ��̼�Ӧ��
			                <hr/><div id="9">�š�����ʽ</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="115" >����ʽ�ĸ���ͻ�������(ת�ò��� �������б�� ������ �ɱ��� ���пɼ��� һ�г�������һ�в���)
			                <input name="detail[]" type="checkbox" value="116" >����ʽ���У��У�չ������(����ʽ ��������ʽ)
			                <input name="detail[]" type="checkbox" value="117" >����ʽ�ļ���(����ʽ ������ ��ѧ���ɷ�)
			                <hr/><div id="10">ʮ������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="118" >����ĸ���
			                <input name="detail[]" type="checkbox" value="119" >�������������
			                <input name="detail[]" type="checkbox" value="120" >����ĳ˷�
			                <input name="detail[]" type="checkbox" value="121" >�������
			                <input name="detail[]" type="checkbox" value="122" >����˻�������ʽ
			                <input name="detail[]" type="checkbox" value="123" >�����ת��
			                <input name="detail[]" type="checkbox" value="124" >�����ĸ��������
			                <input name="detail[]" type="checkbox" value="125" >�������ĳ�ֱ�Ҫ����
			                <input name="detail[]" type="checkbox" value="126" >�������
			                <input name="detail[]" type="checkbox" value="127" >����ĳ��ȱ任(������� �ⷽ���� ������ʽ �������鼫���޹���)
			                <input name="detail[]" type="checkbox" value="128" >���Ⱦ���
			                <input name="detail[]" type="checkbox" value="129" >�������(�Է�����ʽ�����)
			                <input name="detail[]" type="checkbox" value="130" >����ȼ�
			                <input name="detail[]" type="checkbox" value="131" >�ֿ����������(�໥�ķֿ�֮��Ҳ��ͬ�;���)
			               <hr/> <div id="11">ʮһ������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="132" >�����ĸ���
			                <input name="detail[]" type="checkbox" value="133" >������������Ϻ����Ա�ʾ(������ϵ���Ƿ�Ϊ��)
			                <input name="detail[]" type="checkbox" value="134" >���������������������޹�(�����Ƿ����һ��ϵ����Ϊ��)
			                <input name="detail[]" type="checkbox" value="135" >������ļ��������޹���
			                <input name="detail[]" type="checkbox" value="136" >�ȼ�������
			                <input name="detail[]" type="checkbox" value="137" >���������
			                <input name="detail[]" type="checkbox" value="138" >�����������������֮��Ĺ�ϵ
			                <input name="detail[]" type="checkbox" value="139" >�����ռ��Լ���ظ���
			                <input name="detail[]" type="checkbox" value="140" >nά�����ռ�Ļ��任������任
			                <input name="detail[]" type="checkbox" value="141" >���ɾ���
			                <input name="detail[]" type="checkbox" value="142" >�������ڻ�
			                <input name="detail[]" type="checkbox" value="143" >�����޹�������������淶������
			                <input name="detail[]" type="checkbox" value="144" >�淶������
			                <input name="detail[]" type="checkbox" value="145" >��������������
			                <hr/><div id="12">ʮ�������Է�����</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="146" >���Է�����Ŀ���ķ(���룺����Ĭ)��Cramer������
			                <input name="detail[]" type="checkbox" value="147" >������Է������з����ĳ�ֱ�Ҫ����
			                <input name="detail[]" type="checkbox" value="148" >��������Է������н�ĳ�ֱ�Ҫ����
			                <input name="detail[]" type="checkbox" value="149" >���Է����������ʺͽ�Ľṹ
			                <input name="detail[]" type="checkbox" value="150" >������Է�����Ļ�����ϵ(����������)��ͨ��
			                <input name="detail[]" type="checkbox" value="151" >��ռ�(���������������)
			                <input name="detail[]" type="checkbox" value="152" >��������Է������ͨ��(�б任 �����)
			                <hr/><div id="13">ʮ�������������ֵ����������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="153" >���������ֵ�����������ĸ������
			                <input name="detail[]" type="checkbox" value="154" >���Ʊ任�����ƾ���ĸ������(����ͬ�ȣ���ͬ��δ������)
			                <input name="detail[]" type="checkbox" value="155" >��������ƶԽǻ��ĳ�ֱ�Ҫ����(����n�������޹���������)�����ƶԽǾ���
			                <input name="detail[]" type="checkbox" value="156" >ʵ�Գƾ��������ֵ���������������ƶԽǾ���
			                <hr/><div id="14">ʮ�ġ�������</div><br/><hr/>
			                <input name="detail[]" type="checkbox" value="157" >�����ͼ�������ʾ
			                <input name="detail[]" type="checkbox" value="158" >��ͬ�任���ͬ����
			                <input name="detail[]" type="checkbox" value="159" >�����͵���
			                <input name="detail[]" type="checkbox" value="160" >���Զ���
			                <input name="detail[]" type="checkbox" value="161" >�����͵ı�׼��(ֻ��ӳ����ֵ����������)�͹淶��(ϵ��ֻ����1��-1��0)
			                <input name="detail[]" type="checkbox" value="162" >�������任(ϵ��������ֵ)���䷽����������Ϊ��׼��
			                <input name="detail[]" type="checkbox" value="163" >�����ͼ�������������
			                <hr/><div id="15">ʮ�塢����¼��͸���</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="164" >����¼�(���ܷ������ܲ�����������)�������ռ�(�������е�������)
			                <input name="detail[]" type="checkbox" value="165" >�¼��Ĺ�ϵ(���� ��� �� �� �� ���� ����)������(���� ���� ��� ������ �Բ��¼� ����ͼ)
			                <input name="detail[]" type="checkbox" value="166" >��ȫ�¼���(���л����¼��ļ���)
			                <input name="detail[]" type="checkbox" value="167" >���ʵĸ���
			                <input name="detail[]" type="checkbox" value="168" >���ʵĻ�������(�Ǹ��� �淶�� ���пɼ���)
			                <input name="detail[]" type="checkbox" value="169" >�ŵ��͸���
			                <input name="detail[]" type="checkbox" value="170" >�����͸���
			                <input name="detail[]" type="checkbox" value="171" >��������
			                <input name="detail[]" type="checkbox" value="172" >���ʵĻ�����ʽ
			                <input name="detail[]" type="checkbox" value="173" >�¼��Ķ�����
			                <input name="detail[]" type="checkbox" value="174" >�����ظ�����
			               <hr/><div id="16"> ʮ�����������������ʷֲ�</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="175" >�������(�¼����������)������ʷֲ�(ȡĳһ����������ĸ���)
			                <input name="detail[]" type="checkbox" value="176" >��������ķֲ������ĸ��������
			                <input name="detail[]" type="checkbox" value="177" >��ɢ����������ĸ��ʷֲ�
			                <input name="detail[]" type="checkbox" value="178" >��������������ĸ����ܶ�
			                <input name="detail[]" type="checkbox" value="179" >������������ĸ��ʷֲ�
			                <input name="detail[]" type="checkbox" value="180" >������������ĸ��ʷֲ�
			                <hr/><div id="17">ʮ�ߡ���ά�������������ʷֲ�</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="181" >��ά�����������ֲ�
			                <input name="detail[]" type="checkbox" value="182" >��ά��ɢ����������ĸ��ʷֲ�����Ե�ֲ��������ֲ�
			                <input name="detail[]" type="checkbox" value="183" >��ά��������������ĸ����ܶȡ���Ե�����ܶȺ������ܶ�
			                <input name="detail[]" type="checkbox" value="184" >��������Ķ�����(�ж�)�������
			                <input name="detail[]" type="checkbox" value="185" >���ö�ά��������ĸ��ʷֲ�
			                <input name="detail[]" type="checkbox" value="186" >����������������������򵥺����ķֲ�
			               <hr/> <div id="18">ʮ�ˡ������������������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="187" >�����������ѧ��������ֵ��������ͱ�׼�������
			                <input name="detail[]" type="checkbox" value="188" >���������������ѧ����
			                <input name="detail[]" type="checkbox" value="189" >�ء�Э����
			                <input name="detail[]" type="checkbox" value="190" >���ϵ����������
			                <hr/><div id="19">ʮ�š��������ɺ����ļ��޶���</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="191" >�б�ѩ��Chebyshev������ʽ
			                <input name="detail[]" type="checkbox" value="192" >�б�ѩ���������
			                <input name="detail[]" type="checkbox" value="193" >��Ŭ����������
			                <input name="detail[]" type="checkbox" value="194" >���գ�Khinchine����������
			                <input name="detail[]" type="checkbox" value="195" >�Ī����������˹����
			                <input name="detail[]" type="checkbox" value="196" >��ά���ֵ²���Levy��Undbe������
			               <hr/> <div id="20">��ʮ������ͳ�ƵĻ�������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="197" >����(���о������ȫ����ɵļ���)
			                <input name="detail[]" type="checkbox" value="198" >����(�����е�ÿ��Ԫ��)
			                <input name="detail[]" type="checkbox" value="199" >���������(����ͬ�ֲ�)
			                <input name="detail[]" type="checkbox" value="200" >ͳ����(����֪��������������)
			                <input name="detail[]" type="checkbox" value="201" >������ֵ
			                <input name="detail[]" type="checkbox" value="202" >���������������(k��ԭ���k�����ľ�)
			                <input name="detail[]" type="checkbox" value="203" >x2�ֲ���t�ֲ���F�ֲ�
			                <input name="detail[]" type="checkbox" value="204" >��λ��
			                <input name="detail[]" type="checkbox" value="205" >��̬�����ĳЩ���ó����ֲ�
			                <hr/><div id="21">��ʮһ����������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="206" >����Ƶĸ���(���������Ʋ���)
			                <input name="detail[]" type="checkbox" value="207" >������(�����ĺ���)�����ֵ(����������һ��ȡֵ)
			                <input name="detail[]" type="checkbox" value="208" >�ع��Ʒ�
			                <input name="detail[]" type="checkbox" value="209" >�����Ȼ���Ʒ�
			                <input name="detail[]" type="checkbox" value="210" >����������ѡ��׼(��ƫ�� ��Ч�� һ����)
			                <input name="detail[]" type="checkbox" value="211" >������Ƶĸ���
			                <input name="detail[]" type="checkbox" value="212" >������̬����ľ�ֵ�ͷ�����������
			                <input name="detail[]" type="checkbox" value="213" >������̬����ľ�ֵ��ͷ���ȵ��������
			                <hr/><div id="22">��ʮ�����������</div><a href="#first">����ǰ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#last">�����</a><br/><hr/>
			                <input name="detail[]" type="checkbox" value="214" >�����Լ���
			                <input name="detail[]" type="checkbox" value="215" >���������������
			                <input name="detail[]" type="checkbox" value="216" >������������̬����ľ�ֵ�����ļ������
			                <br><br><br><br>
  �Ѷ�ϵ����                                                  <select name="level" style="width:1000px;background-color:#00dd00" id="last">
			                 <option value='A' selected> �Ѷ�һ</option> 
			                 <option value='B'> �Ѷȶ�</option>
			                 <option value='C'> �Ѷ���</option>
			                 <option value='D'> �Ѷ���</option>
			                 <option value='E'> �Ѷ���</option> 
			                 </select><br><br><br><br>
  ���ͣ�                                                          
			                 <input name="type[]" type="checkbox" value='A'>  ѡ���� 
			                 <input name="type[]" type="checkbox" value='B'>  �����
			                 <input name="type[]" type="checkbox" value='C'>  ����� 
			                 <input name="type[]" type="checkbox" value='D'>  ֤����
			                 <br><br><br><br>
  ��ע��                                                            <input name="addition" type="text" size="24" maxlength="1000"><br><br><br><br>
��Ƶ�ϴ�:                    <input name="vedio" type="file" style="width:1000px"/>
                             <input type="hidden" name="MAX_FILE_SIZE" value="2048000000" /><br>

 <input name="submit" type="submit" value="�ύ"> 
 <input name="reset" type="reset" value="����">
</form>
<?php 
$getid = mysql_insert_id($conn);
echo $getid;
?>
<a href="show.php">��ʾ����</a>
<a href="check.php?id=<?php echo $getid ?>">��Ŀ���</a>
<a href="test4.php?id=<?php echo $getid ?>">��Ŀ������ҳ��</a>
</html>