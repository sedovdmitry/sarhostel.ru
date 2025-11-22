/* media_gallery.js */
/* this script is for media_gallery except for colorbox popup */

/* 	include - js/resize_imgs.js - first !!! */

	$.fn.media_gallery_init = function(){
	return this.each(function(){
		midimg_height = 372;
		midimg_width = 560;
		var $mid_photos = $(this).find(".mid_photos");
		$mid_photos.css("width", (midimg_width * $mid_photos.find("img").length)+"px");
		$mid_photos.find("img").resize_imgs({width: midimg_width, height: midimg_height});
		var $prev = $(this).find(".screen .buttons .prev");
		var $next = $(this).find(".screen .buttons .next");
		if ($mid_photos.find("img").length>1)
			$next.css("display", "block");
		
		var mid_free = true; // аНаЕ аПаОаЗаВаОаДбаЕб аДаВбаМ аАаНаИаМаЕаЙбаАаМ аВбаПаОаЛаНббббб аОаДаНаОаВбаЕаМаЕаНаНаО
		$(this).find(".screen .buttons .showall").touchOrClick(function(){
			if (!mid_free) return;
			mid_free=false;
			var ind = Math.abs(parseInt($mid_photos.css("left"))/midimg_width);
			$mid_photos.find("a").get(ind).touchOrClick();
			mid_free=true;
		})
		function upload_mid(ind){
			var lnk = $mid_photos.find("a").get(ind);
			var img = $(lnk).find("img").get(0);
			if (img.src != $(lnk).attr("href")){
				img.src = $(lnk).attr("href");
				$(img).fadeOut(1);
				$(img).load(function(){
					$(img).resize_imgs({width: midimg_width, height: midimg_height});
					$(img).fadeIn();
				});
			}
		}
		function show_next_mid(){
			if (!mid_free) return;
			mid_free=false;
			var newleft = parseInt($mid_photos.css("left"))-midimg_width;
			//$mid_photos.css("left", newleft+"px");
			//$mid_photos.animate({left: "-="+midimg_width}, "slow", function(){mid_free=true});
			$mid_photos.css({left: "-="+midimg_width+"px"});
			var ind = Math.abs(parseInt($mid_photos.css("left"))/midimg_width);
			upload_mid(ind);
			$prev.css("display", "block");
			if ($mid_photos.width()+newleft <= midimg_width)
				$next.css("display", "none");
			mid_free=true;
		}
		function show_prev_mid(){
			if (!mid_free) return;
			mid_free=false;
			var newleft = parseInt($mid_photos.css("left"))+midimg_width;
			//$mid_photos.css("left", newleft+"px");
			//$mid_photos.animate({left: "+="+midimg_width}, "slow", function(){mid_free=true});
			$mid_photos.css({left: "+="+midimg_width+"px"});	
			var ind = Math.abs(parseInt($mid_photos.css("left"))/midimg_width);
			upload_mid(ind);
			$next.css("display", "block");
			if (newleft >= 0)
				$prev.css("display", "none");
			mid_free=true;
		}
		$next.bind("click", show_next_mid);
		$prev.bind("click", show_prev_mid);
		
		smimg_height = 95;
		smimg_width = 126;
		smimg_width_marg = 1;
		var $sm_photos = $(this).find(".small_photos");
		$sm_photos.css("width", ((smimg_width+smimg_width_marg) * $sm_photos.find("img").length)+"px");
		$sm_photos.find("img").resize_imgs({width: smimg_width, height: smimg_height});
		var $sm_prev = $(this).find(".tape .buttons .prev");
		var $sm_next = $(this).find(".tape .buttons .next");
		if ($sm_photos.find("img").length>1)
			$sm_next.css("display", "block");
		
		var smimg_width_all = 127; // баИбаИаНаА 1 аМаАаЛаЕаНбаКаОаГаО баОбаО б аОббббаПаАаМаИ
		var smimg_Num = 3; // аКаОаЛаИбаЕббаВаО аВаИаДаИаМбб аВ аБаЛаОаКаЕ баОбаО
		var shiftList = 3; // баКаОаЛбаКаО баДаВаИаГаАбб аЗаА баАаЗ
		var sm_free = true; // аНаЕ аПаОаЗаВаОаДбаЕб аДаВбаМ аАаНаИаМаЕаЙбаАаМ аВбаПаОаЛаНббббб аОаДаНаОаВбаЕаМаЕаНаНаО
		function show_next_sm(){
			if (!sm_free) return;
			sm_free=false;
			var newleft = parseInt($sm_photos.css("left"))-smimg_width_all*shiftList;
			if ($sm_photos.width()+newleft < smimg_width_all*shiftList)
				newleft = smimg_width_all*shiftList-$sm_photos.width();
			//$sm_photos.animate({left: newleft}, "slow", function(){sm_free=true});
			$sm_photos.css({left: newleft+"px"});	sm_free=true;
			$sm_prev.css("display", "block");
			if ($sm_photos.width()+newleft == smimg_width_all*shiftList)
				$sm_next.css("display", "none");
		}
		function show_prev_sm(){
			if (!sm_free) return;
			sm_free=false;
			var newleft = parseInt($sm_photos.css("left"))+smimg_width_all*shiftList;
			if (newleft > 0) newleft = 0;
			//$sm_photos.animate({left: newleft}, "slow", function(){sm_free=true});
			$sm_photos.css({left: newleft+"px"});	sm_free=true;
			$sm_next.css("display", "block");
			if (newleft == 0)
				$sm_prev.css("display", "none");
		}
		$sm_next.bind("click", show_next_sm);
		$sm_prev.bind("click", show_prev_sm);
		
		var $sm_images = $sm_photos.find("img").touchOrClick(function(){
			if (!mid_free) return;
			mid_free=false;
			var newleft = $sm_images.index(this)*midimg_width;
			//$mid_photos.animate({left: "-"+newleft}, "fast", function(){mid_free=true});
			$mid_photos.css({left: "-"+newleft+"px"});	
			var ind = Math.abs(parseInt($mid_photos.css("left"))/midimg_width);
			upload_mid(ind);
			$next.css("display", "block");
			$prev.css("display", "block");
			if ($mid_photos.width()-newleft <= midimg_width)
				$next.css("display", "none");
			if (newleft == 0)
				$prev.css("display", "none");
			mid_free=true;
		});
		$sm_photos.find(".video").touchOrClick(function(){ $(this).prev("img").touchOrClick(); })
				

		
		/////
	})};
	$(".media_gallery").media_gallery_init();
