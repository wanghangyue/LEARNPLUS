// JavaScript Document

function boxs(v){
window.scrollTo(0,0);
var bo = document.getElementsByTagName('body')[0];
var ht = document.getElementsByTagName('html')[0];
var boht = document.getElementById('boxs'); 
boht.innerHTML = '';
bo.style.height='auto';
bo.style.overflow='auto';
ht.style.height='auto'; 
if(v == 1){ 
bo.style.height='100%';
bo.style.overflow='hidden';
ht.style.height='100%'; 
boht.innerHTML = '<div id="bg"></div><div id="info"><div id="center"><strong>”—«ÈÃ·–—£∫</strong><p><a href="javascript:boxs(0);">πÿ±’</a></p></div></div>'; 
}
} 