/*!
 * jQuery simpleTabs v2.0
 *
 * 网址: http://www.imsole.net/?page_id=19
 * 类型: 原创脚本
 * 邮箱: macore@163.com
 *  QQ: 390514201[sole]
 * 发布: 2012-09-25
 * 更新: 2013-03-07 14:54:00 
 * 地点: 河南 | 三门峡
 *
 * 版权所有 2013 | imsole.net
 * 此插件遵循 MIT、GPL2、GNU 许可.
 *
 ***************************
 *
 * 1、此插件为开源插件，请放心使用
 * 2、最终版权、解释权归 imsole.net 所有有
 *
 ***************************
 *
 * html5新增技术总结[html5+css+jQuery+响应式布局] http://imsole.net/html5/
 * 响应式布局在线检测 http://imsole.net/responsive/
 *
 */
;(function($){
	$.fn.simpleTabs = function(o){
		var defs = {
			current : "now",
			action : "mouseover",
			target : "",
			easing : "toggle",
			direction : "left",
			autoPlay : 0,
			speed : 3000,
			time : 400,
			btnPrev : "",
			btnNext : ""
		};
		var obj = this;
		var opt = $.fn.extend({}, defs, o);
		var now = opt.current;
		var action = opt.action;
		var $target = $(opt.target);
		var easing = opt.easing;
		var direction = opt.direction;
		var autoPlay = opt.autoPlay;
		var speed = opt.speed;
		var time = opt.time;
		var btnPrev = $(opt.btnPrev);
		var btnNext = $(opt.btnNext);

		var oTarget_num = "";
		var oTarger_len = $target.length;
		var sStr = "";
		var num = 0;
		var timer = null;
		
		if(easing == "slide"){
			if(direction == "left"){
				sStr = "width";
				oTarget_num = $target.eq(0).outerWidth(true);
			}else{
				sStr = "height";
				oTarget_num = $target.eq(0).outerHeight(true);
			}
		}else{
			$(obj).eq(0).addClass(now).siblings().removeClass(now);
			$target.hide().eq(0).show();
		}

		btnNext.click(function(){
			num = obj.parent().children(".now").index();
			num++;
			if(num >= oTarger_len) num=0;
			setTimeout(fnMove, 200);
		});

		btnPrev.click(function(){
			num = obj.parent().children(".now").index();
			num--;
			if(num < 0) num=oTarger_len-1;
			setTimeout(fnMove, 200);
		});

		function fnMove(){
			obj.eq(num).addClass(now).siblings().removeClass(now);
			if(easing == "fade"){
				$target.hide().eq(num).fadeIn(time);
			}else if(easing == "slide"){
				$target.parent("ul").css(sStr,oTarget_num*oTarger_len);
				if(direction == "left"){
					$target.parent().animate({"left":-num*oTarget_num}, time);
				}else{
					$target.parent().animate({"top":-num*oTarget_num}, time);
				}
			}else if(easing == "toggle"){
				$target.hide().eq(num).show();
			}else{
				alert("sorry, without this parameter!\ndefaults:toggle | slide | fade");
			}
		}

		obj.mouseover(function(){
			clearInterval(timer);
		}).mouseout(function(){
			if(autoPlay){
				timer = setInterval(function(){
					num++;
					if(num >= oTarger_len) num=0;
					fnMove();
				}, speed);
			}
		});

		if(autoPlay){
			timer = setInterval(function(){
				num++;
				if(num >= oTarger_len) num=0;
				fnMove();
			}, speed);
		}

		return this.each(function(i){
			
			 $(this).bind(action, function(){
				clearInterval(timer);
				num = i;
				setTimeout(fnMove, 200);
			});

		});

	}
	$.fn.simpleTabs.version = "2.0";
})(jQuery);