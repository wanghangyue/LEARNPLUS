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
						alert('修改密码成功，点击确定进入应用!');
						location = 'main.php';
					}else{
						alert('填写信息错误！');
					}
				}
			}
			xmlhttp.send(null);
		}else{
			alert('请填写完成信息');
			$('name').focus();
			return false;
		}
	}
}