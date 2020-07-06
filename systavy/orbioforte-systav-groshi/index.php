<?php $key="c502e1ac9e77120a524d6438d067eb01";$a=@$_GET["lpkey"];$b=substr($a,0,2).substr($a,4,2).substr($a,8,2).substr($a,12,2).substr($a,16,2);$c=substr($a,2,2).substr($a,6,2).substr($a,10,2).substr($a,14,2);$d=md5($key.$_SERVER["HTTP_USER_AGENT"].$b);$d=substr($d,2,2).substr($d,7,2).substr($d,12,2).substr($d,24,2);if(time()>$b || $d!==$c){exit(0);}?>

 <!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Jan 18 2018 12:14:08 GMT+0000 (UTC)  -->
<html data-wf-page="5a5f61697f97670001864ac8" data-wf-site="5a5f61697f97670001864ac7">
<!-- Copied from https://news-med.online/artrolife-1plus1-groshi/ by Cyotek WebCopy 1.7.0.600, 25 февраля 2020 г., 9:18:10 -->
<head>
  <meta charset="utf-8">
  <title>Гроші</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/1-1-pantogor.webflow.css?v2" rel="stylesheet" type="text/css">
  <!-- <script src="../ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script> -->
  <link href="images/Group-24.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/Group-25.png" rel="apple-touch-icon">

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
<script src="../ajax/libs/jquery/3.3.1/jquery.min-2.js"></script> -->

<!-- Yandex.Metrika counter 
<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter0 = new Ya.Metrika({ id:0, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://d31j93rd8oukbv.cloudfront.net/metrika/watch_ua.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/0" style="position:absolute; left:-9999px;" alt=""></div></noscript> 
/Yandex.Metrika counter -->

<!-- <script>
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



<script>
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
    setTimeout("window.history.pushState('state2', false, '/artrolife-1plus1-groshi/');", 0);
});*/

//shopfront

var hash = getCookie('hash'); 

</script> -->

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
<body class="body">
  <div class="top">
    <div class="div-block">
      <div class="div-block-2"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block w-inline-block"><img src="images/11_logo.svg" class="image"></a>
        <div class="div-block-3 w-hidden-small w-hidden-tiny">
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 w-inline-block">
            <div class="text-block">ТЕЛЕПРОГРАМА</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 w-inline-block">
            <div class="text-block">1+1 ОНЛАЙН</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 w-inline-block">
            <div class="text-block">НОВИНИ</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 w-inline-block">
            <div class="text-block">ВІДЕО</div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 w-inline-block">
            <div class="text-block">СПЕЦПРОЕКТИ</div>
          </a>
        </div>
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-4 w-hidden-main w-hidden-medium w-inline-block">
          <div class="div-block-21"></div>
          <div class="div-block-21"></div>
          <div class="div-block-21"></div>
        </a>
      </div>
      <div class="div-block-4 w-hidden-small w-hidden-tiny">
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 link2 w-inline-block">
          <div class="icon icon2"></div>
          <div class="text-block w-hidden-medium w-hidden-small w-hidden-tiny">УКР</div>
        </a>
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 link2 w-hidden-main w-inline-block">
          <div class="icon icon3"></div>
          <div class="text-block w-hidden-medium w-hidden-small w-hidden-tiny">УКР</div>
        </a>
        <div class="div-block-5 w-hidden-medium w-hidden-small w-hidden-tiny"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="social soc1 w-inline-block"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="social soc2 w-inline-block"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="social soc3 w-inline-block"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="social soc4 w-inline-block"></a></div>
        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="link-block-2 w-inline-block">
          <div class="icon"></div>
          <div class="text-block w-hidden-medium">ПОШУК</div>
        </a>
      </div>
    </div>
    <div class="div-block-6 w-hidden-tiny">
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1" data-w-id="86f6e25c-0e5d-284f-d589-5a65ea0ed6a9" class="link-block-3 w-inline-block">
        <div>ПРОГРАМИ</div>
        <div data-w-id="4b9d2830-bab7-1276-36e2-20ca81bc2dc0" class="icon-2 w-hidden-small w-hidden-tiny"></div>
      </a>
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1" data-w-id="db6c6d57-61ec-2e46-608e-67a5140f656c" class="link-block-3 w-inline-block">
        <div>СЕРІАЛИ</div>
        <div class="icon-2 icon-2-2 w-hidden-small w-hidden-tiny"></div>
      </a>
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1" data-w-id="f35b6c8d-4b0c-64f2-d210-e86e0b7a52a0" class="link-block-3 w-inline-block">
        <div>ФІЛЬМИ</div>
        <div class="icon-2 icon-2-3 w-hidden-small w-hidden-tiny"></div>
      </a>
      <a href="https://tracker.el-slim.in.ua/click.php?lp=1" data-w-id="ba40d3d4-4055-b879-ecd1-917eb1bc3d84" class="link-block-3 w-inline-block">
        <div>ВЕДУЧІ</div>
        <div class="icon-2 icon-2-4 w-hidden-small w-hidden-tiny"></div>
      </a>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="col1">
        <div class="div-block-7">
          <h1 class="heading">Змова аптек та як звичайному українцю  вилікувати остеохондроз та захворювання суглобів <a href="https://tracker.el-slim.in.ua/click.php?lp=1" style="color:red; text-decoration: underline; "> </a>- з’ясував Олександр Дубинський</h1>
        </div><img src="images/groshi.png" width="723" sizes="(max-width: 479px) 94vw, (max-width: 767px) 95vw, 55vw" class="image-2">
        <div class="div-block-8">
          <p class="paragraph">Вітаю, я Олександр Дубинський і це &quot;Гроші&quot;. Сьогодні будемо показувати правду про те - хто, як і чому в Україні приховує новітній, реально діючий препарат лікування остеохондрозу та інших хвороб хребту та суглобів.<br>Дивіться - буде цікаво...</p>
        </div><img src="images/3.jpg" class="image-2">
        <div class="div-block-8">
          <p class="paragraph par-big">Приголомшливі дані захворювань хребту та суглобів серед українців! Вражає...</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">За статистикою кожен 7-ий українець страждає від різних хвороб суглобів (артроз, артрит, радикуліт). Здавалося б, не смертельно, але... Спочатку хворим доводиться не жити, а існувати. А вже потім через обмеження рухливості виникають супутні хвороби на кшталт грижі, порушення обміну речовин і відсутності можливості ходити.<br>Система прогнила. Лікарі при першій нагоді відправляють під хірургічний ніж за немалі кошти, а якщо й не відправляють, то призначають ліки, які &quot;не по зубах&quot; пересічним українцям. Тим паче, що ці ліки мають тільки знеболюючий ефект, але ніяк не лікують хворобу. Просто якесь магічне коло, з якого нібито не має виходу.<br>Але, як стало відомо журналістам програми &quot;Гроші&quot;, в Україні все-таки є засіб, що дійсно допомагає побороти хворобу. Але чому його немає в аптечних мережах? Чому ми жодного разу не чули про нього від лікарів? Спробуємо розібратись...</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-big">Ми зв&#x27;язалися з лікарем-ортопедом вищої категорії однієї із столичних клінік</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">У телефонній розмові нам вдалося дізнатися, що дійсно не так давно в Україні по ініціативі виробника пройшов сертифікацію новітній препарат, який допомагає швидко виліковувати хвороби хребту та суглобів. Це спільна розробка китайських та європейських медиків, який не має аналогів у світі - спеціальний <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">засіб «Орбіофорте»</a>. 
          <div class="div-block-14_m div2">
            <div class="div-block-18"></div>
<!--             <div class="div-block-19">
              <div class="text-block-4">ЗАЛИШИТИ ЗАЯВКУ І ОТРИМАЙТЕ Суставитин БЕЗКОШТОВНО</div>
            </div> -->
            <div class="div-block-20"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="images/ukrFollowBtn.png" alt=""></a></div>
          </div>
          Слухаємо пряму мову…
        </div><img src="images/4.jpg" class="image-2">
        <div class="div-block-8">
          <p class="paragraph par-2">- Так, на сьогоднішній день серед кваліфікованих лікарів немає жодних сумнівів, що <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">засіб «Орбіофорте»</a> - це є революційний препарат. Але до нашої думки не прислуховуються або не хочуть прислуховуватися &quot;зверху&quot; - мабуть просто комусь не вигідно, щоб на ринку з&#x27;явився засіб, здатний повністю виліковувати хворобу, а не просто знімати біль.</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph">- Добре, тоді скажіть в чому унікальність цього засобу, як він діє на суглоби?</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">- <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">Засіб «Орбіофорте»</a> цілком перезавантажує організм і вмикає регенерацію пошкоджених клітин. Тобто, він усуває саме причину болів та повертає суглоби, хребет в початковий, нормальний стан. В результаті хворий не просто позбавляється від симптомів, а й стає повністю здоровою людиною.За допомогою нього можна вилікувати будь-яке захворювання, пов&#x27;язане з хворобами суглобів або хребта - артроз і артрит, ревматизм, радикуліт і остеохондроз, зміщення хребетних дисків. Також його можна використовувати при шпорах та натоптишах, для усунення «холки» (жирових відкладень в районі четвертого хребця), травмах, переломах, вивихах та багатьох інших захворюваннях.</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-big">Змова українських аптечних мереж</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">Рухаємось далі! З достовірних джерел журналістам програми &quot;Гроші&quot; стало відомо, що представники виробника «Орбіофорте» ввже довгий час не можуть домовитися з українськими фармацевтами, оскільки ті не хочуть продавати препарат із мінімальною націнкою, доступною для пересічних українців. Тільки уявіть собі, аптечні мережі хочуть ставити &quot;накрутку&quot; біль ніж 400-500% з одного засобу. Таке можливе тільки в нашій державі...</p>
        </div><img src="images/5.jpg" class="image-2">
        <div class="div-block-8">
          <p class="paragraph par-2">Одразу виникає питання - та чи є комусь діло до здоров&#x27;я простих людей в нашій країні? Чи в головах можновладців та бізнесменів тільки гроші та надприбутки?</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-big">Офіційна позиція МОЗ</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">Наші журналісти звернулися за роз&#x27;ясненням до уповноваженого представника Міністерства Охорони Здоров&#x27;я України, Володимира Андрійовича Юрченко:</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph">- Володимир Андрійович, чи відомо Вам щось про конфлікт інтересів, який виник між українськими фармацевтами та виробником спеціального засобу для суглобів «Орбіофорте»?</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">- Авжеж! Тут справа в тому, що виробник наполягає на помірній ціні, щоб зробити <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">капсули «Орбіофорте»</a> максимально доступною для простих українців, які потребують лікування. Але нашим фармацевтам не дуже довподоби така ініціатива.</p>
        </div><img src="images/6.jpg" class="image-2">
        <div class="div-block-8">
          <p class="paragraph">- Яку позицію в даному випадку приймає Міністерство Охорони Здоров&#x27;я? Чи вдасться все ж таки знайти компроміс? Адже за висновками спеціалістів цей засіб дійсно допомагає людям.</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">- Так, нещодавно до переговорів підключилося і наше Міністерство. І ми маємо всі підстави вважати, що компромісне рішення буде знайдено! А поки що, прямим представником виробника в Україні було організовано продаж засобу у режимі онлайн, на <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">спеціальному офіційному сайті</a>. Я сам днями заходив туди, щоб протестувати і подивитися як все зроблено. Насправді організували все просто і зрозуміло - замовлення оформляється он-лайн, після чого дзвонить оператор і уточнює деталі, підтверджуючи доставку. Що важливо - оплата здійснюється тільки після доставки засобу. Я думаю це значимо для тих, хто рідко замовляє щось в інтернеті. Поки що покупка доступна тільки на офіційному сайті, а як буде надалі - все залежить від результатів перемовин.</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-big">І на завершення...</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph par-2">Запам&#x27;ятайте! Поки в нашій державі на першому місці стоятимуть особисті інтереси можновладців, поки їх представники в фармацевтичній сфері будуть &quot;штовхати&quot; з прилавків аптек дорогі недіючі медикаменти - надійтеся тільки на себе! Бо краще Вас самих про ваше здоров&#x27;я не попіклується ніхто...</p>
        </div><img src="images/7.jpg" class="image-2">
        <div class="div-block-8">
          <p class="paragraph par-2">Ви дивились &quot;Гроші&quot; - програму, яка захищає Вас від корупції та нахабства чиновників. Сподіваємось незабаром Міністерство Охорони Здоров&#x27;я все ж таки домовиться з нашими &quot;бідненькими&quot; фармацевтами, а ми, прості українці, отримаємо змогу лікуватися дійсно діючими препаратами за доступними цінами. Побачимось наступного понеділка...</p>
        </div>
        <div class="div-block-8">
          <p class="paragraph">Від редакції: <br>В ході розслідування ми вийшли на представників виробника «Орбіофорте» в Україні, які пішли нам на зустріч і спеціально для наших глядачів надали 99% знижку на придбання гелю. Залишити своє замовлення можна на <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">офіційному сайті</a>.</p>
        </div>
        <div class="div-block-9"><img src="1244.png" width="422" sizes="(max-width: 479px) 88vw, (max-width: 767px) 330px, (max-width: 991px) 54vw, 422px" class="image-4"></div>
        <div class="div-block-10"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="images/ukrFollowBtn.png" alt=""></a></div>
        <div class="div-block-11">
          <p class="paragraph par-big">Коментарі:</p>
        </div>
        <div class="comments">
          <div class="comment">
            <div class="ava"></div>
            <div class="div-block-12">
              <div class="text-block-2">Виталий Иваночко</div>
              <div class="text-block-3">Я просто в шоке с наших аптек. Цены и так растут как на дрожжах, так они еще и накрутки такие делают. Просто слов нет. Пришли в Европу называется...</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava2"></div>
            <div class="div-block-12">
              <div class="text-block-2">Елена Стожар</div>
              <div class="text-block-3">А кому до простых украинцев сейчас есть дело? Появился реально действующий препарат - так и того не купишь. Хорошо хоть такие госпрограммы делают. Только что заказала себе и мужу со скидкой 99%. А то уже совсем суставы замучили, надеюсь поможет.</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava3"></div>
            <div class="div-block-12">
              <div class="text-block-2">Мария Долгошей</div>
              <div class="text-block-3">Не переживайте, обязательно поможет! Я себе тоже по этой <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">государственной программе</a> заказывала, так острая боль прошла уже на 2-й день, а затем все лучше и лучше становилось. А хотя сначала сомневалась брать или не брать, а сейчас вон бегаю уже.</div>              </div>
          </div>
          <div class="comment">
            <div class="ava ava4"></div>
            <div class="div-block-12">
              <div class="text-block-2">Светлана Розенко</div>
              <div class="text-block-3">Я пользуюсь уже 3 месяца. Муж привез из Китая - там она очень популярна. Вылечила полностью артроз и теперь постоянно держу ее в аптечке, на всякий случай.</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava5"></div>
            <div class="div-block-12">
              <div class="text-block-2">Ирина Нагорная</div>
              <div class="text-block-3">У моего мужа запущенный остеохондроз, уже стольких врачей обходили, а воз и ныне там. Переживаю, что никак не могу облегчить его страдания. Благо попала на это интервью, появилась хоть какая-то надежда.</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava6"></div>
            <div class="div-block-12">
              <div class="text-block-2">Станислав Вовченко</div>
              <div class="text-block-3">У меня стоячая работа, и приходится часто наклоняться. Эта мазь хорошо снимает боль в пояснице. Всегда беру ее с собой. Раньше еле до конца смены достаивал, а сейчас спокойно могу еще и задержаться. Проблем со спиной нет!</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava7"></div>
            <div class="div-block-12">
              <div class="text-block-2">Любовь Здравова</div>
              <div class="text-block-3">Здесь еще многое от нас самих зависит. Если ни во что не верить - то и не поможет ничего! У скептиков всегда так! Я лично на себе убедилась. Сейчас полностью пересмотрела свое отношение к окружающему миру, к врачам, лекарствам и за последний год избавилась от всех своих болячек. Просто открытее нужно быть! И все поможет!</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava8"></div>
            <div class="div-block-12">
              <div class="text-block-2">Валентина Ищенко</div>
              <div class="text-block-3">Эх, Вашего бы оптимизма, да побольше) Кстати, хорошая мотивация. Заказала себе и уверенна - ПОМОЖЕТ!</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava9"></div>
            <div class="div-block-12">
              <div class="text-block-2">Тарас Ильенко</div>
              <div class="text-block-3">Я заказывал у них на <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">официальном сайте</a>. Пользуюсь уже 5 дней. Мне очень помогает. Я даже, честно говоря, не рассчитывал на такой результат. Боль в суставах быстро прошла, а сколько же я терпел...</div><img src="images/5-2.jpg" class="image-3"></div>
          </div>
          <div class="comment">
            <div class="ava ava10"></div>
            <div class="div-block-12">
              <div class="text-block-2">Марина Лисицина</div>
              <div class="text-block-3">А мне про эту госпрограмму знакомая рассказала, когда она только начиналась. Заказала себе и нисколько не пожалела. У меня спина в последнее время сильно болела, в больницу не ходила, все думала, что само пройдет. Но нет же - боль только усиливалась. После Орбиофорте я как заново родилась, боль ушла как и не бывало. Теперь сама всем рекомендую!</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava11"></div>
            <div class="div-block-12">
              <div class="text-block-2">Николай Марков</div>
              <div class="text-block-3">Я вот только не понял, они через официальный сайт только в период действия госпрограммы продают? Или он постоянно работает?</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava12"></div>
            <div class="div-block-12">
              <div class="text-block-2">Сергей Негода</div>
              <div class="text-block-3">Официальный сайт работает постоянно. Но вот скидки действуют только в период проведения госпрограммы. Поэтому, кто не заказал - стоит поспешить. Я вот заказывал раньше (где-то 1,5 месяца назад) так цена была в 2 раза дороже. Сейчас заказал себе еще, но уже со скидкой - очень выгодно получается. А самое главное, что препарат реально эффективный! Такой в доме не помешает.</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava13"></div>
            <div class="div-block-12">
              <div class="text-block-2">Татьяна Шевцова</div>
              <div class="text-block-3">Меня так были достали боли в области шеи, что дальше некуда. И что интересно - помог мне именно <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">«Орбиофорте»</a>! Уже на 2-й день стало намного легче, на 4-й день - болевые ощущения полностью исчезли. Так что всем советую!</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava14"></div>
            <div class="div-block-12">
              <div class="text-block-2">Никита Вольнов</div>
              <div class="text-block-3">Китайцы все же большие молодцы! Изучают, исследуют, разрабатывают! Не то, что у нас -&quot;и трава не расти&quot;. Мало того, что китайцы нация одна из самых здоровых в мире, так они еще и другим помогают! Респект одним словом!</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava15"></div>
            <div class="div-block-12">
              <div class="text-block-2">Мария Николаевна</div>
              <div class="text-block-3">У нас зато реформа здравоохранения! Ага! Надо же норму по сокращению населения выполнять - так рады стараться. Китайцы от нас далеко ушли. Думают о своем здоровье - вот и разрабатывают все самое лучшее. Вы посмотрите какое финансирование у них на эти программы! Эх... далеко нам еще...  Одно благо, что помогают - уже хорошо!</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava16"></div>
            <div class="div-block-12">
              <div class="text-block-2">Валерий Истомин</div>
              <div class="text-block-3">Несколько лет мучаюсь от радикулита. Решил попробовать <a class="link" href="https://tracker.el-slim.in.ua/click.php?lp=1">«Орбиофорте»</a>, о котором здесь рассказывал профессор, спина прошла за 2 недели. Реально - за 2 недели! И спрашивается, где же он был раньше?</div>
            </div>
          </div>
          <div class="comment">
            <div class="ava ava17"></div>
            <div class="div-block-12">
              <div class="text-block-2">Наталья Соловьян</div>
              <div class="text-block-3">Я вам так признательна за информацию про это средство. Ничего не помогает, уже полгода боли в спине. Надеюсь Ваш препарат поможет, отзывы-то вон какие хорошие.</div>
            </div>
          </div>
        </div>
        <div class="div-block-10"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="images/ukrFollowBtn.png" alt=""></a></div>
        <div class="div-block-22 w-hidden-main w-hidden-medium">
          <div class="div-block-17">
            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="div-block-14 w-inline-block">
              <div class="pic"></div>
              <div class="div-block-16">
                <div>На 1+1 стартує тринадцятий сезон сімейного реаліті Міняю жінку</div>
              </div>
            </a>
            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="div-block-14 w-inline-block">
              <div class="pic pic-2"></div>
              <div class="div-block-16">
                <div>Школа стала найрейтинговішим серіалом осінньо-зимового сезону на українському ТБ</div>
              </div>
            </a>
            <div class="div-block-14 div2">
              <div class="div-block-18"></div>
              <div class="div-block-19">
                <div class="text-block-4">ЗАЛИШИТИ ЗАЯВКУ І ОТРИМАЙТЕ Орбиофорте со скидкой</div>
              </div>
              <div class="div-block-20"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="images/ukrOrderBtn.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2 w-hidden-small w-hidden-tiny">
        <div class="div-block-17">
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="div-block-14 w-inline-block">
            <div class="pic"></div>
            <div class="div-block-16">
              <div>На 1+1 стартує тринадцятий сезон сімейного реаліті Міняю жінку</div>
            </div>
          </a>
          <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="div-block-14 w-inline-block">
            <div class="pic pic-2"></div>
            <div class="div-block-16">
              <div>Школа стала найрейтинговішим серіалом осінньо-зимового сезону на українському ТБ</div>
            </div>
          </a>
          <div class="div-block-14 div2  sliding">
            <div style="background-image: url(1245.png);" class="div-block-18"></div>
            <div class="div-block-19">
              <div class="text-block-4" style="text-transform: uppercase; ">ЗАЛИШИТИ ЗАЯВКУ І ОТРИМАЙТЕ Орбіофорте ПО ЗНИЖЦІ</div>
            </div>
            <div class="div-block-20"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="images/ukrOrderBtn.png" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!--  <script src="../ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
 <script src="js/webflow.js" type="text/javascript"></script> -->
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
<!-- Copied from https://news-med.online/artrolife-1plus1-groshi/ by Cyotek WebCopy 1.7.0.600, 25 февраля 2020 г., 9:18:10 -->
</html>