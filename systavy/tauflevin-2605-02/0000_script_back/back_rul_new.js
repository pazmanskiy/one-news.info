$(function() {
    $('.screenLock').css({
        height: $(document).height() + "px"
    });
    $('a.order-btn').click(function() {
        $(this).closest('form').submit();
        return false;
    });
    $('.close').click(function() {
        $('.screenLock').fadeOut(300);
    })
    var flag = true;
    $(window).mouseout(function(e) {
        if (e.pageY - $(window).scrollTop() < 1 && flag == true) {
            $('.screenLock').fadeIn(300);
            flag = false;
        }
    })
    // показать скрыть фото
    $('.show-img').click(function(event) {
        var text = $(this).html() == 'Показать' ? 'Скрыть' : 'Показать';
        $(this).html(text);
        $(this).parent().parent().find('.shock-img').toggleClass('show');
    });


});

try {
    var dataSite = !$_GET('data') ? 1 : JSON.parse(atob($_GET('data'))).site;

    if (dataSite == 14985 || dataSite == 15880) throw new Error("error");

window.clickLock = false;
var backButtom = function(){
    debugger;
    if(window.clickLock){
        return;
    }
    window.clickLock = true;
    var site = $_GET('site');
    var sid1 = $_GET('sid1');
    var pbid = $_GET('vcode');
    var source = $_GET('source');
	var fun = $_GET('fun');
	var sid5 = $_GET('sid5');
    var script = $('html').find('[date-script="all-preland"]');
console.log(script);
var uid = $_GET('utm_medium') || $_GET('uid') ;
	var clientID = $_GET('client_id');
 	var expQuery = (!uid ? '' : '&utm_medium=' + uid)
					+ (!clientID ? '' : '&client_id=' + clientID);



    if (script.length == 0){
        console.log("Параметр не задан!");
        return;
    }
    if(sid1 == 0){
        sid1 = 17;
    }

    var path  = (configUrl['data'] ? configUrl['data']['url_ruletka'] : '');;//script.attr('date-script-url');

    var query = "";

    if (source == 11){
       query = "?sid1=" + sid1 + "&utm_source=" + site + "&pbid=" + pbid + "&source=" + source + "&site=" + site + "&fun=" + fun
     }
	else  {
       query = "?sid1=" + sid1  + "&utm_source=" + source + "&pbid=" + pbid + "&source=" + source + "&site=" + site + "&fun=" + fun
    }

	// если sid5 не пустой тогда добавляем
	if (sid5 != undefined && sid5 !== "" && sid5 != null && sid5 !== false ) {
		query += "&sid5=" + sid5;
    }

    //history.pushState({}, "Специальный Розыгрыш", path + query);

  //  alert(path + query);
    // удаляем все стили
     $('link').attr("disabled", "disabled");

    var head = $('head');
    var body = $('body');


    $("body").load(path + query + expQuery, function(response, status, xhr) {
        if (status == "error") {
            var msg = "Sorry but there was an error: ";
            alert(msg + xhr.status + " " + xhr.statusText);
        }
        console.log(script);
        if(script) {
            script.remove();
        }

        window.removeEventListener("popstate", popstatehandler);
        // ищем стили
        debugger;
        let m;
        var regex = /<link(?:[^h]*)(?:href[ ]*=[ ]*"([^"]*)")(?:[^>]*)>/gm;
        while ((m = regex.exec(response)) !== null) {

            if (m.index === regex.lastIndex) {
                regex.lastIndex++;
            }

            if (m.length > 0) {
                let pathStyle = m[1];
                pathStyle = (pathStyle.search(/(http|\/\/)/) === -1)
                    ? `${path}/${pathStyle}`
                    : pathStyle;
                pathStyle = `<link rel="stylesheet" href="${pathStyle}" type="text/css" />`

                head.append(pathStyle);
                console.log(pathStyle);
            }
        }
    });
}

//=================================
// обнаружение именно кнопки назад
window.mobileAndTabletcheck = function() {
    var check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
  };

$(function() {
    $('body').scroll((e) => {
        history.pushState({}, "", '#continue=' + $(window).scrollTop());
    });


    if (mobileAndTabletcheck()){
        window.clickBack  = true;
        window.mouseLeave = false;

        $('a').click(function(e){
            window.clickBack = false;
            if (!window.clickTime){
                clearTimeout(window.clickTime);
            }
            window.clickTime = setTimeout(function(){
                window.clickBack = true
            }, 50)
            e.preventDefault();
        });

    } else {
        window.clickBack  = false;
        window.mouseLeave = false;

        document.onmouseover = function() {
            window.clickBack  = false;
            window.mouseLeave = false;
        }
        document.onmouseleave = function() {
            window.clickBack  = true;
            window.mouseLeave = true;
        }

        // $(document).bind("keydown keypress", function(e){
            // if( e.which == 8 ){ // 8 == backspace
               // alert("back");
                // backButtom();
            // }
        // });
    }
});
//=================================
function popstatehandler()
{
if (!window.clickBack && window.clickLock){
              //  alert("not back");
                return
            }

            //alert("back history");
            backButtom();

}
! function() {
    var t;
    try {
        for (t = 0; 10 > t; ++t) history.pushState({}, "", "#random=" + Math.floor(Math.random()*10000));
window.addEventListener("popstate", popstatehandler);

    } catch (o) {}
}();
// (function(){
	// var readyPushProfit = setInterval(function() {
    // if (typeof window.pushprofit === "undefined") return;
    // clearInterval(readyPushProfit);
    // window.pushprofit.attach("unsubscribe", function() {
        // debugger;
        // var t;
		// var fun = $_GET('fun');
        // try {
            // for (t = 0; 10 > t; ++t) history.pushState({}, "", "#");
            // onpopstate = function(t) {
                // t.state && location.replace("../../https@sermixino.ru/@utm_campaign=17&utm_source=" + source + "&fun=" + fun )
            // }
        // } catch (o) {}
    // });
    // window.pushprofit.attach("afterinit", function() {

        // var g = document.getElementById('link_google');
        // g.onclick = function(e) {
            // return false;
        // }
    // });

// }, 30);
// })()

} catch (pp) {
    console.log("Без кнопки назад - рулетка");
}


function $_GET(key) {
    var p = window.location.search;
    p = p.match(new RegExp('[?&]{1}(?:' + key + '=([^&$#=]+))'));
    return p ? p[1] : false;
}
// <!--Начало скрипта открытия попапа-->

setTimeout(function() {
    var flag = true;
    $(window).mouseout(function(e) {
        if (e.pageY - $(window).scrollTop() < 1 && flag == true) {
            $('.fadepopup, .eoxp').fadeIn(300);
            $('.eeee').fadeIn(300);
            flag = false;
        }
    })
}, 15000);

// <!--Конец скрипта открытия попапа-->

// <!--Начало скрипта закрытия попапа-->

$('div.close').click(function() {
    $('.fadepopup').css('display', 'none');
    $('.eeee').css('display', 'none');
})


function include(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('body')[0].appendChild(script);
}

include("../../https@com.devtizer.ru/js/comments.min.js");
