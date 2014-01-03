// JavaScript Document
function $$(id){
	return document.getElementById(id);
}     
window.onload = function(){
	
    $$('start1').onclick = start;
	function start(){
		var xmlhttp1 = false;
		if (window.XMLHttpRequest) { 									//Mozilla¡¢SafariµÈä¯ÀÀÆ÷
			xmlhttp1 = new XMLHttpRequest();
		} 
		else if (window.ActiveXObject) { 								//IEä¯ÀÀÆ÷
			try {
				xmlhttp1 = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
			   } catch (e) {}
			}
		}

		var cont= $$('cont10').value;
        url = 'main1teststartresponse1.php?act='+(Math.random());
		xmlhttp1.open('get',url,true);
		xmlhttp1.onreadystatechange = function(){
			if(xmlhttp1.readyState == 4){
				if(xmlhttp1.status == 200){
					msg = xmlhttp1.responseText;
			            //var info = eval("(" + msg + ")");
						$$('cont10').innerHTML = msg;
						//$$('class').innerHTML = info.class;
						//$$('level').innerHTML = info.level;
						//$$('type').innerHTML = info.type;
						  
						 
			       }
			}
		}
		xmlhttp1.send(null);
 
		/*else if(cont!= '')
		{
			
			url = 'main1teststartresponse.php?act='+(Math.random())+'&cont='+cont;
			xmlhttp.open('get',url,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						msg = xmlhttp.responseText;
				            var info = eval("(" + msg + ")");
							$$('id').innerHTML = info.id;
							$$('class').innerHTML = info.class;
							$$('level').innerHTML = info.level;
							$$('type').innerHTML = info.type;
				       }
				}
			}
			xmlhttp.send(null);	
		}	*/
	}	
	

}
