// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	
	$('messbut').onclick = chklg;
	function chklg(){
		
		url = 'message.php?act='+(Math.random())+'&name='+$('name').value+'&email='+$('email').value+'&subject='+$('subject').value+'&message='+$('message').value;
		xmlhttp.open('get',url,true);
		
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('您的信息已经成功发送');
					}
					
				}
			}
		}
		xmlhttp.send(null);
	}	
}