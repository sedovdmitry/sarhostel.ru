// resize_imgs.js

$.fn.resize_imgs = function(options){
	var settings = {
		width: 100,
		height: 100,
		align: "center",
		valign: "center"
	}
	jQuery.extend(settings, options);
	return this.each(function(){
		if ( this.complete || this.readyState === 4 ) {
			resize.apply(this);
		}
		// Check if data URI images is supported, fire 'error' event if not
		else if ( this.readyState === 'uninitialized' && this.src.indexOf('data:') === 0 ) {
			;//$(this).trigger('error');
		}
		else {
			$(this).bind('load', resize);
		};
		
		function resize(eventObject){
			$(this).width("auto");
			$(this).height("auto");
			if ($(this).height()/$(this).width() > settings.height/settings.width){
				if ($(this).height()>settings.height)
					$(this).height(settings.height);
			}else{
				if ($(this).width()>settings.width)
					$(this).width(settings.width);	
			} 
			if (settings.align == "center")
				$(this).css({"display": "block", "margin-left": "auto", "margin-right": "auto"});
			if (settings.valign == "center"){
				//$(this).css("margin-top", (Math.floor((settings.height-$(this).height())/2)+"px"));
				// fix for Chrome (margin collapse after js)
				$(this).parent().css("position", "relative");
				$(this).css({"position":"relative", "top": (Math.floor((settings.height-$(this).height())/2)+"px")});
			}
		};
	})
};
	