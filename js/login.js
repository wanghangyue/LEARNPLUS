// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){

	$('lgname').focus();
	
	$('lgname').onkeydown = function(){
		if(event.keyCode == 13){
			$('lgpwd').select();
			 chklg();
		}
	}
	$('lgpwd').onkeydown = function(){
		if(event.keyCode == 13){
			 chklg();
		}
	}
	
	$('lgbtn').onclick = chklg;
	function chklg(){
		if($('lgname').value.match(/^[a-zA-Z_]\w*$/) == null){
			$('namediv1').innerHTML = '<font size="3" color="yellow">����ȷ��д�û���</font>';
			$('lgname').select();
			return false;
		}
		if($('lgname').value == ''){
			$('namediv1').innerHTML = '<font size="3" color="yellow" >����д�û���</font>';
			$('lgname').focus();
			return false;
		}
		if($('lgpwd').value == ''){
			$('pwddiv11').innerHTML = '<font size="3" color="yellow">����д����</font>';
			$('lgpwd').focus();
			return false;
		}
		
		url = 'login_chk.php?act='+(Math.random())+'&name='+$('lgname').value+'&pwd='+$('lgpwd').value;
		xmlhttp.open('get',url,true);
		
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '0'){
						alert('����û�м�����ȵ�¼������м��������');
					}else if(msg == '1'){
						alert('�û����������������������2�λ���');
						$('lgpwd').select();
					}else if(msg == '2'){
						alert('�û����������������������1�λ���');
						$('lgpwd').select();
					}else if(msg == '3'){
						alert('��Ϊ��¼�������࣬�����ʺ��ѱ����ᣬ����ϵ����Ա');
						$('lgname').select();
					}else if(msg == '4'){
						alert('�û����������');
						$('lgname').select();
					}else if(msg == '-1'){
						
						location = 'main.php';
					}else{
						alert(msg);
					}
					
				}
			}
		}
		xmlhttp.send(null);
	}	
}