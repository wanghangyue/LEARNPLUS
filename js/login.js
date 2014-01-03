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
			$('namediv1').innerHTML = '<font size="3" color="yellow">请正确填写用户名</font>';
			$('lgname').select();
			return false;
		}
		if($('lgname').value == ''){
			$('namediv1').innerHTML = '<font size="3" color="yellow" >请填写用户名</font>';
			$('lgname').focus();
			return false;
		}
		if($('lgpwd').value == ''){
			$('pwddiv11').innerHTML = '<font size="3" color="yellow">请填写密码</font>';
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
						alert('您还没有激活，请先登录邮箱进行激活操作。');
					}else if(msg == '1'){
						alert('用户名或密码输入错误，您还有2次机会');
						$('lgpwd').select();
					}else if(msg == '2'){
						alert('用户名或密码输入错误，您还有1次机会');
						$('lgpwd').select();
					}else if(msg == '3'){
						alert('因为登录次数过多，您的帐号已被冻结，请联系管理员');
						$('lgname').select();
					}else if(msg == '4'){
						alert('用户名输入错误');
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