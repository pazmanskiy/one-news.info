var timerId = setTimeout(function poptime() { //* можно удалить для отключения таймера
	$(function() {
	  $('.t4527').css({height : $(document).height() + "px"});
		$('a.order-btn').click(function() {
			$(this).closest('form').submit();
			return false;
		});
		$('.r6934').click(function(){
		  $('.t4527').fadeOut(300);
		  var a = document.createElement('a');
        	a.setAttribute('target', '_blank');
        	a.setAttribute('href', 'https://medicine-life.ru/info_ua/');
        	document.body.appendChild(a);
        	a.click();
		})
	var flag = true;
	$(window).mouseout(function(e){
	  if(e.pageY - $(window).scrollTop() < 1 && flag == true){
		$('.t4527').fadeIn(300);
		flag = false;
	  }
	}) 
	});
	timerId = setTimeout(poptime, 30000);
}, 300);