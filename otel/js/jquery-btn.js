// IE 6 hover plugin
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('9 u=k(){9 g=/^([^#.>`]*)(#|\\.|\\>|\\`)(.+)$/;k u(a,b){9 c=a.J(/\\s*\\,\\s*/);9 d=[];n(9 i=0;i<c.l;i++){d=d.v(o(c[i],b))};6 d};k o(a,b,c){a=a.z(" ","`");9 d=a.r(g);9 e,5,m,7,i,h;9 f=[];4(d==8){d=[a,a]};4(d[1]==""){d[1]="*"};4(c==8){c="`"};4(b==8){b=E};K(d[2]){w"#":7=d[3].r(g);4(7==8){7=[8,d[3]]};e=E.L(7[1]);4(e==8||(d[1]!="*"&&!x(e,d[1]))){6 f};4(7.l==2){f.A(e);6 f};6 o(7[3],e,7[2]);w".":4(c!=">"){5=p(b,d[1])}y{5=b.B};n(i=0,h=5.l;i<h;i++){e=5[i];4(e.C!=1){q};7=d[3].r(g);4(7!=8){4(e.j==8||e.j.r("(\\\\s|^)"+7[1]+"(\\\\s|$)")==8){q};m=o(7[3],e,7[2]);f=f.v(m)}y 4(e.j!=8&&e.j.r("(\\\\s|^)"+d[3]+"(\\\\s|$)")!=8){f.A(e)}};6 f;w">":4(c!=">"){5=p(b,d[1])}y{5=b.B};n(i=0,h=5.l;i<h;i++){e=5[i];4(e.C!=1){q};4(!x(e,d[1])){q};m=o(d[3],e,">");f=f.v(m)};6 f;w"`":5=p(b,d[1]);n(i=0,h=5.l;i<h;i++){e=5[i];m=o(d[3],e,"`");f=f.v(m)};6 f;M:4(c!=">"){5=p(b,d[1])}y{5=b.B};n(i=0,h=5.l;i<h;i++){e=5[i];4(e.C!=1){q};4(!x(e,d[1])){q};f.A(e)};6 f}};k p(a,b){4(b=="*"&&a.F!=8){6 a.F};6 a.p(b)};k x(a,b){4(b=="*"){6 N};6 a.O.G().z("P:","")==b.G()};6 u}();k Q(a,b){9 c=u(a);n(9 i=0;i<c.l;i++){c[i].R=k(){4(t.j.H(b)==-1){t.j+=" "+b}};c[i].S=k(){4(t.j.H(b)!=-1){t.j=t.j.z(b,"")}}}}4(D.I&&!D.T){D.I("U",V)}',58,58,'||||if|listNodes|return|subselector|null|var||||||||limit||className|function|length|listSubNodes|for|doParse|getElementsByTagName|continue|match||this|parseSelector|concat|case|matchNodeNames|else|replace|push|childNodes|nodeType|window|document|all|toLowerCase|indexOf|attachEvent|split|switch|getElementById|default|true|nodeName|html|hoverForIE6|onmouseover|onmouseout|opera|onload|ieHover'.split('|'),0,{}))
function ieHover(){
	hoverForIE6('button.btn1', 'btn1-hover');
	hoverForIE6('button.btn2', 'btn2-hover');
	hoverForIE6('.main-nav li, .extra-nav1 li', 'hover');
	hoverForIE6('.selectArea', 'selectArea-hover');
	hoverForIE6('.languages .selectArea', 'selectArea-hover');
	hoverForIE6('.activity', 'activity-hover');
	hoverForIE6('.penult-activity', 'penult-activity-hover');
	hoverForIE6('.latest-activity', 'latest-activity-hover');
	hoverForIE6('.activity2', 'activity2-hover');
	hoverForIE6('.penult-activity2', 'penult-activity2-hover');
	hoverForIE6('.latest-activity2', 'latest-activity2-hover');
}
if (window.attachEvent && !window.opera){
	window.attachEvent("onload", ieHover);
}

$(function(){
	if(typeof $.datepicker != 'undefined'){
		$( "#fr2" ).datepicker({
			showOn: "button",
			buttonImage: "/images/calendar.gif",
			buttonImageOnly: true,
			dateFormat:'dd/mm/yy',
			minDate: '-0d'
		});
	}
	initAjaxGall();
	initTooltip();
	initContact();
	initPhotoGallery();
	
	initNav();
	initOpenClose();
	hideFormText();
	initCustomForms();

	var input = $('form.search1 input[type=text]');
	var initVal = input.val();
	$('form.search1').bind('submit', function(){
			if (input.val() === initVal || input.val() === '') 
				return false;
		});
});

function initPhotoGallery(){
	var hold = $('ul.g1')
	hold.each(function(){
		var _this = $(this);
		var link = _this.find('li .frame > a');
		link.click(function(){
			var ind = $('ul.g1 .frame > a').index($(this));
			initPopup($(this));
			initGall($(this), ind);
			return false;
		});
	});
}

function initGall(obj, ind){
	var gall = $(obj.attr('href')).find('div.gallery1');
	gall.each(function(){
		var _this = $(this),
			hold = _this.find('div.frame'),
			list = hold.find('ul'),
			li = list.find('> li'),
			prev = _this.find('a.prev'),
			next = _this.find('a.next'),
			count = li.length,
			w1 = list.children().eq(0).outerWidth(),
			wait = false;
		if(typeof ind != 'undefined' && typeof ind == 'number') var active = ind;
		else var active = 0;
		list.css('marginLeft', -w1*active);
		next.click(slide);
		prev.click(slide);
		function slide(e){
			if(!wait){
				wait = true;
				if(e.target.className == 'next') active++;
				else if(e.target.className == 'prev') active--;
				if(active == count) active = 0;
				if(active < 0) active = count-1;
				list.animate({marginLeft:-w1*active}, {queue:false, duration:500, complete:function(){wait = false;}});
			}
			return false;
		}
	});
}

function initPopup(obj){
	var _fader = $('<div class="overlay"></div>');
	var popup = $(obj.attr('href'));
	$('body').append(_fader);
	_fader.css({
		position: 'absolute',
		top: '0px',
		left: '0px',
		zIndex: 999,
		background: 'black',
		opacity: 0.7
	});
	var btnClose = popup.find('a.btn-close');
	var w = $('body').width();
	var _w = $('#wrapper').width();
	if (_w > w) w =_w;
	var h = $(window).height();
	var _offset = $(window).scrollTop();
	var ret = _offset+(h/2) - popup.outerHeight(true)/2;
	if (ret < 0) ret = 0;
	var te = $('#wrapper').height();
	if ($(window).height() > te) te = $(window).height();
	popup.css({
		top: ret,
		left: w/2 - popup.outerWidth(true)/2
	}).hide();
	_fader.css({
		width: w,
		height: te
	}).fadeIn(300, function(){popup.fadeIn(300)});
	btnClose.click(closedPopup);
	_fader.click(closedPopup);
	$(window).resize(function(){
		w = $('body').width();
		_w = $('#wrapper').width();
		if (_w > w) w =_w;
		popup.animate({
			left: w/2 - popup.outerWidth(true)/2
		}, {queue:false, duration: 300});
		_fader.css({
			width: w
		});
	});
	function closedPopup(){
		popup.fadeOut(300, function(){
			popup.css({left: '-9999px'}).show();
			$(window).unbind('resize');
			_fader.hide();
		});
		return false;
	}
}

function initContact(){
	var hold = $('div.contact');
	hold.each(function(){
		var _this = $(this);
		var sel = _this.find('select');
		var nSel = _this.find('select').get(0);
		sel.find('option').each(function(){
			var _link = $(this);
			var _href = _link.attr('title');
			var _tab = $(_href);
			
			if(_link.attr('selected')) _tab.show();
			else _tab.hide();
			
			nSel.onchange = function(){
				sel.find('option').each(function(){
					if($(this).attr('selected')) $($(this).attr('title')).show();
					else $($(this).attr('title')).hide();
				});
			}
		});
	});
}

function initTooltip(){
	var hold = $('div.tooltip-hold');
	hold.each(function(){
		var _this = $(this);
		var tooltip = _this.parent().find('div.enlarge-activity, div.enlarge-activity2');
		_this.mouseenter(function(){
			tooltip.show();
			_this.parent().parent().children().css('zIndex', 5);
			_this.parent().css('zIndex', 100);
		}).mouseleave(function(){
			tooltip.hide();
		});
	});
}

function initAjaxGall(){
/*
	var mainHold = $('div.main7');
	var gall = mainHold.find('div.thumbnails2');
	//var ajaxBox = mainHold.find('div.story');
	var ajaxList = mainHold.find('.sidebar6 ul.secondary-nav ul > li');
	
	if(ajaxList.filter('.active').length) ajaxLoad(ajaxList.filter('.active').find('> a'));
	else {
		ajaxList.eq(0).addClass('active');
		ajaxLoad(ajaxList.eq(0).find('> a'));
	}
	ajaxList.find('> a').click(ajaxLoad);
	
	function ajaxLoad(e){
		var obj = $(e.currentTarget);
		if(obj.length) {
			var _url = obj.attr('href');
			ajaxList.removeClass('active').each(function(){if($(this).find('a').attr('rel') == obj.attr('rel')) $(this).addClass('active')});
		}
		else var _url = e.attr('href');
		$.ajax({
			url:_url,
			type:'get',
			success:function(msg){ajaxBox.empty().append($(msg))},
			error:function(){alert('Ajax error !')}
		});
		return false;
	}
	
	gall.each(function(){
		var _this = $(this),
			hold = _this.find('div.frame'),
			list = hold.find('ul'),
			li = list.find('> li'),
			prev = _this.find('a.prev'),
			next = _this.find('a.next'),
			count = li.length,
			w1 = list.children().eq(0).outerWidth(),
			active = 0,
			wait = false;

		list.prepend(li.clone()).append(li.clone()).css('marginLeft', -w1*count);
		active = count;

		next.click(slide);
		prev.click(slide);
		hold.find('ul > li > a').click(ajaxLoad);
		
		function slide(e){
			if(!wait){
				wait = true;
				if(e.target.className == 'next') active++;
				else if(e.target.className == 'prev') active--;
				list.animate({marginLeft:-w1*active}, {queue:false, duration:500, complete:function(){
					if(active == 0 || active == count*2) {
						active = count;
						list.css('marginLeft', -w1*active);
					}
					wait = false;
				}});
			}
			return false;
		}
	});
*/
}


/* initNav */
function initNav() {
	var _nav = document.getElementById("nav");
	if (_nav) {
		var lis = _nav.getElementsByTagName("li");
		for (i = 0; i < lis.length; i++)
		{
			var liss = lis[i].parentNode.getElementsByTagName("li");
			for(j = 0; j < liss.length; j++)
			{
				if (lis[i].parentNode == liss[j].parentNode)
				{
					if ((liss[j].className.indexOf("active") != -1))
					{
						if (lis[i]._active)
						{
							lis[i]._active.className = lis[i]._active.className.replace("active", "");
						}
						lis[i]._active = liss[j];
					}
				}
			}
			lis[i].onmouseover = function() {
				if (this._active) {
					this._active.className = this._active.className.replace("active", "");
				}
				if (this.className.indexOf("active") == -1)
				{
					this.className += " active";
				}
			}
			lis[i].onmouseout = function() {
					this.className = this.className.replace("active", "");
					if (this._active) {
						if (this._active.className.indexOf("active") == -1) {
							this._active.className += " active";
						}
					}
			}
		}
	}
}
/* hideFormText */
function hideFormText(){
	var _inputs = document.getElementsByTagName('input');
	var _txt = document.getElementsByTagName('textarea');
	var _value = [];
	
	if (_inputs) {
		for(var i=0; i<_inputs.length; i++) {
			if (_inputs[i].type == 'text' || _inputs[i].type == 'password') {
				
				_inputs[i].index = i;
				_value[i] = _inputs[i].value;
				
				_inputs[i].onfocus = function(){
					if (this.value == _value[this.index])
						this.value = '';
				}
				_inputs[i].onblur = function(){
					if (this.value == '')
						this.value = _value[this.index];
				}
			}
		}
	}
	if (_txt) {
		for(var i=0; i<_txt.length; i++) {
			_txt[i].index = i;
			_value['txt'+i] = _txt[i].value;
			
			_txt[i].onfocus = function(){
				if (this.value == _value['txt'+this.index])
					this.value = '';
			}
			_txt[i].onblur = function(){
				if (this.value == '')
					this.value = _value['txt'+this.index];
			}
		}
	}
}
/* initOpenClose */
function initOpenClose() {
	jQuery('div.w-question').OpenClose({
		activeClass:'question-active',
		opener:'a.open-close',
		slider:'div.answer',
		effect:'slide',
		//textOpen: 'Minimize this window',
		//textClose: 'Click here to add more subscriptions',
		//textSwiching: 'span.l',
		animSpeed:500
	});
}
/* open-close plugin */
jQuery.fn.OpenClose = function(_options){
	// default options
	var _options = jQuery.extend({
		activeClass:'active',
		opener:'.opener',
		slider:'.slide',
		animSpeed: 400,
		animStart:false,
		animEnd:false,
		//textOpen: 'Open state',
		//textClose: 'Close state',
		//textSwiching: false,
		effect:'fade',
		event:'click'
	},_options);

	return this.each(function(){
		// options
		var _holder = jQuery(this);
		var _slideSpeed = _options.animSpeed;
		var _activeClass = _options.activeClass;
		var _opener = jQuery(_options.opener, _holder);
		var _slider = jQuery(_options.slider, _holder);
		var _animStart = _options.animStart;
		var _textOpen = _options.textOpen;
		var _textClose = _options.textClose;
		var _textSwiching = _options.textSwiching;
		var _animEnd = _options.animEnd;
		var _effect = _options.effect;
		var _event = _options.event;
		if(_slider.length) {
			_opener.bind(_event,function(){
				if(!_slider.is(':animated')) {
					if(typeof _animStart === 'function') _animStart();
					if(_holder.hasClass(_activeClass)) {
						_slider[_effect=='fade' ? 'fadeOut' : 'slideUp'](_slideSpeed,function(){
							if(typeof _animEnd === 'function') _animEnd();
						});
						if(_textSwiching) _opener.find(_textSwiching).text(_textClose)
						else _opener.text(_textClose);
						_holder.removeClass(_activeClass);
					} else {
						_holder.addClass(_activeClass);
						if(_textSwiching) _opener.find(_textSwiching).text(_textOpen)
						else _opener.text(_textOpen);
						_slider[_effect=='fade' ? 'fadeIn' : 'slideDown'](_slideSpeed,function(){
							if(typeof _animEnd === 'function') _animEnd();
						});
					}
				}
				return false;
			});
			if(_holder.hasClass(_activeClass)) _slider.show();
			else _slider.hide();
		}
	});
}
/* Custom Forms */
var _selectHeight = 21;

var _forms = document.getElementsByTagName('form');
var inputs = new Array();
var selects = new Array();
var labels = new Array();
var radios = new Array();
var radioLabels = new Array();
var checkboxes = new Array();
var checkboxLabels = new Array();
var buttons = new Array();
var selects = new Array();
var all_selects = false;
var active_select = null;
var agt = navigator.userAgent.toLowerCase();
var selectText = "please select";
var IN_CFORMS = true;

function initCustomForms() {
	if(!document.getElementById) {return false;}
	getElements();
	separateElements();
	// replaceRadios();
	// replaceCheckboxes();
	replaceSelects();

	var _selects = document.getElementsByTagName('select');
	var _SelctClassName = [];
	if (_selects) {
		for (var i = 0; i < _selects.length; i++) {
			if (_selects[i].className != '' && _selects[i].className != 'outtaHere')
				_SelctClassName[i] = ' drop-'+_selects[i].className;
		}
		for (var i = 0; i < _SelctClassName.length; i++) {
			var _selectDrop = document.getElementById('optionsDiv'+i);
			if (_selectDrop) {
				if (_SelctClassName[i]) 
					_selectDrop.className += _SelctClassName[i];
			}
		}
	}
}
// getting all the required elements
function getElements() {
	for (var nf = 0; nf < document.getElementsByTagName("form").length; nf++) {
		for(var nfi = 0; nfi < document.forms[nf].getElementsByTagName("input").length; nfi++) {inputs.push(document.forms[nf].getElementsByTagName("input")[nfi]);}
		for(var nfl = 0; nfl < document.forms[nf].getElementsByTagName("label").length; nfl++) {labels.push(document.forms[nf].getElementsByTagName("label")[nfl]);}
		for(var nfs = 0; nfs < document.forms[nf].getElementsByTagName("select").length; nfs++) {selects.push(document.forms[nf].getElementsByTagName("select")[nfs]);}
	}
}
// separating all the elements in their respective arrays
function separateElements() {
	var r = 0; var c = 0; var t = 0; var rl = 0; var cl = 0; var tl = 0; var b = 0;
	for (var q = 0; q < inputs.length; q++) {
		if(inputs[q].type == "radio") {
			radios[r] = inputs[q]; ++r;
			for(var w = 0; w < labels.length; w++) {
				if((inputs[q].id) && labels[w].htmlFor == inputs[q].id)
				{
					radioLabels[rl] = labels[w];
					++rl;
				}
			}
		}
		if(inputs[q].type == "checkbox") {
			checkboxes[c] = inputs[q]; ++c;
			for(var w = 0; w < labels.length; w++) {
				if((inputs[q].id) && (labels[w].htmlFor == inputs[q].id))
				{
					checkboxLabels[cl] = labels[w];
					++cl;
				}
			}
		}
		if((inputs[q].type == "submit") || (inputs[q].type == "button")) {
			buttons[b] = inputs[q]; ++b;
		}
	}
}
// replacing radio buttons
function replaceRadios() {
	for (var q = 0; q < radios.length; q++) {
		radios[q].className += " outtaHere";
		var radioArea = document.createElement("div");
		if(radios[q].checked) {
			radioArea.className = "radioAreaChecked";
		}
		else
		{
			radioArea.className = "radioArea";
		}
		radioArea.id = "myRadio" + q;
		radios[q].parentNode.insertBefore(radioArea, radios[q]);
		radios[q]._ra = radioArea;

		radioArea.onclick = new Function('rechangeRadios('+q+')');
		if (radioLabels[q])
		{
			radioLabels[q].onclick = new Function('rechangeRadios('+q+')');
		}
	}
	return true;
}
// checking radios
function checkRadios(who) {
	var what = radios[who]._ra;
	for(var q = 0; q < radios.length; q++) {
		if((radios[q]._ra.className == "radioAreaChecked")&&(radios[q]._ra.nextSibling.name == radios[who].name))
		{
			radios[q]._ra.className = "radioArea";
		}
	}
	what.className = "radioAreaChecked";
}
// changing radios
function changeRadios(who) {
	if(radios[who].checked) {
		for(var q = 0; q < radios.length; q++) {
			if(radios[q].name == radios[who].name) {
				radios[q].checked = false;
			} 
			radios[who].checked = true; 
			checkRadios(who);
		}
	}
}
// rechanging radios
function rechangeRadios(who) {
	if(!radios[who].checked) {
		for(var q = 0; q < radios.length; q++) {
			if(radios[q].name == radios[who].name)	{
				radios[q].checked = false; 
			}
			radios[who].checked = true; 
			checkRadios(who);
		}
	}
}
// replacing checkboxes
function replaceCheckboxes() {
	for (var q = 0; q < checkboxes.length; q++) {
		checkboxes[q].className += " outtaHere";
		var checkboxArea = document.createElement("div");
		if(checkboxes[q].checked) {
			checkboxArea.className = "checkboxAreaChecked";
		}
		else {
			checkboxArea.className = "checkboxArea";
		}
		checkboxArea.id = "myCheckbox" + q;
		checkboxes[q].parentNode.insertBefore(checkboxArea, checkboxes[q]);
		checkboxes[q]._ca = checkboxArea;
		checkboxArea.onclick = checkboxArea.onclick2 = new Function('rechangeCheckboxes('+q+')');
		if (checkboxLabels[q])
		{
			checkboxLabels[q].onclick = new Function('changeCheckboxes('+q+')');
		}
		
		checkboxes[q].onkeydown = checkEvent;
	}
	return true;
}
// checking checkboxes
function checkCheckboxes(who, action) {
	var what = checkboxes[who]._ca;
	if(action == true) {
		what.className = "checkboxAreaChecked";
		what.checked = true;
	}
	if(action == false) {
		what.className = "checkboxArea";
		what.checked = false;
	}
}
// changing checkboxes
function changeCheckboxes(who) {
	if(checkboxes[who].checked) {
		checkCheckboxes(who, false);
	}
	else {
		checkCheckboxes(who, true);
	} 
}
// rechanging checkboxes
function rechangeCheckboxes(who) {
	var tester = false;
	if(checkboxes[who].checked == true) {
		tester = false;
	}
	else {
		tester = true;
	}
	checkboxes[who].checked = tester;
	checkCheckboxes(who, tester);
}
// check event
function checkEvent(e) {
	if (!e) var e = window.event;
	if(e.keyCode == 32) {for (var q = 0; q < checkboxes.length; q++) {if(this == checkboxes[q]) {changeCheckboxes(q);}}} //check if space is pressed
}
function replaceSelects() {
	for(var q = 0; q < selects.length; q++) {
	if (!selects[q].replaced && selects[q].offsetWidth)
	{
		selects[q]._number = q;
		//create and build div structure
		var selectArea = document.createElement("div");
		var left = document.createElement("span");
		left.className = "left";
		selectArea.appendChild(left);
		
		var disabled = document.createElement("span");
		disabled.className = "disabled";
		selectArea.appendChild(disabled);
		
		selects[q]._disabled = disabled;
		var center = document.createElement("span");
		var button = document.createElement("a");
		var text = document.createTextNode(selectText);
		center.id = "mySelectText"+q;
		
		var stWidth = selects[q].offsetWidth;
		selectArea.style.width = stWidth + "px" ;
		if (selects[q].parentNode.className.indexOf("type2") != -1){
			button.href = "javascript:showOptions("+q+",true)";
		} else {
			button.href = "javascript:showOptions("+q+",false)";
		}
		button.className = "selectButton";
		selectArea.className = "selectArea";

		selectArea.className += " " + selects[q].className;
		selectArea.id = "sarea"+q;
		center.className = "center";
		center.appendChild(text);
		selectArea.appendChild(center);
		selectArea.appendChild(button);
		
		//hide the select field
		selects[q].className += " outtaHere";
		//insert select div
		selects[q].parentNode.insertBefore(selectArea, selects[q]);
		//build & place options div

		var optionsDiv = document.createElement("div");
		
		var optionsList = document.createElement("ul");
		optionsDiv.innerHTML += "<div class='select-top'><div></div></div>";
		optionsDiv.appendChild(optionsList);
		
		selects[q]._options = optionsList;
		
		optionsDiv.style.width = stWidth + "px";
		optionsDiv._parent = selectArea;
		
		optionsDiv.className = "optionsDivInvisible";
		optionsDiv.id = "optionsDiv"+q;
		
	
		populateSelectOptions(selects[q]);
		optionsDiv.innerHTML += "<div class='select-bottom'><div class='select-bottom-left'></div><div class='select-bottom-right'></div></div>";
		document.getElementsByTagName("body")[0].appendChild(optionsDiv);
		selects[q].replaced = true;
		}
	all_selects = true;
	}
}
// collecting select options
function populateSelectOptions(me) {
	me._options.innerHTML = "";
	
	for(var w = 0; w < me.options.length; w++) {
		
		var optionHolder = document.createElement('li');
		var optionLink = document.createElement('a');
		var optionTxt;
		if (me.options[w].title.indexOf('image') != -1) {
			optionTxt = document.createElement('img');
			optionSpan = document.createElement('span');
			optionTxt.src = me.options[w].title;
			optionSpan = document.createTextNode(me.options[w].text);
		} else {
			optionTxt = document.createTextNode(me.options[w].text);
		}
		
		optionLink.href = "javascript:showOptions("+me._number+"); selectMe('"+me.id+"',"+w+","+me._number+");";
		if (me.options[w].title.indexOf('image') != -1) {
			optionLink.appendChild(optionTxt);
			optionLink.appendChild(optionSpan);
		} else {
			optionLink.appendChild(optionTxt);
		}
		optionHolder.appendChild(optionLink);
		me._options.appendChild(optionHolder);
		//check for pre-selected items
		if(me.options[w].selected) {
			selectMe(me.id,w,me._number);
		}
	}
	if (me.disabled) {
		me._disabled.style.display = "block";
	}
	else {
		me._disabled.style.display = "none";
	}
}
// selecting me
function selectMe(selectFieldId,linkNo,selectNo) {
	selectField = selects[selectNo];
	for(var k = 0; k < selectField.options.length; k++) {
		if(k==linkNo) {
			selectField.options[k].selected = true;
		}
		else {
			selectField.options[k].selected = false;
		}
	}
	var oText = document.getElementById("mySelectText"+selectNo).innerHTML;

	//show selected option
	textVar = document.getElementById("mySelectText"+selectNo);
	var newText;
	var optionSpan;
	if (selectField.options[linkNo].title.indexOf('image') != -1) {
		newText = document.createElement('img');
		newText.src = selectField.options[linkNo].title;
		optionSpan = document.createElement('span');
		optionSpan = document.createTextNode(selectField.options[linkNo].text);
	} else {
		newText = document.createTextNode(selectField.options[linkNo].text);
	}
	if (selectField.options[linkNo].title.indexOf('image') != -1) {
		if (textVar.childNodes.length > 1) textVar.removeChild(textVar.childNodes[0]);
		textVar.replaceChild(newText, textVar.childNodes[0]);	
		textVar.appendChild(optionSpan);	
	} else {
		if (textVar.childNodes.length > 1) textVar.removeChild(textVar.childNodes[0]);
		textVar.replaceChild(newText, textVar.childNodes[0]);	
	}
	var nText = selectField.options[linkNo].text;
	if (/*selectField.onchange && */!(nText == oText) && all_selects){
			//eval(selectField.onchange());
			fireEvent(selectField, 'change')
		}
}
function fireEvent(element, event) {
	if (document.createEventObject) {
	var evt = document.createEventObject();
	var r = element.fireEvent('on'+event, evt);
	return r;
	}
	else {
	var evt = document.createEvent("HTMLEvents");
	evt.initEvent(event, true, true);
	return !element.dispatchEvent(evt);
	}
}
// showing options
function showOptions(g) {
		_elem = document.getElementById("optionsDiv"+g);
		var divArea = document.getElementById("sarea"+g);
		if (active_select && active_select != _elem) {
			active_select.className = active_select.className.replace('optionsDivVisible',' optionsDivInvisible');
			active_select.style.height = "auto";
		}
		if(_elem.className.indexOf("optionsDivInvisible") != -1) {
			_elem.style.left = "-9999px";
			_elem.style.top = findPosY(divArea) + _selectHeight + 'px';
			_elem.className = _elem.className.replace('optionsDivInvisible','');
			_elem.className += " optionsDivVisible";
			/*if (_elem.offsetHeight > 200)
			{
				_elem.style.height = "200px";
			}*/
			_elem.style.left = findPosX(divArea) + 'px';
			
			active_select = _elem;
			if(document.documentElement)
			{
				document.documentElement.onclick = hideSelectOptions;
			}
			else
			{
				window.onclick = hideSelectOptions;
			}
		}
		else if(_elem.className.indexOf("optionsDivVisible") != -1) {
			_elem.style.height = "auto";
			_elem.className = _elem.className.replace('optionsDivVisible','');
			_elem.className += " optionsDivInvisible";
		}
		
		// for mouseout
		/*_elem.timer = false;
		_elem.onmouseover = function() {
			if (this.timer) clearTimeout(this.timer);
		}
		_elem.onmouseout = function() {
			var _this = this;
			this.timer = setTimeout(function(){
				_this.style.height = "auto";
				_this.className = _this.className.replace('optionsDivVisible','');
				if (_elem.className.indexOf('optionsDivInvisible') == -1)
					_this.className += " optionsDivInvisible";
			},200);
		}*/
}
function hideSelectOptions(e)
{
	if(active_select)
	{
		if(!e) e = window.event;
		var _target = (e.target || e.srcElement);
		if(isElementBefore(_target,'selectArea') == 0 && isElementBefore(_target,'optionsDiv') == 0)
		{
			active_select.className = active_select.className.replace('optionsDivVisible', '');
			active_select.className = active_select.className.replace('optionsDivInvisible', '');
			active_select.className += " optionsDivInvisible";
			active_select = false;

			if(document.documentElement)
			{
				document.documentElement.onclick = function(){};
			}
			else
			{
				window.onclick = null;
			}
		}
	}
}
function isElementBefore(_el,_class)
{
	var _parent = _el;	
	do
	{
		_parent = _parent.parentNode;
	}
	while(_parent && _parent.className != null && _parent.className.indexOf(_class) == -1)
	
	if(_parent.className && _parent.className.indexOf(_class) != -1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
	
}
function findPosY(obj) {
	var posTop = 0;
	while (obj.offsetParent) {posTop += obj.offsetTop; obj = obj.offsetParent;}
	return posTop;
}
function findPosX(obj) {
	var posLeft = 0;
	while (obj.offsetParent) {posLeft += obj.offsetLeft; obj = obj.offsetParent;}
	return posLeft;
}
//open external links in a new window
this.blankwin = function(){
	var hostname = window.location.hostname;
	hostname = hostname.replace("www.","").toLowerCase();
	var a = document.getElementsByTagName("a");	
	var check = function(obj){
		var href = obj.href.toLowerCase();
		if (href.indexOf("")!=-1) return false;
		if (href.indexOf("")!=-1) return false;
		if (href.indexOf("")!=-1) return false;
		if (href.indexOf("")!=-1) return false;
		if (href.indexOf("")!=-1) return false;
		return ((href.indexOf("http://")!=-1 || href.indexOf("https://")!=-1) && href.indexOf(hostname)==-1) ? true : false;				
	};
	var set = function(obj){
		obj.target = "_blank";
		obj.className = obj.className + " external";
	};	
	for (var i=0;i<a.length;i++){
		if(check(a[i])) set(a[i]);
	};		
};
$(document).ready(this.blankwin);