<?php
error_reporting(E_ALL & ~E_NOTICE);

    include_once 'conn/conn1.php';
	include_once 'conn/conn.php';
	require_once 'Zend/Mail.php';						//���÷����ʼ����ļ�
	require_once 'Zend/Mail/Transport/Smtp.php';		//����SMTP��֤�ļ�
	date_default_timezone_set('Asia/Shanghai');//'Asia/Shanghai'   ����/�Ϻ�
	$today = date('Y-m-j');
	$reback = '0';
	$url ='http://s-69291.gotocdn.com/activation.php';
	$url .= '?name='.trim($_GET['name']).'&pwd='.md5(trim($_GET['pwd']));
	
	//���ͼ����ʼ�
	$subject="������Ļ�ȡ";
	$mailbody='ע��ɹ������ļ������ǣ�'.'<a href="'.$url.'" target="_blank">'.$url.'</a><br>'.'�����õ�ַ�����������û���';
//�����ʼ�����
	$envelope="SHUTCCC@163.com";		//�����¼ʹ�õ�����
	
	/*   smtp���԰淢���ʼ���ʽ��ʹ��smtp��Ϊ������
				$tr = new Zend_Mail_Transport_Smtp('192.168.1.247');
				$mail = new Zend_Mail();				
				$mail->addTo('cym3100@163.com','��ȡ�û�ע�ἤ����');
				$mail->setFrom('cym3100@163.com','���տƼ�����ģ�����������䣬��ϲ���û�ע��ɹ���');
				$mail->setSubject('��ȡע���û��ļ�����');
				$mail->setBodyHtml($mailbody);
				$mail->send($tr);
	*/
/*   ����淢���ʼ�����  */

	$config = array('auth' => 'login',
            'username' => 'SHUTCCC',
            'password' => 'WANGHANGYUE');				//����SMTP����֤����
	$transport = new Zend_Mail_Transport_Smtp('smtp.163.com', $config);		//ʵ������֤�Ķ���
	$mail = new Zend_Mail('GBK');			//ʵ���������ʼ�����
    $mail->setBodyHtml($mailbody);				//�����ʼ�����
    $mail->setFrom($envelope, 'LEARN+PLUS���䣬��ϲ���û�ע��ɹ���');	//�����ʼ�����ʹ�õ�����
    $mail->addTo($_GET['email'], '��ȡ�û�ע�ἤ����');		//�����ʼ��Ľ�������
    $mail->setSubject('��ȡע���û��ļ�����');				//�����ʼ�����
    $mail->send($transport);								//ִ�з��Ͳ���
	
/*   ����淢���ʼ�����  */	

   $sql = "INSERT INTO `test` (`name`, `password`, `email`, `class1`, `count`, `active`, `today`, `cando`,`todaycando`, `cannot`,`todaycannot`, `todayover`, `key1`, `key1all`,`error`,`errorall`) VALUES ('".trim($_GET['name'])."','".md5(trim($_GET['pwd']))."','".$_GET['email']."','".$_GET['class1']."',0,0,'$today','', '', '', '', '', '', '', '', '')";
   mysql_query("SET NAMES 'UTF8'");
   $num = $conne->uidRst($sql);
		if($num == 1){
			$reback = '1';
		}
	echo $reback;
?>