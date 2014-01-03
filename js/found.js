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
						alert('找回密码成功，请登录邮箱注册邮箱!');
						location = 'index.html';
					}else{
						alert('填写信息错误！');
						location = 'found.php';
						$('floatingBarsG').style.display="none";
					}
				}
			}
			xmlhttp.send(null);
		}else{
			alert('请填写完整信息');
			$('floatingBarsG').style.display="none";
			$('name').focus();
			return false;
		}
	}
}