// this script should be included for all devices (with or without touchscreen)

function supportsTouch() {     
	var android = navigator.userAgent.indexOf('Android') != -1;     
	return android || !!('createTouch' in document) 
}  
// Use $('a').touchOrClick instead of $('a').click in your code. 
jQuery.fn.touchOrClick = function(efunc) {     
	if (typeof efunc == 'undefined') {         
		return this.trigger(supportsTouch() ? 'touchstart' : 'click');     
	} else {         
		return this.bind(supportsTouch() ? 'touchstart' : 'click', efunc);     
	} 
};
////////////////

$(document).ready(function() {     
	$('.touchhover').bind('touchstart touchend', function(e) {         
		e.preventDefault();         
		$(this).toggleClass('hover_effect');     
	}); 
}); 