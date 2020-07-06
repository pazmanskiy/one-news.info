function getOffset(elem){
	if(elem.length){
		var offset=Math.round(elem.offset().top);
		return offset;
	}
}
function scrollTo(elem,delta){
	if(!delta) delta=0;
	$("html:not(:animated),body:not(:animated)").animate({scrollTop: getOffset(elem)-delta}, 800);
	return false;
}


function scrollElem(elem,scrollTop,elem2){
	var top=elem.data('top');
	if((!elem.length)||(screen.width < 1024)||(screen.height < elem.height())||(scrollTop<top)){
		elem.css('transform','translateY(0)');
		console.log('err');
		var er=0;
		if(!elem.length) er+=2;
		if(screen.width < 1024) er+=4;
		if(screen.height < elem.height()) er+=8;
		if(scrollTop<top) er+=16;
		console.log(er);
		console.log(scrollTop);
		console.log(top);
	}else{
		var height=elem.height();
		if(elem2.length)
			var maxScroll=elem2.height();
		else 
			var maxScroll=elem.parent().height();
		if(maxScroll<(height+scrollTop-top+130)) return;
		elem.css('transform','translateY('+(scrollTop-top+130)+'px)');
	}
}
function resizeLikeWindow(obj,delta){
	var winHeight=$(window).height();
	var deltaHeight=delta.length?delta.height():0;
	obj.height(winHeight-deltaHeight+'px');
}
function centerPopup(popupBox){
	var scrolledTop=$(document).scrollTop();
	var winHeight=$(window).height();
	var boxHeight=popupBox.children().height();
	var top=scrolledTop+30;
	if(boxHeight<winHeight) top=scrolledTop+(winHeight-boxHeight)/2;
	popupBox.css({'top':top+'px'});
}


$(document).ready(function () {

	if($(window.location.hash).length){
		$('html, body').animate({scrollTop: $(window.location.hash).offset().top-110}, 1000);
	}
	$('a[href^="#"]').click(function(){
		var id=$(this).attr('href');
		$('html, body').animate({scrollTop: $(id).offset().top-110}, 1000);
		return false;
	});

	var scrolledTop=0;
	var popup=$('#popup');
	var popupBox=$('#popup .box');
	var $header=$('#header');
	var $topLine=$('#header .top-line');
	var $main=$('#main');
	var $footer=$('#footer');
	var $win = $(window);
	var $body = $('body');

	//popup
	popup.on('click','.ok,.cross,.popup-shadow',function(){
		popup.fadeOut(300,function(){
			setTimeout(function(){popup.html();},500);
		});
	});

	//menu
	var f_menuScrolled = false;
	$('.menu-icon').click(function(){
		$body.toggleClass('menu-active');
	});
	$(window).on('resize',function(){
		if(!$('.menu-icon:visible').length && $body.hasClass('menu-active')) $body.removeClass('menu-active');
	});
	$('.top-menu .parent, .choosement, .works-hours').click(function(){
		$(this).toggleClass('opened');
	});

	$(".top-menu-box").on('touchstart', function(event) {//swipe start
		if(!$body.hasClass('menu-active')) return;
		var touchobj = event.originalEvent.touches[0];
		var startX = touchobj.pageX
		var startTime = new Date().getTime() // record time when finger first makes contact with surface
		$(this).data('startX',startX);
		$(this).data('startTime',startTime);
	});
	$(".top-menu-box").on("touchend", function(event){//swipe end
		if(!$body.hasClass('menu-active')) return;
		var touchobj = event.originalEvent.changedTouches[0];
		var distX = touchobj.pageX - $(this).data('startX'); // get horizontal dist traveled by finger while in contact with surface
		var elapsedTime = new Date().getTime() - $(this).data('startTime'); // get time elapsed
		if (elapsedTime <= 10000 && Math.abs(distX) >= 50 && distX < 0){ // first condition for awipe met
			$body.removeClass('menu-active');
		}
	});



/*
	$(".top-menu-box").on("pointerdown MSPointerDown touchstart", function(e) {
		
		addClass(this, 'clicked');
		buttonTouched = true;
	}, false);
	$(".top-menu-box").on("pointerup MSPointerUp touchend", function(e) {
		
		removeClass(this, 'clicked');
		buttonTouched = false;
	}, false);
	*/
	
// fix menu
	$(document).scroll(function () {
		scrolledTop=$(document).scrollTop();
		if (scrolledTop > 10 && !f_menuScrolled){
			$topLine.addClass("scrolled");
			$body.addClass('page-scrolled');
			f_menuScrolled = true;
		}
		if (scrolledTop <= 10 && f_menuScrolled) {
			$topLine.removeClass("scrolled");
			$body.removeClass('page-scrolled');
			f_menuScrolled = false;
		}
	});
// end fix menu

	//search-line
	$('.search-box .btn').click(function(){
		var serachBox=$(this).parents('.search-box');
		if(!serachBox.hasClass(focus)){
			serachBox.addClass('focus');
			$(document).on('click',function(event) {
				if ($(event.target).closest(".search-box").length) return;
				serachBox.removeClass('focus');
				$(document).off('click');
				event.stopPropagation();
			});
		}
	});


	
});