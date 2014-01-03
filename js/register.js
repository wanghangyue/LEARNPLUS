// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('regname').focus();
	var cname1,cname2,cpwd1,cpwd2,cemail;
	//设置激活按钮
	function chkreg(){
		if((cname1 == 'yes') && (cname2 == 'yes') && (cpwd1 == 'yes') && (cpwd2 == 'yes') && (cemail == 'yes')){
			$('regbtn').disabled =false;
		}else{
			$('regbtn').disabled = true;
		}
	}
	//验证用户名
	$('regname').onkeyup = function (){
		name = $('regname').value;
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('namediv').innerHTML = '<font color=yellow size=3>以字母或下划线开头</font>';
			cname1 = '';
		}else if(name.length < 2){
			$('namediv').innerHTML = '<font color=yellow size=3>注册名必须大于2位</font>';
			cname1 = '';
		}else{
			$('namediv').innerHTML = '<font color=green>注册名称符合标准</font>';
			cname1 = 'yes';
		}
		chkreg();
	}
	//验证是否存在该用户
	$('regname').onblur = function(){
		name = $('regname').value;
		if(cname1 == 'yes'){
			xmlhttp.open('get','chkname.php?name='+name,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var msg = xmlhttp.responseText;
						if(msg == '1'){
							$('namediv').innerHTML="<font color=green>该用户名可以使用</font>";
							cname2 = 'yes';
						}else if(msg == '2'){
							$('namediv').innerHTML="<font color=yellow size=3>用户名被占用</font>";
							cname2 = '';
						}else{
							$('namediv').innerHTML="<font color=yellow size=3>"+msg+"</font>";
							cname2 = '';
						}
					}
				}
				chkreg();
			}
			xmlhttp.send(null);
		}
	}
	//验证密码
	$('regpwd1').onkeyup = function(){
		pwd = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd.length < 6){
			$('pwddiv1').innerHTML = '<font color=yellow size=3>密码长度最少6位</font>';
			cpwd1 = '';
		}else if(pwd.length >= 6 && pwd.length < 12){
			$('pwddiv1').innerHTML = '<font color=green>密码强度：弱</font>';
			cpwd1 = 'yes';
		}else if((pwd.match(/^[0-9]*$/)!=null) || (pwd.match(/^[a-zA-Z]*$/) != null )){
			$('pwddiv1').innerHTML = '<font color=green>密码强度：中</font>';
			cpwd1 = 'yes';
		}else{
			$('pwddiv1').innerHTML = '<font color=green>密码强度：高</font>';
			cpwd1 = 'yes';
		}
		if(pwd2 != '' && pwd != pwd2){
			$('pwddiv2').innerHTML = '<font color=yellow size=3>两次密码不一致!</font>';
			cpwd2 = '';
		}else if(pwd2 != '' && pwd == pwd2){
			$('pwddiv2').innerHTML = '<font color=green>密码输入正确</font>';
			cpwd2 = 'yes';
		}
		chkreg();
	}
	//验证确认密码
	$('regpwd2').onkeyup = function(){
		pwd1 = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd1 != pwd2){
			$('pwddiv2').innerHTML = '<font color=yellow size=3>两次密码不一致</font>';
			cpwd2 = '';
		}else{
			$('pwddiv2').innerHTML = '<font color=green>密码输入正确</font>';
			cpwd2 = 'yes';
			chkreg();
		}
	}
	//验证email
	$('email').onkeyup = function(){
		emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		$('email').value.match(emailreg);
		if($('email').value.match(emailreg) == null){
			$('emaildiv').innerHTML = '<font color=yellow size=3>错误的email格式</font>';
			cemail = '';
		}else{
			$('emaildiv').innerHTML = '<font color=green>输入正确</font>';
			cemail = 'yes';
			
		}
		chkreg();
	}

	 
	 
	//正式注册
	$('regbtn').onclick = function(){
		if($('regname').value==""||$('regpwd1').value==""||$('regpwd2').value==""||$('email').value==""||$('fenlei').value==""){
			alert("您还没有填写全部注册信息！请重新填写。");
			$('regname').focus();
			$('floatingBarsG').style.display="none";
			location = 'register.php';
		}
		else{
			$('floatingBarsG').style.display="block";
			
			var url = 'register_chk.php?name='+$('regname').value+'&pwd='+$('regpwd1').value+'&email='+$('email').value+'&class1='+$('fenlei').value;
			
			
			xmlhttp.open("GET",url,true);
			//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						msg = xmlhttp.responseText;
						if(msg == '1'){
							alert('注册成功，请到您的邮箱中获取激活码！');
							location='main.php';
						}else if(msg == '-1'){
							alert('您的服务器不支持Zend_mail，或者邮箱填写错误。请仔细检查！！');
						}else{
							alert("信息填写错误！请重新填写。");
							$('regname').focus();
							$('floatingBarsG').style.display="none";
							location = 'register.php';
						}
					 
					}
				}
			}
			//xmlhttp.send("name=$'('regname').value'&pwd='$('regpwd1').value'&email='$('email').value'");
			xmlhttp.send(null);
		}
		}
		
}