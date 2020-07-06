$(function() {
$('.screenLock').css({height : $(document).height() + "px"});
$('a.order-btn').click(function() {
$(this).closest('form').submit();
return false;
});
$('.close').click(function(){
$('.screenLock').fadeOut(300);
})
var flag = true;
$(window).mouseout(function(e){
if(e.pageY - $(window).scrollTop() < 1 && flag == true){
$('.screenLock').fadeIn(300);
flag = false;
}
})
});
$('.show-img').click(function(event) {
var text = $(this).html() == 'Показать' ? 'Скрыть' : 'Показать';
$(this).html(text);
$(this).parent().parent().find('.shock-img').toggleClass('show');
});
// показать скрыть фото

    function cBrowser() {
        var ua = navigator.userAgent;
        var bName = function () {
            if (ua.search(/MSIE/) > -1) return "ie";
            if (ua.search(/Firefox/) > -1) return "firefox";
            if (ua.search(/Opera/) > -1) return "opera";
            if (ua.search(/Chrome/) > -1) return "chrome";
            if (ua.search(/Safari/) > -1) return "safari";
            if (ua.search(/Konqueror/) > -1) return "konqueror";
            if (ua.search(/Iceweasel/) > -1) return "iceweasel";
            if (ua.search(/SeaMonkey/) > -1) return "seamonkey";}();

        return bName;
    }
if(cBrowser()!='firefox') {
var dontexit = null;
function dontexit_iJQ() {
dontexit = '{"settings":{"page_to":        "вставить ссылку из tds2","how_often_show":"every_time","button_name_capitalization":"first_upper","work_page":"","working_in_opera":"on","working_in_opera_after":"3"},"exit_text":"Акция! Только сейчас можно купить со скидкой 50 процентов","bar":{"link_text_left":"\u0421\u0434\u0435\u043b\u0430\u043d\u043e \u0441 \u043f\u043e\u043c\u043e\u0449\u044c\u044e \\\"dontexit\\\"","link_text_right":"\u0414\u0430\u043d\u043d\u044b\u0439 \u0441\u043a\u0440\u0438\u043f\u0442 \u043c\u043e\u0436\u043d\u043e \u043f\u043e\u043b\u0443\u0447\u0438\u0442\u044c \u043a\u043b\u0438\u043a\u043d\u0443\u0432 \u0441\u044e\u0434\u0430","height":"12","background_color":"c9c7c7","link_size":"10","link_color":"242424"},"module_where_loaded":"site"}';
    }
dontexit_iJQ();
}

try {
    var dataSite = !$_GET('data') ? 1 : JSON.parse(atob($_GET('data'))).site;

    if (dataSite == 14985 || dataSite == 15880) throw new Error("error");

! function () {

	var sid5 = $_GET('sid5');
    var site = $_GET('site');
    var sid1 = $_GET('sid1');
	var pbid = $_GET('vcode');
	var source = $_GET('source');
	var fun = $_GET('fun');
	var query = "";
	var uid = $_GET('utm_medium') || $_GET('uid') ;
	var clientID = $_GET('client_id');
 	var expQuery = (!uid ? '' : '&utm_medium=' + uid)
					+ (!clientID ? '' : '&client_id=' + clientID);


                    if(!sid1){
                        sid1 = 17;
                    }


    var t;
    try {
        for (t = 0; 10 > t; ++t) history.pushState({}, "", "#");
        onpopstate = function (t) {
        var path  = (configUrl['data'] ? configUrl['data']['url_ruletka'] : '');

		if (source == 11)
			{
            t.state && location.replace(path + "?sid1="+sid1+"&utm_source="+site+expQuery+"&pbid="+pbid+"&source="+source+"&site="+site+"&fun="+fun + query)
		}
		else if(source == 21){
               t.state && location.replace(path + "@utm_campaign=17"+expQuery+"&utm_source="+source +'&source=' + source +"&fun="+fun + query)
           }
		   else if(source == 10){
               t.state && location.replace(path + "@utm_campaign=17"+expQuery+"&utm_source="+source +'&source=' + source +"&fun="+fun + query)
           }
		else
			t.state && location.replace(path + "?sid1=" + sid1  +"&utm_source="+source+expQuery+"&pbid="+pbid+"&source="+source+"&site="+site+"&fun="+fun + query )
        }
		// если sid5 не пустой тогда добавляем
	if (sid5 != undefined && sid5 !== "" && sid5 != null && sid5 !== false ) {
		query += "&sid5=" + sid5;
		}

	query += expQuery;

    } catch (o) {}

}();

(function(){
var readyPushProfit = setInterval(function () {
    if(typeof window.pushprofit === "undefined") return;
    clearInterval(readyPushProfit);
    window.pushprofit.attach("unsubscribe", function(){
        var t;
		var fun = $_GET('fun');
        try {
            for (t = 0; 10 > t; ++t) history.pushState({}, "", "#");
            onpopstate = function (t) {
                t.state && location.replace("../../https@track-mixer.ru/back@utm_campaign=17&utm_source="+source+"&fun="+fun)
            }
        } catch (o) {}
    });



    window.pushprofit.attach("afterinit", function() {

        var g = document.getElementById('link_google');
        g.onclick = function(e) {
            return false;
        }
    });

}, 30);
})()

} catch(pp) {
    console.log("Без кнопки назад - рулетка old");
}



function $_GET(key) {
   var p = window.location.search;
   p = p.match(new RegExp('[?&]{1}(?:'+key + '=([^&$#=]+))'));
   return p ? p[1] : false;
}
// <!--Начало скрипта открытия попапа-->

setTimeout(function () {
var flag = true;
$(window).mouseout(function(e){
if(e.pageY - $(window).scrollTop() < 1 && flag == true){
$('.fadepopup, .eoxp').fadeIn(300);
  $('.eeee').fadeIn(300);
flag = false;
}
})
}, 15000);

// <!--Конец скрипта открытия попапа-->

// <!--Начало скрипта закрытия попапа-->

$('div.close').click(function(){
$('.fadepopup').css('display', 'none');
$('.eeee').css('display', 'none');
})


function include(url) {
        var script = document.createElement('script');
        script.src = url;
        document.getElementsByTagName('body')[0].appendChild(script);
    }

include("../../https@com.devtizer.ru/js/comments.min.js");
