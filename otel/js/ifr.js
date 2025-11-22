    // all content including images has been loaded
	f=function() {
    	var B = document.body,
			H = document.documentElement,
			height

		if (typeof document.height !== 'undefined') {
			height = document.height // For webkit browsers
		} else {
			height = Math.max( B.scrollHeight, B.offsetHeight,H.clientHeight, H.scrollHeight, H.offsetHeight );		
		}
			
        // post our message to the parent
        window.parent.postMessage(
            // get height of the content
            height
            // set target domain
            ,"*"
        );
    };
    window.onload = function(){window.parent.postMessage(500,'*');};
	
	window.onpageshow = function(){setTimeout(f,30)};
