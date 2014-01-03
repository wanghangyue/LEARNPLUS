// JavaScript Document
function $$(id){
	return document.getElementById(id);
}     
window.onload = function(){
	
    $$('detailinfo').onclick = detailinfo;
	function detailinfo(){
		var xmlhttp2 = false;
		if (window.XMLHttpRequest) { 									//Mozilla¡¢SafariµÈä¯ÀÀÆ÷
			xmlhttp2 = new XMLHttpRequest();
		} 
		else if (window.ActiveXObject) { 								//IEä¯ÀÀÆ÷
			try {
				xmlhttp2 = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
			   } catch (e) {}
			}
		}

		var cont= $$('cont10').value;
			url = 'main1teststartresponse.php?act='+(Math.random())+'&cont='+cont;
			xmlhttp2.open('get',url,true);
			xmlhttp2.onreadystatechange = function(){
				if(xmlhttp2.readyState == 4){
					if(xmlhttp2.status == 200){
						msg = xmlhttp2.responseText;
				            var info = eval("(" + msg + ")");
							$$('id').innerHTML = info.id;
							$$('class').innerHTML = info.class;
							$$('level').innerHTML = info.level;
							$$('type').innerHTML = info.type;
				       }
				}
			}
			xmlhttp2.send(null);	
		 
	}	
	

}
