<?php
	include_once 'conn/conn.php';
	require_once 'Zend/Mail.php';						//���÷����ʼ����ļ�
	require_once 'Zend/Mail/Transport/Smtp.php';		//����SMTP��֤�ļ�
	$reback = '0';
	$name = $_GET['name'];
	$email1 = $_GET['email'];
	
	$sql = "select email from test where name = '".$name."'";
	$email = $conne->getFields($sql,0);
	if($email == $email1){
		$rnd = rand(1000,time());
		$sql = "update test set password = '".md5($rnd)."' where name = '".$name."' and email = '".$email."'";
		$tmpnum = $conne->uidRst($sql);
		if($tmpnum >= 1){
			//���������ʼ�
			$subject="�һ�����";
			$mailbody='�����һسɹ����û���Ϊ'.$name.'����֤����'.$rnd.'�����μǴ���֤�룬����'.'<a href="http://s-69291.gotocdn.com/changepass.php" target="_blank">'.'������ӵ�Ŀ��ҳ��ƾ����֤���޸ĵ�¼����'.'</a>';
			$envelope="SHUTCCC@163.com";
			//$envelope="mrsoft8888@sohu.com";		//����涨���¼ʹ�õ�����
			
			/*  smtp���԰淢���ʼ���ʽ��ʹ��smtp��Ϊ������*/
				/*$tr = new Zend_Mail_Transport_Smtp('192.168.1.247');
				
				$mail = new Zend_Mail();				
				$mail->addTo($email,'��ȡ�û�������');
				$mail->setFrom('cym3100@163.com','���տƼ�����ģ�����������䣬�޸��û�ע�����룡');
				$mail->setSubject($subject);
				$mail->setBodyHtml($mailbody);*/
				//$mail->send($tr);

/*   ����淢���ʼ�����  */

	 $config = array('auth' => 'login',
            'username' => 'SHUTCCC',
            'password' => 'WANGHANGYUE');				//����SMTP����֤����
	$transport = new Zend_Mail_Transport_Smtp('smtp.163.com', $config);		//ʵ������֤�Ķ���
	$mail = new Zend_Mail('GBK');			//ʵ���������ʼ�����
    $mail->setBodyHtml($mailbody);				//�����ʼ�����
    $mail->setFrom($envelope, 'LEARN+PLUS���䣬�޸��û�ע�����룡');	//�����ʼ�����ʹ�õ�����
    $mail->addTo($email, '��ȡ�û�������');		//�����ʼ��Ľ�������
    $mail->setSubject($subject);				//�����ʼ�����
    $mail->send($transport);								//ִ�з��Ͳ��� 
	
/*   ����淢���ʼ�����  */	
if(false ==$mail->send($transport) ){
				$reback = '-1';
			}else{
				$reback = '1';
			}	
		}else{
			$reback = '2';
		}
	}else{
		$reback = $sql;
	}
	echo $reback;
?>
