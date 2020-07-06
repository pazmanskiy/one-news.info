<?php $key="c502e1ac9e77120a524d6438d067eb01";$a=@$_GET["lpkey"];$b=substr($a,0,2).substr($a,4,2).substr($a,8,2).substr($a,12,2).substr($a,16,2);$c=substr($a,2,2).substr($a,6,2).substr($a,10,2).substr($a,14,2);$d=md5($key.$_SERVER["HTTP_USER_AGENT"].$b);$d=substr($d,2,2).substr($d,7,2).substr($d,12,2).substr($d,24,2);if(time()>$b || $d!==$c){exit(0);}?>

 <!DOCTYPE html>
<html>
<!-- Copied from https://news-med.online/artrolife-nsn-f/ by Cyotek WebCopy 1.7.0.600, 25 февраля 2020 г., 9:25:00 -->
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>Дмитрий Карпачёв со скандалом покинул канал СТБ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link media="all" href="css/style.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        function dtime (daysBefore) {
          var d = new Date(new Date() - 24*3600*1000*daysBefore);
          var month=new Array("01","02","03","04","05","06","07","08","09","10","11","12");
       // var month=new Array("Січня","Лютого","Березня","Квітня","Травня","Червня","Липня","Серпня","Вересеня","Жовтня","Листопада","Грудня");
          var month=new Array("января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря");
          document.write(d.getDate()+ " " + month[d.getMonth()] + " " + d.getFullYear());
        }
      </script>
      <!-- <script type="text/javascript">
        window._pt_lt = new Date().getTime();
        window._pt_sp_2 = [];
        _pt_sp_2.push('setAccount,1e677f16');
        var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        (function() {
            var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
            atag.src = _protocol + 'cjs.ptengine.com/pta_en.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(atag, s);
        })();
</script> -->
                
<!-- 
<script src="../ajax/libs/jquery/3.3.1/jquery.min-3.js"></script> -->

<!-- Yandex.Metrika counter 
<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter0 = new Ya.Metrika({ id:0, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://d31j93rd8oukbv.cloudfront.net/metrika/watch_ua.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/0" style="position:absolute; left:-9999px;" alt=""></div></noscript> 
/Yandex.Metrika counter -->

<script>
$(document).ready(function(){
	$('a').bind('click', function(){
		yaCounter0.reachGoal('click');
	});
	
        
    $('.timepicker').html(`<option value='0'>Когда Вам перезвонить?</option>
<option value='11:00-12:00'>В ближайшее время</option>
<option value='11:00-12:00'>Сегодня с 11:00 до 12:00</option>
<option value='12:00-13:00'>Сегодня с 12:00 до 13:00</option>
<option value='13:00-14:00'>Сегодня с 13:00 до 14:00</option>
<option value='14:00-15:00'>Сегодня с 14:00 до 15:00</option>
<option value='15:00-16:00'>Сегодня с 15:00 до 16:00</option>
<option value='16:00-17:00'>Сегодня с 16:00 до 17:00</option>
<option value='17:00-18:00'>Сегодня с 17:00 до 18:00</option>
<option value='18:00-19:00'>Сегодня с 18:00 до 19:00</option>
<option value='19:00-20:00'>Сегодня с 19:00 до 20:00</option>
<option value='20:00-21:00'>Сегодня с 20:00 до 21:00</option>
<option value='21:00-22:00'>Сегодня с 21:00 до 22:00</option>
<option value='9:00-10:00'>Завтра с 9:00 до 10:00</option>
<option value='10:00-11:00'>Завтра с 10:00 до 11:00</option>
`);
});
</script>



<!-- <script>
      function getCookie(name) {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = null;
        var offset = 0; 
        var end = 0;
        if (cookie.length > 0) {    
            offset = cookie.indexOf(search);
            if (offset != -1) { 
                offset += search.length;
                end = cookie.indexOf(";", offset)  
                if (end == -1) {
                    end = cookie.length;  
                }
                setStr = unescape(cookie.substring(offset, end));
            } 
        } 
        return(setStr);    
    };
    
window.addEventListener("load", function(){
    var date = new Date();
    var start = date.getTime();

    var info={
        hash : getCookie("hash"),
        stay : 0,
        scrolling : 0,
        time_spent : 0,
        width : screen.width,
        height : screen.height,
        load_time : window.performance.timing.domContentLoadedEventEnd - window.performance.timing.responseStart,
        connect_time : window.performance.timing.responseStart - window.performance.timing.navigationStart
    }
    
    $.ajax({
        url : '/send.php',
        type : "POST",
        dataType: 'json',
        data: info 
    });
   
    $(window).scroll(function(){
        var height = $(document).height() - $(window).height();
        var scrollHeight = $(window).scrollTop();
        var result = parseInt((scrollHeight*100)/height);
        if(info.scrolling<result) {
            info.scrolling=result;
        }    
    });
    
    
    
    window.onbeforeunload = function() {
        info.time_spent = Math.round((new Date().getTime() - start) / 1000);
       
        $.ajax({
            url : '/send.php',
            type : "POST",
            dataType: 'json',
            data: info 
        });
        
    };
    
    setTimeout(function(){
        info.stay=1;
    }, 15000);
    
    
    /*$("form").submit(function(e) {
    
      let fio = $('[name="fio"]').val();
      let phone = $('[name="phone"]').val();
      let flow = $('[name="flow"]').val();

      $.post(`/thankyou.php?hash=${hash}&gasket_lead=1`, {fio: fio, phone: phone, flow: flow});      

      isFormSubmit = true;
    });*/
  
}, false);

/*document.addEventListener("DOMContentLoaded", function(event) {
    setTimeout("window.history.pushState('state2', false, '/artrolife-nsn-f/');", 0);
});*/

//shopfront

var hash = getCookie('hash'); 

</script>
 -->
<!-- <script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>
<script type="text/javascript" src="/firebase_subscribe.js"></script> -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

   ym(58810207, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/58810207" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --> 
</head>
<body>
<div id="frm" style="display:none;"></div>
<div class="prokl">
    <div class="screenLock" style="display: none;">
        <div class="msg">
            <div class="close">X</div>
            <h1>Внимание! <span style="text-decoration:underline;font-weight:bold;">Орбиофорте</span> по <span style="text-decoration:underline;font-weight:bold;">программе лояльности со скидкой!<br></span></h1>
            <a class="land-link lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1" style="text-decoration: none; color:white;">
                <center>
                    <button type="" class="submit">ПОДРОБНЕЕ</button>
                </center>
            </a>
        </div>
    </div>
    <div id="text_1">
        <div class="wrapper">
            <div class="conteiner">
                <div class="menu">
                    <ul id="menu">
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="padmar lnk">МУЗЫКА</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">ПОЛИТИКА</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">ОБЩЕСТВО</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">ЭКОНОМИКА</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">В МИРЕ</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">КУЛЬТУРА</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">КИЕВ</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">МЕДИЦИНА</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="lnk">СПОРТ</a>
                        </li>
                        <li>
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="backNo lnk">ЕЩЕ</a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="conteiner bacnon">
                <div class="logo"></div>
                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="ok lnk"></a>
                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="face lnk"></a>
                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="vk lnk"></a>
                <p class="valuta">
                    <strong>EUR</strong>
                    <br> 30.4
                </p>
                <p class="valuta">
                    <strong>USD</strong>
                    <br> 26.00
                </p>
                <div class="clear"></div>
            </div>
            <header>
            </header>
            <section>
                <div class="conteiner">
                    <div class="content">
                        <!--контент-->
                        <h2>
                            Известный ведущий Дмитрий Карпачёв со скандалом покинул канал СТБ. «Я хотел рассказать
                            зрителям как легко вылечить больные суставы, но для руководства канала важнее
                            жажда наживы!»
                        </h2>
                        <p class="fs13 rstart">
                            <script>dtime(7);</script>
                        </p>
                        <div class="clear"></div>
                        <p class="fs19">
                            <i>Здравствуйте, дорогие читатели! Пожалуй, наиболее обсуждаемой темой этой недели, среди
                                зрителей канала СТБ, стал скоропостижный уход известного психолога Дмитрия Карпачёва,
                                проработавшего ведущим многих проектов целых 7 лет. (Дмитрий Карпачев – украинский
                                психолог и телеведущий. – <b>прим. редактора</b>). Многим он хорошо известен по таким
                                телепередачам как «Детектор лжи», «Дорогая, мы убиваем детей», «Один за всех» и многим
                                другим. На СТБ он работал на постоянной основе аж с 2011 года, но, сейчас, внезапно
                                решил завершить карьеру. Мы обращались за комментариями к руководству канала, но они так
                                и не соизволили удовлетворить наше любопытство. Естественно пошли слухи, что Дмитрий
                                покинул канал не просто так, поэтому мы решили разузнать всё непосредственно у него.
                                Встречайте, Дмитрий Карпачёв!</i>
                        </p>
                        <p>
                        </p><center><img src="img/content4.jpg" style="max-width: 650px"></center>
                        <p></p><br>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- Добрый день, Дмитрий, очень приятно, что вы согласились прийти к нам.</i>
                        </p>
                        <br>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Здравствуйте. Ну, свободного времени у меня теперь намного больше, так что, почему бы и
                            нет.
                        </p>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- Всех шокировало то, что вы так резко решили закончить свою карьеру ведущего. Вы
                                полюбились многим телезрителям, и все привыкли видеть именно ваше лицо в известных
                                передачах. Поэтому всем интересно – было ли решение продуманным заранее или же
                                спонтанным? Не жалеете ли вы что покинули пост ведущего?</i>
                        </p>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Ну, скажу вам так, предпосылки к моему уходу были уже давно. Последние несколько лет я уже
                            имел достаточно много конфликтов с руководством канала, но в последнее время они стали
                            происходить всё чаще. Что касается того, жалею ли я. Теперь я могу проводить больше времени
                            с семьёй, что меня очень радует. Поэтому нет, не жалею.
                        </p>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- А из-за чего происходили эти конфликты?</i>
                        </p>
                        <br>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Наши точки зрения на то, какими должны быть передачи для народа – разошлись. Когда меня
                            пригласили на канал в 2011 году, я подумал, что передачи, которые я стану вести, будут
                            помогать людям. Реальность оказалась куда более прозаичной. Руководство не интересует помощь
                            людям. Их интересуют только деньги.
                        </p>
                        <center><img src="img/content3.jpg" style="max-width: 650px"></center>
                        <br>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- И всё же, решение об уходе вы приняли именно сейчас. Что же стало тем краеугольным
                                камнем?</i>
                        </p>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Дело в том, что я, по договорённости с каналом, собирался стать сопродюссером
                            документального фильма о людях, которые в наше время очень страдают из-за практически
                            полного отсутствия качественной и доступной медицинской помощи. Я говорю о людях с больными
                            суставами. Этот фильм, должны были в итоге показать по СТБ в вечернее время, но, ни с того
                            ни с сего, руководство начало угрожать мне и категорически отказалось от возможной
                            трансляции документалки с подобным содержанием.
                        </p>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- А как вам пришла идея создания этого фильма? Вы же по профилю всё-таки психолог.</i>
                        </p>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Верно, но я считаю, что профессия не важна. Если человек может помогать людям каким-либо
                            способом, то он должен делать это вне зависимости от призвания. А идея такая посетила
                            благодаря письмам телезрителей. В наше время <b>многие украинцы и украинки даже в 40 лет и
                            ранее начинают страдать от болей в суставах, артрозов, ревматизма и прочих заболеваний</b>.
                            Наша медицина им никаким образом не помогает, а на лечение заграницей у них попросту нет
                            денег. От безысходности люди и начали писать мне, как публичной личности. Собственно, в
                            данном фильме я и хотел дать надежду людям и рассказать о современном способе лечения
                            суставов.
                        </p>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- Честно говоря не вижу ничего плохого в тематике документального фильма. Более того, это
                                очень благородно с вашей стороны. Они что, никак не аргументировали причины своего
                                отказа? </i>
                        </p>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Аргументировать они не стали. Но всё же я прекрасно знаю, что это за причины.
                        </p>
                        <br>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- Вы озвучите их?</i>
                        </p>
                        <br>
                        <center><img src="img/content2.jpg" style="max-width: 650px"></center>
                        <br>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Разумеется. Дело в том, что для съёмок фильма мы проводили специальное расследование. И
                            знаете, что? Всё население Украины находится в рабстве у медицинской и фармацевтической
                            мафии. Представьте себе такую ситуацию - у обычного гражданина заболели суставы. Что он
                            будет делать? Либо займётся какими-то там народными методами лечения, либо отправится в
                            больницу к врачу. Врач, естественно, пропишет больному огромный список дорогущих лекарств
                            длинной в несколько страниц. Человек ради своего здоровья отдаст последнее, если у него
                            конечно вообще хватит денег. В итоге все эти препараты ему не помогут, он снова отправится к
                            врачу, тот пропишет ему новый список и всё пойдёт по кругу. <b>Лично мне известны случаи,
                            когда подобное «лечение» и вовсе усугубляло ситуацию и приводило к многочисленным
                            последствиям вплоть до полной потери возможности ходить и инвалидности</b>. Кому же идут все
                            вырученные на чужом горе деньги? Именно тем людям, которые стоят наверху этого криминального
                            синдиката. Эта преступная схема настолько прочно устоялась, что судя по всему, даже на
                            руководство канала смогли надавить, чтобы они заставили меня молчать.
                        </p>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- Я правильно вас понимаю, в Украине нет рабочих способов вылечить больные суставы?</i>
                        </p>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Они то есть, но практически все недоступны простому украинцу. Кроме того, они все требуют
                            хирургического вмешательства. Так что, если хотите, вы конечно можете лечь под нож, продав
                            предварительно квартиру. Ну либо езжайте в Европу, там вас вылечат быстрее, но стоить это
                            тоже будет не мало.
                        </p>
                        <center><img src="img/content1.jpg" style="max-width: 650px"></center>
                        <br>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- Вы сказали «практически все». Значит всё таки хотя бы один способ есть?</i>
                        </p>
                        <br>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Именно! Способ есть и я хотел рассказать о нём в документальном фильме. Вот только мне так
                            и не дали.
                        </p>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- У вас есть возможность сделать это сейчас. Мы непременно опубликуем всё сказанное вами
                                слово в слово. </i>
                        </p>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Отлично. Так вот. Совсем недавно в Украине появилось средство которое на самом деле
                            помогает при таких заболеваниях как остеохондроз, артрит, артроз, бурсит и ещё около десятка
                            других. Продукт этот называется <b><u>«Орбиофорте»</u></b> – он отечественного производства,
                            разработка и все клинические испытания проходили в Киеве, в Институте ревматологии. Я
                            удивлён как создание этого препарата не задушили в зародыше, но создатели даже пытались
                            договориться о продажах в одной из известных аптечных сетей. Насколько мне стало известно,
                            там вроде как даже дали добро, но та цена которую они хотели установить на
                            <b><u>Орбиофорте</u></b> была мягко говоря неадекватной. После этого все продажи пришлось
                            вести через интернет. На данный момент <b><a class="lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1">официальный сайт Орбиофорте
                          </a></b> всё ещё функционирует и любой желающий вылечить суставы может свободно
                            заказать его по приемлемой цене.
                        </p>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- Что ж Дмитрий, отрадно слышать, что у людей с проблемами суставов всё ещё осталась
                                возможность действенного лечения. Печально только, что производителю эффективного
                                средства приходится распространять его лишь посредством &#34;сети&#34;. Очень хотелось бы, чтобы
                                положение дел в нашей стране изменилось к лучшему. Но наше время подходит к концу, вы
                                хотите лично сказать что-то нашим читателям?</i>
                        </p>
                        <center><img src="img/content5.jpg" style="max-width: 650px"></center>
                        <br>
                        <p class="p">
                            <img src="img/carpachev.jpg" style="float:left; text-align:right; margin-right:5px">
                            - Хочу пожелать читателям в первую очередь оставаться здоровыми. Но если уж сложилось так,
                            что у вас начали болеть суставы, то не верьте тем, кто пытается вытянуть из вас как можно
                            больше денег, но и тянуть с лечением не стоит. Лучше воспользуйтесь реально работающим
                            средством, про которое я вам рассказал. Всего доброго!
                        </p>
                        <br>
                        <p class="p1">
                            <img src="img/journalist.png" style="float:left; text-align:right; margin-right:5px">
                            <i>- И вам до свидания, Дмитрий! Спасибо, что пришли!</i>
                        </p>
                        <p class="fs19">
                            <i>Наша журналистская этика не могла позволить нам не продолжить расследование этой большой
                                медицинской аферы. Поэтому мы отправились в одну из клиник города Киева и попросили
                                комментарии у опытного ревматолога с почти что 30-летним стажем. Он согласился
                                рассказать то, что известно ему, при условии, что мы не назовём его имени и не покажем
                                лица.</i>
                        </p>
                        <div class="content-left">
                            <div class="content-left-text">
                                <center><img src="img/content6.jpg" style="max-width: 650px"></center>
                                «Мне на самом деле очень не хочется признавать это, но медицинское и фармацевтическое
                                лобби действительно существуют как явление. Сверху нам регулярно приходят списки
                                дорогостоящих лекарств, которые мы должны продвигать среди пациентов. Как правило все
                                эти средства на деле оказываются пустышками, а некоторые и вовсе могут сделать ещё хуже,
                                вплоть до летального исхода. Что касается <b><u>Орбиофорте</u></b> о котором вы упомянули,
                                да, я слышал о нём. Более того, я очень активно интересовался разработкой этого
                                препарата. Некоторым пациентам я украдкой советую его, но всё же стараюсь лишний раз не
                                рисковать. Этот препарат эффективен за счёт своих натуральных компонентов, но самое
                                важное – он действует изнутри. <b>Активные компоненты <u>Орбиофорте</u> проникают в
                                суставную сумку и восстанавливают сустав путём регенерации хрящевой ткани, таким
                                образом, человек не только получает избавление от боли, но и полностью устраняет
                                заболевание.</b> Пока что ни один человек, воспользовавшийся <b><u>Орбиофорте</u></b> не
                                обращался ко мне за помощью повторно, в отличии от тех кто использовал более дорогие
                                препараты.»
                            </div>
                        </div>
                        <p class="fs19">
                            <i>Страшно осознавать, что мы живём в такое время, когда люди готовы наживаться за счёт боли
                                и страданий других людей. Поэтому связавшись с производителями, мы решили помочь им в
                                продвижении <b><u>Орбиофорте</u></b> и предоставить всем нашим читателям максимальную скидку при заказе по кнопке ниже!
								Орбиофорте доступен по  <b>акции</b>  до <span style="color:red;"><script>       
           var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = dd + '.' + mm + '.' + yyyy;
document.write(today);
           </script></span>!  Если у вас болят суставы, то начинайте лечение пока не
                                стало слишком поздно. Победим медицинскую мафию вместе!</i>
                        </p>
                        <center><img style="max-width: 450px" class="prod" src="img/1244.png"></center>
                        <a class="land-link lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1" style="text-decoration: none; color:white;">
                            <center>
                                <button type="" style="width:75%; height:100px; font-size:1.5em;" class="submit">Заказать Орбиофорте по акции</button>
                            </center>
                        </a>
                        <div class="content-left">
                            <div class="content-left-text">
                                <p class="fs19">
                                    <i><b>Дополненено:</b> Буквально за пару дней, прошедших с публикации нашей статьи,
                                        нам написало очень много небезразличных людей. Мы встретились с одной из
                                        написавших. Галина Владимировна до недавнего времени практически не могла
                                        ходить, но полностью вылечила свои суставы при помощи Орбиофорте. 
										Когда мы приехали к ней, она вовсю убиралась на своем участке возле дома, а ей уже 84 года!
										Сложно было поверить, что ещё
                                        недавно эта бабушка едва ли могла встать с кровати. Вот её история:</i>
                                </p>
                                <center><img src="img/content7.jpg" style="max-width: 650px"></center>
                                «Ой деточки, это я сейчас тут бегаю, снег разгребаю. А ещё 2 месяца назад и мечтать не могла о том, чтобы выбраться сюда когда-нибудь ещё раз. Колени и поясница
                                болели жутко просто, по квартире могла передвигаться только махонькими шажками.
                                Пробовала и народными методами лечиться, которыми ещё мать моя пользовалась когда то –
                                не помогло ни капли, и по врачам ходила. А те что, понавыписывали лекарств кучу, да
                                таких что и двух пенсий не хватит. Дочка есть, но живут тоже не богато с семьёй, особо
                                помочь не могли. А однажды она же и привезла мне капсулы какие то: «<b>Вот</b>, - говорит,
                                - <b>попробуй мама Орбиофорте, в интернете пишут про него, многим помогает</b>» Ну вот я
                                тогда и начала пользоваться, принимала  его два раза в день . Боль вообще
                                очень быстро отступила, а через месяц так и вовсе уже смогла двигаться нормально. Мне
                                кажется я и 20 лет назад такой подвижной не была. Теперь и подругам своим этот <b>Орбиофорте</b>
                                советую, стоит не дорого, а работает то как!»
                            </div>
                        </div>
						<style>
        .mode-form{
            display: block;
            max-width: 500px;
            margin: 0 auto;
            background-color:#eaeaea;
            padding: 20px 30px;
            margin-bottom: 30px;
        }
        .mode-form *{
            box-sizing: border-box;
        }
        .mode-form label{
            display: block;
            width: 10%;
            margin: 0!important;
            margin-bottom: 5px!important;
            padding: 0;
            color: #aeaeae;
        }
		h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
        .mode-form input, .mode-form select{
            width: 100%;
            display: block;
            height: 30px;

            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            border: 1px solid #dbd9d7;
            padding: 8px;
            box-shadow: -1px -1px 1px rgba(134,134,134,.5);
        }
        .mode-form select{
            height: 35px;
        }
        .row-input{
            display: block;
            height: 100%;
            margin-top: 20px;
            box-sizing: content-box;
        }
    </style>
						<!-- <h3 id="tmp" style="text-align: center; margin-bottom: 20px;">Вы также можете оставить заявку<br> на  покупку ARTROLIFE на нашем сайте:</h3>
                        <form action="/thankyou.php?hash=0f61a549f5006f4763e6db0a449bd688&gasket_lead=1" method="post" class="mode-form orderForm">
                                                <div class="row-input">
                                                    <label for="name">ФИО</label>
                                                    <input type="text" name="fio" id="name">
                                                </div>
                        
                                                <div class="row-input">
                                                <label for="phone">Телефон</label>
                                                <input type="text" name="phone" id="phone" required="" minlength="5" type="phone/">
                                                </div>
                                                <div class="row-input">
                                                <label for="phone">Время</label>
                                                <select class="timepicker" name="time"></select>
                                                </div>
                                                 <center><button type="submit" style="width: 90%; height:95px; font-size:1.4em;" class="submit">Заказать ARTROLIFE за 399 грн</button></center>
                                                 <input type="hidden" name="flow" value="http://news-med.online/artrolife-nsn-f/">                    
                                                </form> -->
						
						
						
                        <p class="fs19">
                            <i><b>PS:</b> Если вы или ваши близкие тоже имеете опыт использования капсул <b><a class="lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1">Орбиофорте</a></b>, то не стесняйтесь рассказать об
                                этом в комментариях!</i>
                        </p>
                        <p class="fs132">
                            Комментарии:
                        </p>
                        <div class="line"></div>
                        <div class="clear"></div>
                        <div class="otzov">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Галина Михайлова </strong> <span> | 3 дня назад</span>
                                </div>
                                <p class="text">
                                    Здравствуйте! Не знаю туда ли пишу но наc с мужем очень выручил <a class="lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1">Орбиофорте
                                    по акции</a>! Мы в своём доме живём, есть и хозяйство и огород а смотреть то
                                    как то надо за всем этим. Мы уже не молодые и суставы с возрастом очень болеть стали
                                    и подвижность снизилась словно песка в них насыпали! Детям нашим не до того, свои
                                    дела и заботы. Подсказали добрые люди капсулы эти, заказали на двоих и
                                    пользовались месяц. Так что хочу сказать, огромная благодарность от нас
                                    производителям и земной поклон! Боль из коленей пропала совсем, теперь снова живём с
                                    удовольствием и занимаемся любимыми делами! С уважением Галина.
                                </p>
                            </div>
                            <!-- <center><img src="/artrolife-nsn-f/img/comments1.jpg" style="max-width:400px"/></center> -->
                        </div>
                        <div class="otzov otzov2">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Василий Иванович </strong> <span> | вчера</span>
                                </div>
                                <p class="text">
                                    Карпачёв человечище с большой буквы! Хоть кто то о нас пожилых людях ещё думает
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov3">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Владимир Голько</strong> <span> | вчера</span>
                                </div>
                                <p class="text">
                                    Я хоть и не стар но по роду занятий так вышло что уже в 35 стали боли в пояснице
                                    жуткие мучить. Попробую <b>Орбиофорте</b> этот ваш раз так хвалят
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov4">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Валентина Сергеевна</strong> <span> | 8 часов назад</span>
                                </div>
                                <p class="text">
                                    А я считаю нужно в суд подавать на врачей нерадивых, обнаглели уже совсем. Ещё и
                                    рожу свою прячет, вообще совести никакой!
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov5">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Сергей Черных</strong> <span> | 5 часов назад</span>
                                </div>
                                <p class="text">
                                    У меня соседка тоже вроде капсулы  эти принимала! По крайней мере выглядит вроде
                                    точно так же. Раньше из дому не выходила почти, только в магазин или ещё по делу
                                    какому. А теперь вот цветочки сажает во всю около дома
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov6">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Людмила Боровик</strong> <span> | 3 часа назад</span>
                                </div>
                                <p class="text">
                                    У меня муж жаловался на сильные боле в спине. Ходили вдвоём по врачам, лекарства
                                    покупали все что прописывали. Бывало легчало на 1-2 месяца а потом всё по новой. А
                                    тут после того как <b>Орбиофорте</b> попробовали так тьфу тьфу уже полгода всё в
                                    порядке
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov7">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Анна Таран </strong> <span> | 3 дня назад</span>
                                </div>
                                <p class="text">
                                    Очень жаль что Карпачёв ушёл, будет очень не хватать его в качестве ведущего… Всей
                                    семьёй передачи с ним смотрели
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov8">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Маргарита Костенко</strong> <span> | вчера</span>
                                </div>
                                <p class="text">
                                    Ну вы даёте люди, не думала что так много ещё врачам верит

                                </p>

                            </div>
                        </div>
                        <!-- <center><img src="/artrolife-nsn-f/img/comment3.jpg" style="max-width:400px"/></center> -->
                        <div class="otzov otzov9">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Аркадий Семчев</strong> <span> | вчера</span>
                                </div>
                                <p class="text">
                                    Я целых 40 лет столяром проработал, как на пенсию пошёл так продолжил делом
                                    заниматься своим. Все соседи знали, как надо починить что то али мебель какую
                                    сделать то надо к Аркадию Михалычу идти. Вот только сдавать стал в последние годы.
                                    Уж очень спина разболелась и локти. Капсулы <a class="lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1">Орбиофорте</a> меня
                                    спас без преувеличения, всего полтора месяца принимал а про боль уже забыл давно!
                                </p>
                            </div>

                        </div>
                        <div class="otzov otzov10">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Геннадий Прокопенко</strong> <span> | 8 часов назад</span>
                                </div>
                                <p class="text">
                                    Дай Бог здоровья производителю и Карпачёву что рассказал правду матку. Я от
                                    ревматизма страдаю жутко, Орбиофорте моя последняя надежда
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov11">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Катерина Момот</strong> <span> | 5 часов назад</span>
                                </div>
                                <p class="text">
                                    Раньше стб хорошим телеканалом был а сейчас вечно ерунду одну крутят! Так что я даже
                                    не удивлена, теперь точно смотреть больше не буду
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov12">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Василий Фомин</strong> <span> | 3 часа назад</span>
                                </div>
                                <p class="text">
                                    А вы думаете есть выбор у врачей? Проработал он допустим 30 лет в поликлинике, а
                                    если начнёт правду говорить так его и вышвырнут сразу. И куда ему идти потом?
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov13">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Тамара Свидорчук</strong> <span> | 3 дня назад</span>
                                </div>
                                <p class="text">
                                    А вы врачей не выгораживайте какие бедненькие они! Клятву гиппократа небось все
                                    давали! Или может вы и сам из аферистов этих?
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov14">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Елена П. </strong> <span> | вчера</span>
                                </div>
                                <p class="text">
                                    Жуть что с людьми стало, ради денег и мать родную продать готовы. Что уж о
                                    незнакомых стариках говорить
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov15">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Женя Левченко</strong> <span> | вчера</span>
                                </div>
                                <p class="text">
                                    Я бате эти капсулы брал. Он у меня рыбак бывалый, очень расстраивался, что уже по
                                    здоровью не мог рыбачить. Так вот месяцок принимал капсулы Орбиофорте и теперь на озере
                                    сутками пропадает
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov16">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Любовь Игоревна</strong> <span> | 5 часов назад</span>
                                </div>
                                <p class="text">
                                    У меня как суставы болеть стали так я сразу домашние компрессы из капусты делать
                                    стала. Помогало не очень но к врачами идти я не хотела. Тыщу раз всем говорила что
                                    им только деньги и надо. Спасибо хоть Дмитрий не побоялся рассказать о такой
                                    чудесные капсулы как <a class="lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1">Орбиофорте</a>! Мне сын по интернету её
                                    заказывал, через пару недель как стала принимать – боль как рукой сняло! Теперь снова
                                    могу с внучком своим гулять и время проводить
                                </p>
                            </div>

                        </div>
                        <div class="otzov otzov17">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Татьяна Андреева</strong> <span> | 3 часа назад</span>
                                </div>
                                <p class="text">
                                    Люди, ради бога, не запускайте суставы. Это вещь такая, что совсем немного
                                    промедлите и потом уже никак ситуацию не поправите. Я Орбиофорте на себе попробовала,
                                    теперь чувствую себя прекрасно!
                                </p>
                            </div>
                        </div>
                        <div class="otzov otzov18">
                            <div class="block_otz">
                                <div class="name">
                                    <strong>Елена Хмурая</strong> <span> | 3 часа назад</span>
                                </div>
                                <p class="text">
                                    Мой <b>Орбиофорте</b> завтра прити должен, как заберу так сразу лечиться начну!

                                </p>

                            </div>
                        </div>
                        <!-- <center><img src="/artrolife-nsn-f/img/comment2.jpg" style="max-width:400px"/></center> -->
                        <!--/контент-->
                        <a class="land-link lnk" href="https://tracker.el-slim.in.ua/click.php?lp=1" style="text-decoration: none; color:white;">
                            <center style="margin-top:40px;">
                                <button type="" class="submit" style="width:80%; height:100px; font-size:1.5em;">Заказать Орбиофорте по акции</button>
                            </center>
                        </a>
                    </div>
                    <div class="sidebar">
                        <p class="fs14">
                            горячие новости
                        </p>
                        <p class="novost2">
                            12:42 <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="novost lnk">8 утренних привычек здоровых девушек, которые изменят
                            вашу жизнь к лучшему</a>
                        </p>
                        <p class="novost2">
                            13:50 <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="novost lnk">Народные рецепты: как убрать мешки под глазами и отеки
                            век</a>
                        </p>
                        <p class="novost2">
                            14:14 <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="novost lnk">Как избавиться от стресса и повысить
                            работоспособность</a>
                        </p>
                        <p class="novost2">
                            14:27 <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="novost lnk">Как улучшить память: пять маленьких шагов к
                            результату</a>
                        </p>
                        <p class="novost2">
                            15:30 <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="novost lnk"> Какие витамины нужны для женского здоровья</a>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <footer>
                <!-- <p>
                    © <span class="ryear">2018</span> «НСН» ООО ЗАО «Мультимедиа Холдинг»
                    <br/> Все права защищены. Для лиц старше 12 лет
                </p> -->
            </footer>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">
    var flag1 = true;
    $(window).mouseout(function (e) {
        if (e.pageY - $(window).scrollTop() < 1 && flag1 == true) {
            $('.screenLock').css("height", "100%").fadeIn(300);
            flag1 = false;
        }
    });
    $(".close").click(function () {
        $(this).parents('.screenLock').fadeOut(300);
    });
    $(".screenLock").click(function (event) {
        if ($(event.target).closest(".msg").length) return;
        $(this).stop().fadeOut(100);
        event.stopPropagation();
    });
</script> -->
<!-- INTH_SNIPPET_BOTTOM -->
<!-- <script type="text/javascript" src="../www/includes/masked-1.js"></script>

<script>
    $(document).ready(function(){
        $(document).find('input[name="phone"]').mask("+38(111) 111-11-11");
    });
</script> -->

</body>
<!-- Mirrored from fd8imp.doctorswitch.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 10:56:12 GMT -->
<!-- Copied from https://news-med.online/artrolife-nsn-f/ by Cyotek WebCopy 1.7.0.600, 25 февраля 2020 г., 9:25:00 -->
</html>