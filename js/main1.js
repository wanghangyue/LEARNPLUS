// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){

	
	$('main1btn').onclick = main1;
	function main1(){
		url = 'main1response.php?act='+(Math.random())+'&class='+$('fenlei').value;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						 location = 'main1test.php';
						 
					}else{
						alert(msg);
					}
				}
			}
		}
		xmlhttp.send(null);
	}	
}