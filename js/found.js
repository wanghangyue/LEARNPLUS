// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('name').focus();
	$('step1').onclick = function(){
		$('floatingBarsG').style.display="block";
		if($('name').value != '' && $('email').value != ''){
			xmlhttp.open('get','found_chk.php?name='+$('name').value+'&email='+$('email').value,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('�һ�����ɹ������¼����ע������!');
						location = 'index.html';
					}else{
						alert('��д��Ϣ����');
						location = 'found.php';
						$('floatingBarsG').style.display="none";
					}
				}
			}
			xmlhttp.send(null);
		}else{
			alert('����д������Ϣ');
			$('floatingBarsG').style.display="none";
			$('name').focus();
			return false;
		}
	}
}