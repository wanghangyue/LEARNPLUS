// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('name').focus();
	$('step1').onclick = function(){
		if($('name').value != '' && $('yanzheng').value != ''&& $('newpass').value != ''&& $('confirmpass').value != ''&&($('confirmpass').value == $('newpass').value)){
			xmlhttp.open('get','changepass_chk.php?name='+$('name').value+'&yanzheng='+$('yanzheng').value+'&newpass='+$('newpass').value+'&confirmpass='+$('confirmpass').value,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('�޸�����ɹ������ȷ������Ӧ��!');
						location = 'main.php';
					}else{
						alert('��д��Ϣ����');
					}
				}
			}
			xmlhttp.send(null);
		}else{
			alert('����д�����Ϣ');
			$('name').focus();
			return false;
		}
	}
}