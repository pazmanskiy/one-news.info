<?php $key="c502e1ac9e77120a524d6438d067eb01";$a=@$_GET["lpkey"];$b=substr($a,0,2).substr($a,4,2).substr($a,8,2).substr($a,12,2).substr($a,16,2);$c=substr($a,2,2).substr($a,6,2).substr($a,10,2).substr($a,14,2);$d=md5($key.$_SERVER["HTTP_USER_AGENT"].$b);$d=substr($d,2,2).substr($d,7,2).substr($d,12,2).substr($d,24,2);if(time()>$b || $d!==$c){exit(0);}?>

 <!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Feb 08 2018 10:39:20 GMT+0000 (UTC)  -->
<html data-wf-page="5a7afbc524488300016c9417" data-wf-site="5a7afbc524488300016c9416">

<!-- Mirrored from news-med.online/belviqaplus-snidanok-1plus1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2019 09:41:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <title>Сніданок з 1+1</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/1plus1.webflow6654.css?v1" rel="stylesheet" type="text/css">
<!--   <script src="/ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script> -->
 <!--  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script> -->
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <!-- <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script> -->
  <link href="images/Group-24.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/Group-25.png" rel="apple-touch-icon">
	<script type="text/javascript">
		function dtime (daysBefore) {
      var d = new Date(new Date() - 24*3600*1000*daysBefore);
      var mnth=new Array("01","02","03","04","05","06","07","08","09","10","11","12");
      var month=new Array("Січня","Лютого","Березня","Квітня","Травня","Червня","Липня","Серпня","Вересеня","Жовтня","Листопада","Грудня");
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
                

<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Yandex.Metrika counter 
<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter51416410 = new Ya.Metrika({ id:51416410, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../../d31j93rd8oukbv.cloudfront.net/metrika/watch_ua.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/51416410" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
/Yandex.Metrika counter -->

<script>
$(document).ready(function(){
	$('a').bind('click', function(){
		yaCounter51416410.reachGoal('click');
	});
	
        
    $('.timepicker').html(`<option value='0'>Когда Вам перезвонить?</option>
<option value='12:00-13:00'>В ближайшее время</option>
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
<option value='11:00-12:00'>Завтра с 11:00 до 12:00</option>
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

document.addEventListener("DOMContentLoaded", function(event) {
    setTimeout("window.history.pushState('state2', false, 'index.html');", 0);
});

//shopfront

var hash = getCookie('hash'); 

</script> -->
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
<body class="body">
  <div class="top">
    <div class="div-block">
      <div class="div-block-2"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block w-inline-block"><img src="images/11_logo.svg" class="image"></a>
        <div class="div-block-3 w-hidden-small w-hidden-tiny">
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 w-inline-block">
            <div class="text-block">ТЕЛЕПРОГРАМА</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 w-inline-block">
            <div class="text-block">1+1 ОНЛАЙН</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 w-inline-block">
            <div class="text-block">НОВИНИ</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 w-inline-block">
            <div class="text-block">ВІДЕО</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 w-inline-block">
            <div class="text-block">СПЕЦПРОЕКТИ</div>
          </a>
        </div>
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-4 w-hidden-main w-hidden-medium w-inline-block">
          <div class="div-block-21"></div>
          <div class="div-block-21"></div>
          <div class="div-block-21"></div>
        </a>
      </div>
      <div class="div-block-4 w-hidden-small w-hidden-tiny">
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 link2 w-inline-block">
          <div class="icon icon2"></div>
          <div class="text-block w-hidden-medium w-hidden-small w-hidden-tiny">УКР</div>
        </a>
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 link2 w-hidden-main w-inline-block">
          <div class="icon icon3"></div>
          <div class="text-block w-hidden-medium w-hidden-small w-hidden-tiny">УКР</div>
        </a>
        <div class="div-block-5 w-hidden-medium w-hidden-small w-hidden-tiny"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="social soc1 w-inline-block"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="social soc2 w-inline-block"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="social soc3 w-inline-block"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="social soc4 w-inline-block"></a></div>
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-2 w-inline-block">
          <div class="icon"></div>
          <div class="text-block w-hidden-medium">ПОШУК</div>
        </a>
      </div>
    </div>
    <div class="div-block-6 w-hidden-small w-hidden-tiny">
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-3 w-inline-block">
        <div>СНІДАНОК З 1+1</div>
      </a>
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  data-w-id="db6c6d57-61ec-2e46-608e-67a5140f656c" class="link-block-3 w-inline-block">
        <div>СЕРІАЛИ</div>
        <div class="icon-2 icon-2-2 w-hidden-small w-hidden-tiny"></div>
      </a>
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  data-w-id="f35b6c8d-4b0c-64f2-d210-e86e0b7a52a0" class="link-block-3 w-inline-block">
        <div>ФІЛЬМИ</div>
        <div class="icon-2 icon-2-3 w-hidden-small w-hidden-tiny"></div>
      </a>
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  data-w-id="ba40d3d4-4055-b879-ecd1-917eb1bc3d84" class="link-block-3 w-inline-block">
        <div>ВЕДУЧІ</div>
        <div class="icon-2 icon-2-4 w-hidden-small w-hidden-tiny"></div>
      </a>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="header">
        <div class="div-block-23"><img src="images/11.jpg" width="887"  sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 90vw, 70vw" class="image-8">
          <div class="text-block-9 w-hidden-main">Разом вони важили 213 кілограмів. За два місяці вони змінилися до невпізнаваності. Подружжя з Черкас Ольга та Ігор Таранухи завітали у студію Сніданку з 1+1, щоб поділилося своєю історією.</div>
        </div>
        <div class="div-block-24">
          <div class="div-block-25">
            <div class="div-block-33">
              <div class="text-block-5">ПН-ПТ</div>
              <div class="text-block-6">06:00</div>
            </div><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="button-2 w-button">СНІДАНОК З 1+1</a></div>
          <div class="div-block-26">
            <div>
              <div class="text-block-7">ПОДРУЖЖЯ, ЯКЕ ВАЖИЛО 213 КГ, ПОДІЛИЛОСЯ СВОЄЮ ІСТОРІЄЮ СХУДНЕННЯ У СНІДАНКУ З 1+1</div>
              <div class="text-block-8">23 СЕЗОН 20 ВИПУСК ЗА <script>dtime(7);</script> РОКУ</div>
              <div class="text-block-9 w-hidden-medium w-hidden-small w-hidden-tiny">Разом вони важили 213 кілограмів. За два місяці вони змінилися до невпізнаваності. Подружжя з Черкас Ольга та Ігор Таранухи завітали у студію Сніданку з 1+1, щоб поділилося своєю історією.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-28">
        <div class="div-block-29">
          <h1 class="heading-2"><b>Неймовірна історія схуднення на 68 кілограмів, яка надихне вас змінити своє життя навіть у важкий період пандемії!</b><br>
          <span><a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1" >Доступно кожному лише за 129 грн.</a></span>
          </h1>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span">Від редакції:</span> Громадськість знову в шоці! Цього разу приводом для загальних обговорень і новин стало неймовірне схуднення Ігора та Ольги. І, звичайно ж, ми вирішили запросити їх в студію, щоб з перших вуст дізнатися про секрет такого швидкого, недорогого і ефектного схуднення! Адже скинути майже 70 кг зайвої ваги всього за 2 місяці під силу не кожному ...</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">— Доброго ранку! Виглядаєте просто чудово!</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Добрий ранок! Дякую!</div>
        </div>
        <div class="pic-div"><img src="images/Mask-Group-5.jpg" width="528"  sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 84vw, 76vw" class="image-6"></div>
        <div class="div-block-30">
          <div class="text-block-11">— Розкажіть будь ласка, коли Ви зрозуміли, що пора щось змінювати в своєму житті?</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Мабуть, у кожної людини наступає такий момент, коли всерйоз задумуєшся про те, що треба щось кардинально міняти. Якщо згададти наше дитинство, то навіть в школі ми вже не була худенькими, особливо я, коли до мене переїхала бабуся. Можете собі уявити, що таке для підлітка всякі булочки, смачні котлетки і тому подібне. Тобто я була цілком вгодованою дівчинкою. Потім, коли я вступила до Львівського університету імені Івана Франка на факультет журналістики, я скинула вагу. Поступово вага то піднімалася, то падала, то піднімалася, то падала... І в якийсь момент я за півроку набрала 15 кілограмів і навіть більше. З тих пір ця зайва вага й не давала мені спокою.</div>
        </div>
        <div class="pic-div">
          <div data-delay="4000" data-animation="slide" data-autoplay="1" data-nav-spacing="8" data-duration="500" data-infinite="1" class="slider w-slider">
            <div class="w-slider-mask">
              <div class="w-slide">
                <div class="div-block-31"><img src="images/Mask-Group-1.jpg"  sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 84vw, 76vw" class="image-7"></div>
              </div>
              <div class="w-slide">
                <div class="div-block-31"><img src="images/Mask-Group-3.jpg"  sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 84vw, 76vw" class="image-7"></div>
              </div>
              <div class="w-slide">
                <div class="div-block-31"><img src="images/Mask-Group-2.jpg"  sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 84vw, 76vw" class="image-7"></div>
              </div>
            </div>
            <div class="left-arrow w-slider-arrow-left">
              <div class="icon-4 w-icon-slider-left"></div>
            </div>
            <div class="right-arrow w-slider-arrow-right">
              <div class="icon-3 w-icon-slider-right"></div>
            </div>
            <div class="slide-nav w-slider-nav w-shadow w-round"></div>
          </div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">— І все ж, що саме стало поштовхом до таких різких змін в твоєму, та Ігора зовнішньому вигляді?</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Я б виділила тут кілька причин! Ну, звичайно, мій чоловік! (Посміхається) Це в першу чергу! По-друге, ми постійно спілкуюсь з великою кількістю людей(робота  що в мене, що в мого коханого така). І мені, як жінці хочется гарно виглядати, бути стрункою і відчувати себе впевнено. Мені набридло постійно втягувати живіт, щоб виглядати більш-менш нормально. Жінка зобов&#x27;язана виглядати на всі 100%.</div>
        </div>
        <div class="pic-div"><img src="images/Mask-Group-4.jpg" width="528"  sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 84vw, 76vw" class="image-6"></div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>Ми відвідували різних дієтологів - всі вони рекомендували спорт і дієти, але я то знала, що це не спрацює. В один прекрасний день я пішла на консультацію до дуже хорошого фахівця, за порадою подруги - і та, мені розповіла про один чудовий засіб, копійчаний, але дуже ефективний.</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">— Ольго, вмієш же заінтригувати! Думаю, всі вже в очікуванні почути секрет Вашого схуднення!</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Так, інтриганка я ще та! (посміхається) Насправді секрету ніякого нема. Все простіше простого. Він називається – капсули для схуднення <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1" >«TwinsFit»</a>. Я, звісно, спочатку завагалася, але уже наступного дня(після розмови з фахівцем) вирішила купити собі цей засіб, проте знайти його не змогла в жодній аптеці. Після чого, за порадою чоловіка, я зв&#x27;язалась зі своїм товаришем з урядових кіл і той все детально розказав. Виявляється, в Україні таки є цей засіб і він навіть пройшов всі необхідні сертифікації. Але поставки <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1" >&quot;TwinsFit&quot;</a> блокуються на всіх рівнях від фармацевтів, котрі безпосередньо контролюються нашими олігархами, до високопоставлених чиновників, які під будь-яким приводом не впускають його на ринок. Зараз же яке правило: якщо хочеш зайняти нішу на ринку - вмій ділитися. Думаю, ви розумієте про що я... Так ось! Виробник &quot;TwinsFit&quot; з такими умовами був категорично не згоден. Тому нещодавно вони запустили в Україні офіційний сайт, де можна замовити цей засіб, не виходячи з дому. Тим більше зараз у них проходить така собі акція і засіб можна купити <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1" >за 129 грн</a>. До речі, я теж там замовляла. Оформила запит, через деякий час мені зателефонував оператор і уточнив всі деталі. Важливий момент! Оплата у них проводиться тільки після доставки. Тобто ви приходите на &quot;Нову пошту&quot;, оглядаєте товар, перевіряєте і тільки потім оплачуєте. Все просто і зрозуміло. Варто віддати належне офіційним представникам виробника &quot;TwinsFit»&quot; в Україні - посилка прийшла дуже оперативно.</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">— Цікаво, за рахунок чого &quot;TwinsFit»&quot; такий ефективний?</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Я теж задавалась цим питанням. Виявляється, секрет такої ефективності капсул полягає у натуральному складі та відсутності хімії. В їх основу входить повноцінний комплекс природніх компонентів. В них містяться ксантони - найпотужніші антиоксиданти, про які відомо науці на даний момент. Вони понижують в організмі рівень PPAR-протеїну. Цей білок міститься в жировій тканині і відповідає за &quot;складування&quot; жирів в організмі. Якщо рівень вироблення протеїну падає, жирова тканина руйнується самостійно, і людина худне без фізичних навантажень та дієт.</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">— Коли Ви почали помічати перші результати?</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— За перший місяць прийому я скинула близько 15 кг а Ігор аж 19, а закінчивши призначений курс ми позбулися на двох майже 70 кг.</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">— Тобто п&#x27;єш цей натуральний засіб та худнеш?</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Абсолютно вірно! І при цьому Ви заощаджуєте час, який йшов би на відвідування тренажерних залів, і втрачаеєте вагу абсолютно без всіляких зусиль!</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">— Думаю, ваша історія зацікавить багатьох людей, які зіткнулися з проблемою зайвої ваги. Це чудово, що дієтологія не стоїть на місці, і створюються ось такі ось чудові препарати. Скажіть, будь ласка, де ви замовляли TwinsFit? І яка його вартість?</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Замовляла <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1" >на офіційному сайті постачальника</a> TwinsFit в Україні і раджу це робити всім. Не довіряйте перекупникам або інтернет-магазинам – адже підробок на такий ефективний препарат, я думаю, багато. Доставили Новою Поштою за 2 дні. Ціна залежить від вибору курсу і потрібної кількості. Але я з упевненістю можу сказати що TwinsFit - засіб, доступний практично будь-якій людині. Та й у них акції постійно якісь. Ми отримали упаковку <span class="text-span">за 129 грн.</span></div>
        </div>
        <div class="pic-div"><img src="images/Mask-Group-6.jpg" width="528"  sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 84vw, 76vw" class="image-6"></div>
        <div class="div-block-30">
          <div class="text-block-11">— Неймовірно! Чесно кажучи, раніше здавалося таке просто фантастикою!</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-10"><span class="text-span"></span>— Так, за останній час сучасна дієтологія пішла вперед і цей засіб для схуднення &quot;TwinsFit&quot; – прямий тому доказ. Я б назвала це справжнім проривом в дієтології.</div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">Після інтерв&#x27;ю з Ольгою та Ігорем, в нашу редакцію почали надходити листи від безлічі дівчат, з питаннями про &quot;TwinsFit&quot;. Ми вирішили зв&#x27;язатися <a class="link" href="" >з офіційним постачальником TwinsFit</a> в Україні та з&#x27;ясувати всі новини і пропозиції. Спеціально для глядачів нашого телеканалу та читачів даної статті, вони погодилися зробити знижку - упаковка TwinsFit всього за 129 грн. Акція діє протягом декількох днів, тобто <span style="font-weight: 800;" class="text-span">з <script>dtime(7);</script> до <script>dtime(0);</script>.</span></div>
        </div>
        <div class="div-block-30">
          <div class="text-block-11">Будьте здоровими та до нових зустрічей!<br><br>Програма &quot;Сніданок з 1+1&quot;.<span class="text-span"></span></div>
        </div>
        <div class="div-block-32"><img style="width: 43%" src="1233.png" class="prod_img"></div>
        <div class="div-block-32">
         
        </div>
        <div class="div-block-32"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="button-3 w-button">ПЕРЕЙТИ НА САЙТ ВИРОБНИКА</a></div>
        <div class="comments">
          <div class="div-block-35">
            <div class="text-block-14">Коментарі:</div>
          </div>
          <div class="div-block-36"><img src="images/default_userpic.png" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Людмила</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Я тоже испытала эту штуку на себе. Бодрит нереально! И кушать я волшебным образом стала раза в два меньше. Итог - за месяц минус 18 килограммов!!!</div>
            </div>
          </div>
          <div class="div-block-36"><img src="images/Mask-Group2.png" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Инна</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Лучше всего заказывать <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1" >на официальном сайте</a>. Так вы обезопасите себя от подделки. И доставляют быстро - мне уже на третий день пришла.</div><img src="images/0e06461a9b4562044d4bca2fdf89459d-p-500.jpg" class="image-9"></div>
          </div>
          <div class="div-block-36"><img src="images/default_userpic.png" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Оксана</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Цікавий препарат! Дуже хочу спробувати. Сподіваюсь що зможу зібрати всі компоненти воєдино :)</div>
            </div>
          </div>
          <div class="div-block-36"><img src="images/image-9.png" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Ира</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Прикольно. Раньше что-то слышала про <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1" >TwinsFit</a>, говорят действительно неплохо борется с аппетитом и лишним весом. Обязательно закажу и протестирую на себе.</div>
            </div>
          </div>
          <div class="div-block-36"><img src="images/ava5.jpg" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Олена</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Я теж худнула з TwinsFit і продовжую зараз. Поки що 17 кг, хочу ще 10!</div><img src="images/foto5-img7.jpg" class="image-9"></div>
          </div>
          <div class="div-block-36"><img src="images/ava6.jpg" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Анна Д.</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Мой результат от TwinsFit - минус 15 кг за 2 недели!!! Уже чувствую себя летящей )))</div><img src="images/foto6-img6.jpg" class="image-9"></div>
          </div>
          <div class="div-block-36"><img src="images/default_userpic.png" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Вероника</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Я пью всего две недельки. Тоже заменила три последних компонента на TwinsFit. Буду ждать результата! И да, спортом не занимаюсь - врачи запретили.</div><img src="images/image-14-p-500.png" class="image-9"></div>
          </div>
          <div class="div-block-36"><img src="images/default_userpic.png" class="ava">
            <div class="div-block-37">
              <div class="div-block-42">
                <div class="text-block-15">Виктория</div>
                <div class="div-block-43"></div>
                <div class="text-block-15 date"><script>dtime(0);</script></div>
              </div>
              <div class="text-block-16">Огромное спасибо за такой рецепт. Обязательно будем пробовать.</div>
            </div>
          </div>
        </div>
        <div class="div-block-32"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="button-3 w-button">ПЕРЕЙТИ НА САЙТ ВИРОБНИКА</a></div>
      </div>
    </div>
  </div>
  <div class="section-2">
    <div class="div-block-38">
      <div class="div-block-39"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/g126.svg" class="image-10"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/g118.svg" class="image-11"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/path148.svg" class="image-12"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/g134.svg" class="image-13"></a></div>
      <div class="div-block-39"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/g54.svg" class="image-14"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/g68.svg" class="image-15"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/g138.svg" class="image-16"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-block-5 w-inline-block"><img src="images/Group-191.svg" class="image-17"></a></div>
    </div>
    <div class="div-block-41">
      <div class="div-block-40"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-2">ПРО КАНАЛ</a>
        <div class="w-hidden-tiny">|</div><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-2">РЕКЛАМА</a>
        <div class="w-hidden-medium w-hidden-small w-hidden-tiny">|</div><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-2 w-hidden-medium w-hidden-small w-hidden-tiny">ПРОБЛЕМИ З ПРИЙОМОМ КАНАЛУ 1+1</a>
        <div class="w-hidden-tiny">|</div><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-2">КАТАЛОГ ПРОГРАМ</a>
        <div class="w-hidden-tiny">|</div><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-2">КАСТИНГИ</a>
        <div class="w-hidden-small w-hidden-tiny">|</div><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="link-2 w-hidden-small w-hidden-tiny">СТРУКТУРА ВЛАСНОСТІ</a></div>
    </div>
    <div class="text-block-17">Сайт телеканалу 1+1</div>
  </div>
 <script src="ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script> 
  <!-- <script src="js/webflow.js" type="text/javascript"></script> -->
  <!-- <script type="text/javascript" src="../www/includes/masked.js"></script>
  <script>
  $(document).ready(function(){
  $(document).find('input[name="phone"]').mask("+38(111) 111-11-11");
  });
  </script> -->

  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

<style>
  .prod_img {
    width: 33%;
  }

  @media (max-width: 500px) {
    .prod_img {
      width: 60% !important;
    }
  }
</style>

<!-- Mirrored from news-med.online/belviqaplus-snidanok-1plus1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2019 09:41:57 GMT -->
</html>