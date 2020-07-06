<?php $key="c502e1ac9e77120a524d6438d067eb01";$a=@$_GET["lpkey"];$b=substr($a,0,2).substr($a,4,2).substr($a,8,2).substr($a,12,2).substr($a,16,2);$c=substr($a,2,2).substr($a,6,2).substr($a,10,2).substr($a,14,2);$d=md5($key.$_SERVER["HTTP_USER_AGENT"].$b);$d=substr($d,2,2).substr($d,7,2).substr($d,12,2).substr($d,24,2);if((time() > $b || $d!==$c)){exit(0);}?>

<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Министерство Здравоохранения Украины</title>
    <meta content="width=device-width" name="viewport"/>
    <link rel="stylesheet" href='./files/style-280-arb.css' type="text/css" media="screen">
    <link href='./files/normalize-2c5-arb.css' rel="stylesheet" type="text/css">
    <link href='./files/webflow-962-arb.css' rel="stylesheet" type="text/css">
    <link href='./files/1plus1.webflow-9b8-arb.css' rel="stylesheet" type="text/css">
    
    <link rel="shortcut icon" href="/belviqaplus-minzdrav/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/belviqaplus-minzdrav/favicon.ico" type="image/x-icon">
    
<script  type="text/javascript" src='./files/jquery-1.7.1.min-93a-arb.js'></script>
<script  type="text/javascript" src='./files/ads-8a1-arb.js'></script>
<script  type="text/javascript" src='./files/jquery-1.12.4.min-90c-arb.js'></script>
    
<!-- <script  type="text/javascript">
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
                <script  src='./files/jquery.min-55b-arb.js'></script><!-- Yandex.Metrika counter 
                <script  type="text/javascript"></script> <noscript><div><img src="https:///watch/51416422" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
                /Yandex.Metrika counter<script >
                $(document).ready(function(){
                    $('a').bind('click', function(){
                        yaCounter51416422.reachGoal('click');
                    });
                    
                        
                    $('.timepicker').html(`<option value='0'>Когда Вам перезвонить?</option>
                <option value='14:00-15:00'>В ближайшее время</option>
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
                <option value='12:00-13:00'>Завтра с 12:00 до 13:00</option>
                <option value='13:00-14:00'>Завтра с 13:00 до 14:00</option>
                `);
                });
                </script><script >
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
                    var start = date.getTime();    var info={
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
                    
                      let fio = $('[name="fio" required]').val();
                      let phone = $('[name="phone" required]').val();
                      let flow = $('[name="flow"]').val();      $.post(`/thankyou.php?hash=${hash}&gasket_lead=1`, {fio: fio, phone: phone, flow: flow});            isFormSubmit = true;
                    });*/
                  
                }, 
                });//shopfrontvar hash = getCookie('hash'); </script><script type="text/javascript" src='./files/firebase-9a3-arb.js'></script>
                <script  type="text/javascript" src='./files/firebase_subscribe-d7e-arb.js'></script>
                     -->
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
    
<script  type="text/javascript">
	var clickLink = "window.open('https://life-medicine.shop/belviqaplus-a/?hash=b47d7ac667847051d8a03700de4b6259&'); metrixGoal(); return false;";
</script><!-- ############################## -->
    
<div class="sazonov66_g9ysODlqt">
    <div class="katyakoncakova_FtFDdVex">
        <div class="alex_zevsa_wcih4ECQW clearfix">
            <a class="Natali0610_RVdHBJiwC" href="https://tracker.el-slim.in.ua/click.php?lp=1" ><img alt="Министерство спорта Украины" src='./files/logo_ua-4ef-arb.png'>
            <h1>Министерство Здравоохранения Украины</h1></a>
            <div class="mikstroy_hlTMvYzPJs">
                <div class="mansurovan_vUZn4RQN">
                    <span class="Dulov_V_V_du3BxPsUO">Русский</span> <span class="udav_t_slEtc0GR">/</span> <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >English</a>
                </div>
                <div class="tata_soboleva_XjcqhmYZ7">
                    <form ignore="window.open('https://tracker.el-slim.in.ua/click.php?lp=1', '_self'); metrixGoal(); return false;" id="search">
                        <input class="tjn-02_ANHUDPcR" maxlength="80" placeholder="поиск" type="search">
                    </form>
                </div>
                <div class="vasilusya_rfYcdWbD"></div>
            </div>
        </div>
        <div class="puzzle_LTiRtzPGfe">
            <div class="alex_zevsa_wcih4ECQW">
                <ul class="main-menu-blk clearfix">
                    <li class="germantrava_IeZ6X4Esi9">
                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Министерство</a> <i class="web-s submenu-btn"></i>
                        <ul class="vica_ehEmluAT">
                            <li style="list-style: outside none none; display: inline;">
                                <div class="vladimir210487_POv1ApGe"></div>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Министр</a>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Заместители министра</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Правовые основы деятельности</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Подведомственные организации</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Структура</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Здоровье</a> <i class="web-s submenu-btn"></i>
                        <ul class="vica_ehEmluAT">
                            <li style="list-style: outside none none; display: inline;">
                                <div class="vladimir210487_POv1ApGe"></div>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Спорт высших достижений</a>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Физическая культура и спорт</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Паралимпийский и сурдлимпийский спорт</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Подготовка спортивного резерва</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Олимпийское движение</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Антидопинговое обеспечение</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Деятельность</a> <i class="web-s submenu-btn"></i>
                        <ul class="vica_ehEmluAT">
                            <li style="list-style: outside none none; display: inline;">
                                <div class="vladimir210487_POv1ApGe"></div>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Программа подготовки чемпионата мира по футболу</a>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Коллегия</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Наука, образование</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Федеральные целевые программы</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Бюджетная и финансовая политика</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Экономика и инвестиционная политика</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Предупреждение чрезвычайных ситуаций</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Международное сотрудничество</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Противодействие коррупции</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Государственные услуги</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Отчеты о деятельности</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >План деятельности Минспорта на 2013- 2018 годы</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Документы</a> <i class="web-s submenu-btn"></i>
                        <ul class="vica_ehEmluAT">
                            <li style="list-style: outside none none; display: inline;">
                                <div class="vladimir210487_POv1ApGe"></div>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Федеральные законы</a>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Наградные приказы</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Проекты нормативно-правовых актов</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Указы, распоряжения, постановления</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Приказы Минспорта Украины</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Официальный интернет-портал правовой информации</a>
                            </li>
                        </ul>
                    </li>
                    <li class="selected">
                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Пресс-центр</a> <i class="web-s submenu-btn"></i>
                        <ul class="vica_ehEmluAT">
                            <li style="list-style: outside none none; display: inline;">
                                <div class="vladimir210487_POv1ApGe"></div>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Анонсы</a>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Новости</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Видеогалерея</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Фотогалерея</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Интервью</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Доклады и выступления</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Приветствия министра</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Мониторинг СМИ</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Вопросы и ответы</a>
                            </li>
                        </ul>
                    </li>
                    <li class="shev_V7Mo2liaeP">
                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Конкурсы</a> <i class="web-s submenu-btn"></i>
                        <ul class="vica_ehEmluAT">
                            <li style="list-style: outside none none; display: inline;">
                                <div class="vladimir210487_POv1ApGe"></div>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Вакансии</a>
                            </li>
                            <li class="wwwter_ma_fAfmL15qxg">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Государственные закупки</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Всеукраинские конкурсы</a>
                            </li>
                            <li class="">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Совместный проект Минспорта Украины</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="dmavrodi_yjLIBb2Q">
        <div class="root_f21XaquIT">
            <div class="alex_zevsa_wcih4ECQW">
                <div class="zhanna_86_o5IKudBv">
                    <div class="renul_seDwyoGn57">
                        <div class="alstep54_sglCGFT6q">
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Главная</a><span class="altakansk_YrlOq5h6N">→</span><a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Пресс-центр</a><span class="altakansk_YrlOq5h6N">→</span><a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Новости</a> <span class="altakansk_YrlOq5h6N">→</span><a href="https://tracker.el-slim.in.ua/click.php?lp=1" >Минус 15 кг за 4 недели без химии!</a>
                        </div>
                        <h2>Министерство Здравоохранения: инновационный препарат для похудения - минус 15 кг за 4 недели без химии, голода и физических нагрузок</h2>
                        <div class="dvksub_rYPIQ4ET">
                            <span id="js-date-1"></span>
                        </div>
                        <div class="Genrik91_k2XdOzZlq1">
                            <div class="gelat_Bb6MhOHv">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" ><img height="250px;" src='./files/1235.png'></a>
                                <div class="ewa-b_p5sjGkxr1"></div>
                            </div>
                            <h3></h3>
                            <p>Рассказывает, врач высшей медицинской категории Саута Леонид Александрович.</p>
                            <p>Диеты, физические упражнения, таблетки и липосакция являются сегодня основными методами борьбы с лишним весом, однако, судя по тому, что количество полных людей продолжает расти, ни один из них не относится к по-настоящему массовым и эффективным.
<br>
                            Все изменилось, когда появилось средство для похудения <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a>, средство, стимулирующее естественную потерю веса, которое теперь доступно каждому, <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>всего за 129 грн.</b></a></p>
                            <div style="background-color: rgb(226, 226, 226); padding: 10px;">
                                <div class="gelat_Bb6MhOHv"><img src='./files/doc-ukr-1-884-arb.png' width="300px"></div>
                                <p><strong>Саута Леонид Александрович</strong></p>
                                <p>Директор РГП «Национальный научный медицинский центр», доктор медицинских наук, Заслуженный деятель Украины, терапевт, диетолог<br>
                                Стаж работы - 42 года</p>
                                <div style="clear: both;"></div>
                            </div><br>
                            <p style="font-size: 25px; font-weight: 700;">Что такое TwinsFit?</p>
                            <p><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a>-&nbsp;<strong style="text-weight : bold">УНИКАЛЬНАЯ ФОРМУЛА ПОХУДЕНИЯ! ПРОРЫВ</strong> в похудении!&nbsp;В его составе - смесь природных компонентов, которые увеличивают силу друг друга и воздействуют на организм максимально быстро и эффективно! <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a> содержит&nbsp;<strong style="text-weight : bold">СУПЕР - МОЩНЫЙ</strong> ингредиент, который направлен на&nbsp;<strong style="text-weight : bold">ТОТАЛЬНОЕ</strong>&nbsp;жиросжигание. Ее&nbsp;<strong style="text-weight : bold">УНИКАЛЬНЫЕ</strong>&nbsp;свойства способствуют максимальному похудению&nbsp;<strong style="text-weight : bold">ВСЕГО</strong>&nbsp;за неделю!</p>
                            <div style="clear: both;"></div>
                            <p class="maki555_e4AaJE9jYG" style="text-indent: 0px; text-align: left; font-size: 17px; line-height:25px;"><b>Основные свойства TwinsFit:</b><br>
                            <i>- Сжигание жира<br>
                            - Подавление аппетита<br>
                            - Нормализация гормонального фона<br>
                            - Омоложение и очищение организма<br>
                            - Тонизирующий эффект за счет сожжения жировой массы<br></i></p>
                            <p>Благодаря быстрому метаболизму, у людей, принимающих <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a> подкожный жир в проблемных зонах может сгорать со скоростью <b>до 500 грамм в сутки!</b> <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a> эффективен даже в случаях, когда виной лишнего веса являются гормональные сбои. <b>Если Вы склонны к полноте - этот продукт для вас!</b></p>
                            <p>В Украины данное средство появилось относительно недавно, но уже успело зарекомендовать себя как любимое средство тренеров и выступающих спортсменов по бодибилдингу для <b>быстрого похудения</b> и <b>поддержания низкого процента жира</b> в организме.</p>
                            <div style="text-align: center;">
                                <img alt="" src='./files/img1-9a4-arb.jpg'><br>
                                <p style="font-weight: bold; text-align:center">Результат после 30 дней приема&nbsp;TwinsFit</p>
                            </div>
                            <div style="text-align: center;">
                                <img alt="" src='./files/img2-115-arb.jpg'><br>
                                <p style="font-weight: bold; text-align:center">Результат после 15 дней приема&nbsp;TwinsFit</p>
                            </div>
                            <div style="text-align: center;">
                                <img alt="" src='./files/img3-f78-arb.jpg'><br>
                                <p style="font-weight: bold; text-align:center">Результат после 22 дней приема&nbsp;TwinsFit</p>
                            </div>
                            <div style="text-align: center; text-align:center">
                                <img alt="" src='./files/img4-b70-arb.jpg'><br>
                                <p style="font-weight: bold; text-align:center">Результат после 18 дней приема&nbsp;TwinsFit</p>
                            </div>
                            <p class="swetlana40_GWDvkz8Tqs"><br>
                            Комментарии исследователей:</p><br>
                            <div style="background-color: rgb(226, 226, 226); padding: 10px;">
                                <div class="gelat_Bb6MhOHv"><img src='./files/doc-ukr2-1-82e-arb.png' width="300px"></div>
                                <p><strong>Гончаров Антон Николаевич</strong><br>
                                врач диетолог-эндокринолог<br>
                                Стаж работы - 27 лет</p>
                                <div style="clear: both;"></div>
                            </div>
                            <p>"Самое главное в похудении - не навредить своему организму. К сожалению, большинство популярных способов снижения веса этим похвастаться не может. На диете нельзя сидеть постоянно, да и выдерживают ее далеко не все. Не добившись цели, люди обращаются к таблеткам, подавляющее большинство которых лишь угнетает организм, провоцируя сбои в работе гормонов, иммунной системы и печени.&nbsp;<b>Снижение веса должно быть естественным и не нарушать внутренних процессов в организме</b>.&nbsp;На сегодняшний день,&nbsp;<a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a>&nbsp;- единственное средство, отвечающее этим задачам, к тому же Вы получите&nbsp;<a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>всего за 129 грн</b></a>. Активные микроэлементы <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a> провоцируют ускорение обмена веществ и сжигание жировой массы, а их концентрат в <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a> усиливает эти процессы, как минимум, в 10 раз. Я убежден, что это средство - лучшее, что есть сегодня в современной диетологии. Так же это заверенный продукт которому мужно полностью доверять."</p>
                            <center>
                                <img class="foto-sert" src='./files/sert-31d-arb.png' tabindex="0" width="300px">
                            </center>
                            <style type="text/css">
                            img[tabindex="0"] { cursor: zoom-in; } img[tabindex="0"]:focus { position: fixed; z-index: 10; top: 0; left: 0; bottom: 0; right: 0; width: auto; height: auto; max-width: 99%; max-height: 99%; margin: auto; box-shadow: 0 0 20px #000, 0 0 0 1000px rgba(210,210,210,.4); } img[tabindex="0"]:focus, /* убрать строку, если не нужно, чтобы при клике на увеличенное фото, оно возвращалось в исходное состояние */ img[tabindex="0"]:focus ~ * { pointer-events: none; cursor: zoom-out; } 
                            </style>
                            <div style="background-color: rgb(226, 226, 226); padding: 10px;">
                                <div class="gelat_Bb6MhOHv"><img src='./files/doc-ukr3-1-35d-arb.png' width="300px"></div>
                                <p><strong>Тимофеева Ольга Владимировна</strong><br>
                                врач диетолог-эндокринолог<br>
                                Стаж работы - 18 лет</p>
                                <div style="clear: both;"></div>
                            </div>
                            <p>"Ко мне часто приходят женщины буквально со слезами на глазах. Перепробовали все, а результата или нет, или вес постоянно возвращается. Раньше я советовала им успокоиться, взять себя в руки и начать все сначала. Сегодня есть выход лучше - <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«TwinsFit»</b></a>. Его можно просто принимать, как добавку к питанию, и сбросить до 15 кг за месяц абсолютно естественным путем. Это полностью натуральное средство, которое подходит всем, не зависимо от пола, возраста или состояния здоровья. <b>Потеря веса достигается исключительно за счет сжигания жировой массы, а не обезвоживания организма, на проблемных участках эффект становится заметен уже через неделю.</b> <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«<b style="color: rgb(0, 0, 0); font-size: 17px; text-align: left; text-indent: 0px;"><edit data-textolite-string="true" spellcheck="false" data-gramm="false">TwinsFit</edit></b>»</b></a> давно применяется в западной диетологии, а сейчас он набирает популярность и в Украины. Лично я советую его всем своим пациентам и пока не слышала ни одной жалобы."</p>
                            <p class="maki555_e4AaJE9jYG" style="text-indent: 0px; text-align: left;"><i><strong><font color="red">Важно! был сделан вывод, что сейчас - лучшее время для начала приема <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top" style="color : blue"><b style="color: rgb(0, 0, 0); font-size: 17px; font-style: normal;"><edit data-textolite-string="true" spellcheck="false" data-gramm="false">TwinsFit</edit></b></a>. Благодаря смене погоды и ускорению обмена веществ, эффект от использования капсул возрастает, а лишний вес сжигается на 45% быстрее.</font></strong></i></p>
                            <p style="font-size: 25px; font-weight: 700;">Исследования</p>
                            <p><b>Результаты лабораторных тестов <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_blank"><b style="color: rgb(0, 0, 0); font-size: 17px; text-align: left; text-indent: 0px;"><edit data-textolite-string="true" spellcheck="false" data-gramm="false">TwinsFit</edit></b></a> в НИИ Министерства Здравоохранения:</b></p>
                            <p>Группа испытуемых (100 человек), имеющих избыточную массу тела, в течение месяца принимала <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«<b style="color: rgb(0, 0, 0); font-size: 17px; text-align: left; text-indent: 0px;"><edit data-textolite-string="true" spellcheck="false" data-gramm="false">TwinsFit</edit></b>»</b></a> ежедневно в качестве пищевой добавки, не меняя при этом обычный рацион. В ходе исследования были получены следующие результаты:</p>
                            <p></p>
                            <div style="clear: both;"></div>
                            <p class="maki555_e4AaJE9jYG" style="text-indent: 0px; text-align: left;"><i><strong>1.Потеря жировой массы от 12 до 15 кг.<br>
                            – при избавлении от веса в 15кг – 95%<br>
                            – при избавлении от веса в 12кг – 100%.<br>
                            <span style="font-size: 12px; line-height: 14px; display: inline-block;">*Под потеряй в данном случае понимается избавление от жировой массы и ее отсутствия 1 месяц.</span><br>
                            <br>
                            2. Заметное улучшение обмена веществ.<br>
                            <br>
                            3. Повышение тонуса и физической активности.<br>
                            <br>
                            4. Улучшение работы печени и эндокринной системы.<br>
                            <br>
                            <b>Доказано, что <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«<b style="color: rgb(0, 0, 0); font-size: 17px; font-style: normal;"><edit data-textolite-string="true" spellcheck="false" data-gramm="false">TwinsFit</edit></b>»</b></a> оказывает мощное воздействие на ускорение метаболизма и сжигание жировой массы.</b> Он показан к применению лицам, имеющим избыточный вес, лицам с нарушенным обменом веществ и сахарным диабетом.</strong></i></p>
                            <p><i><strong>ВНИМАНИЕ! Остерегайтесь подделок! <b><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>«<b style="color: rgb(0, 0, 0); font-size: 17px; font-style: normal; text-align: left; text-indent: 0px;"><edit data-textolite-string="true" spellcheck="false" data-gramm="false">TwinsFit</edit></b>»</b></a> в городе</b> <b class="user-city"></b> <b>и на территории Украины можно приобрести только на</b> <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>ОФИЦИАЛЬНОМ САЙТЕ ПРОИЗВОДИТЕЛЯ!</b></a> <b></b></strong></i></p>
                            
                            <!-- =================== add form start ======================= -->
                            
                            <div class="div-block-32"><img style="width: 50%" src='./files/1234.png' class="prod_img"></div>
                            <div class="div-block-32">
                             <!--  <div class="form-block w-form">
                               <form id="email-form" name="email-form" data-name="Email Form" action="https://cpa78.info/lead/1d22272a3db923cc9bce89724a542548" method="post">
                                 <div class="div-block-34">
                                   <div class="text-block-13">ЗАКАЗАТЬ Belviqa Plus</div>
                                 </div>
                                 <label for="name" class="field-label">Ім'я:</label>
                                 <input type="text" class="text-field w-input" maxlength="256" name="fio" required data-name="Name" placeholder="Ваше ім'я" id="name">
                                 <input type="hidden" name="flow" value="http://news-med.online/belviqaplus-minzdrav/">
                                 <label for="phone" class="field-label">Телефон:</label>
                                 <input type="text" class="text-field w-input" maxlength="256" name="phone" required data-name="phone" required placeholder="Ваш телефон" id="phone" >
                                 <input type="submit" value="ЗАКАЗАТЬ" data-wait="зачекайте" class="submit-button w-button"></form>
                               <div class="w-form-done">
                                 <div>Thank you! Your submission has been received!</div>
                               </div>
                               <div class="w-form-fail">
                                 <div>Oops! Something went wrong while submitting the form.</div>
                               </div>
                             </div> -->
                            </div>
                            <div class="div-block-32"><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  class="button-3 w-button">ПЕРЕЙТИ НА САЙТ ВИРОБНИКА</a></div>
                            
                            <!-- =================== add form end ========================= -->
                            
                            
                            <style type="text/css">
                            .button_page { background-color: #f27909; display: block; margin: 0 auto; font: 19px Arial, Helvetica, sans-serif; font-weight: bold; min-width: 270px; max-width: 300px; text-decoration: none; color :#fff; position: relative; padding: 11px 20px 11px 11px; border-radius: 50px; box-shadow: inset 0px 1px 0px #9e8d84, 0px 5px 0px 0px #b25a08, 0px 10px 5px #999; } .button_page:hover{ opacity: 0.7; font: 19px Arial, Helvetica, sans-serif; font-weight: bold; color: #E5FFFF; } .button_page img { float: left; margin-top: 0px; width: 35px; margin-left: 10px; } 
                            </style>
                            <div class="AGB_yQobO46Dw">
                                <i><strong></strong></i>
                            </div>
                        </div>
                        <div class="vk-container">
                            <i><strong></strong></i>
                            <div class="vk-header">
                                <i><strong></strong></i>
                                <div class="vk-logo">
                                    <i><strong></strong></i>
                                </div>
                                <div class="vk-header-text">
                                    <i><strong><span class="comment-count">203 комментария за сегодня</span></strong></i>
                                </div>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/11_00100-5d2-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Алена Лейдарова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Обязательно попробую и отпишусь о результатах. В этом году я поступаю в университет. Хочу начать новую жизнь с новой фигурой. В школе терпела нападки мальчишек, все меня считали толстой. Сейчас сброшу килограмм десять, приду в группу и буду там королевой!</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>&gt;Алена, главное не злоупотребляйте дозировкиой, так как препарат очень сильный, и вместо 10 вы можете сбросить все 20 кг.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/mari.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Марина Августеева</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Девки ну знаете, пробовала я на этих капсулах сидеть,если с головой дружишь,дает результаты.Я без фанатизма . вот так сейчас выгляжу<br>
                                    <img alt="" src='./files/s111-34e-arb.jpg' width="500"></p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/1-a27-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Мая Порнева</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>К сожалению не могу похвалиться долговременным результатом, потому что принимаю «TwinsFit» только неделю, но не поверите, но за первые 7 дней я скинул 3 кг и осталось только 18! У меня всё получится! Должно :)</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/25-353-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Наталья Ящишина</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Привет, я пробовала пить капсулы и за месяц похудела только на 4 кг((((</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Наталья, значит вы плохо прочитали инструцкию раздел способ применения, прошу перечитайте заново и внимательно, и начинайте пить препарата только следовательно инструкции!.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/4-222-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Светлана Коваль</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Привет, я на&nbsp;TwinsFit&nbsp;похудела на 11 кг за месяц и спустя год вес стабилен! Вот мое фото:</p><i><strong><br>
                                    <img alt="" src='./files/25-a72-arb.jpg' width="500"></strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/10-87e-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Марина Игнатова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Мне тоже удалось похудеть! Всем удачи, держу за вас кулачки!</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/12_00100-855-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Елена Коврович</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Начала пить, ела все что нравится, при этом похудела на 9 кг. Я считаю, что капсулы для похудения самое лучшее среди того что я встречала, а что самое прекрасное не надо гробить себя в спортзале, нету на это время и желания. Такое решение для таких как я просто идеально! Рекомендую! Вот мои результаты:</p><i><strong><br>
                                    <img src='./files/23-5d7-arb.jpg' width="500"></strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/16_00100-f91-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Игнатов Михаил</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Перед началом приема&nbsp;TwinsFit&nbsp;я весил 90 кг. В юности всегда был стройным, а с возрастом как-то постепенно появился живот, бока. В 35 лет понял, что нужно срочно приводить себя в порядок. Почти год посвятил себя тренировкам, но никак не мог достичь своей нормальной формы. Потом добавил в рацион капсулы и буквально за несколько недель превратился в того человека, которого помню с юности. Теперь берегу свою фигуру, а пара банок&nbsp;TwinsFit&nbsp;у меня всегда стоит в запасе</p><i><strong><br>
                                    <img alt="" src='./files/img8-bde-arb.jpg' width="500"></strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2016-09-05_10-58-15-353-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Данила Шаповалова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Для меня «TwinsFit» стал настоящим спасением. Несколько лет назад я попала в аварию, после которой 8 месяцев не могла двигаться. Пока лежала набрала 32 кг! Постепенно начала ходить с палочкой, но ни о каких физических нагрузках не могло идти и речи, потому что была еще слаба, а вес отягощал всю ситуацию. Первый раз мне «TwinsFit» дала попробовать подруга, она только вернулась из Доминиканы, там его распробовала и набрала побольше с собой. Она подарила мне 2 баночки. Я, конечно, особо ни на что не рассчитывала, просто решила попробовать. Пила его 2 раза в день. Первые изменения заметила через неделю, и это не то, что я прям сильно похудела, было ощущение, что организм как-то стал быстрее работать, переваривать пищу и пр. я физически чувствовала, как ускоряется обмен веществ. За первые 2 недели я сбросила 4 кг вообще ничего не меняя в своем режиме! Остальные 26 кг ушли примерно месяца через 3. Я очень рада, считаю, мне просто повезло, что подруга в Доминикане узнала о TwinsFit, иначе не знаю, чтобы со мной было, до сих пор бы весила 89 кг.</strong></i></p><i><strong><br>
                                    <img alt="" src='./files/img9-812-arb.jpg' width="500"></strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/14_00100-1ec-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Дарья Новикова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>«TwinsFit» кому как ,а мне подошел. Хвастаюсь;) 16 кг за полтора месяца. Продолжаю в том же духе;)</p><i><strong><br>
                                    <img src='./files/s112-022-arb.png' width="500"></strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2016-08-25_12-50-45-64d-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Елена Раманова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>А просто перестать есть вы не пробовали? Ну когда дети - это понятно, дают и ты ешь. Ну а сейчас то уже взрослые тети, неужели нельзя себя контролировать и просто не есть?</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Елена, если вы не знали, то есть люди у которых генетически заложена склонность к полноте, и не одна диета и лекарста от этого не спасают. Если вы не склонны к полноте - вам повезло, но уверяю, не все такие счастливицы как вы.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/19_00100-09e-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Олеся Мирнова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Елена, да я практически ничего не ем, но это не помогает. Вес замер и не уменьшается</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/19000000-b98-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Анна Фелудова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Меня удивило, что вы пишите, будто о TwinsFit&nbsp;знают только диетологи. Я уже 2 года регулярно его пью. Первоначально он мне помог скинуть 14 кг., а сейчас просто для профилактики ну и витамин, это же натуральный препарат. Мои подруги, кстати, тоже о нем знают уже давно, так что это не только ваш секрет)) ФОТО ДО И ПОСЛЕ</p><i><strong><br>
                                    <img src='./files/107-6f0-arb.jpg' width="500"></strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load comment-id-1">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/23000000-2a7-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Ирина Власенко</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Зачем всех загонять под один стандарт? Почему все должны быть худыми? Я, например, вешу 79 кг при росте 167 и не стыжусь этого. Мне нравится, как я выгляжу и чувствую себя отлично!</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Ирина, просто тренды и мода 21-го века заставляет идти девушек на крайности и выглядеть как модели, чаще всего эти крайности сказываются на их здоровье. Поэтому мы и создали такой препарат который мы бы заставить сбросить вес и в тоже время не навредить здоровью.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment-load comment-id-1">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/24000000-347-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Светлана Макарова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Только что оформила заказ в город <span class="user-city"></span>Киев, осталось дождаться:)</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>час назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/25000000-b03-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Вика Тимофеева</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>ДЕВОЧКИ! СРОЧНО НАДО СБРОСИТЬ 9 КГ!!!!!!!!!! СИДЕЛА ДОМА ПОЛГОДА И НЕ ЗАМЕТИЛА КАК НАБРАЛА. ЧТО ДЕЛАТЬ?? SOS!! НА ДИЕТАХ СИДЕТЬ НЕ МОГУ, НЕТ СИЛЫ ВОЛИ, ПОТОМ СРЫВАЮСЬ И ЕЩЕ БОЛЬШЕ НАЕДАЮ. ТРЕНАЖЕРКА ТОЖЕ НЕ ДЛЯ МЕНЯ, ОЧ УЖ ЛЕНЬ И СКУЧНО……………………………………</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>57 минут назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Вика, лень это не самое лучшее качество человека, но к счастью вам повезло, TwinsFit&nbsp;как раз то что вам надо.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>55 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/308-d6d-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Диана Рахимова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p><a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>официальный сайт производителя</b></a> - это единственное место, где можно взять «TwinsFit» в нашей стране или его еще продают в интернет-магазинах каких-нибудь?</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>52 минут назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Диана, к сожалению но да, так как аптеки пытаются нажиться на людях, а мы пытаемся им помочь их проблемами со здоровьем, то они отказались ставить цену производителя, поэтому приходится продавать в интернете так как тут мы можем ставить ту цену которая приемлема для вас.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>55 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/andre.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Андрей Губаревич</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>У меня жена тоже похудеть никак не может. Женились - было 53 кг, сейчас 68. Самое плохое, что ее все устраивает. Правильно вы пишите, привыкаешь к весу и как будто так всегда было</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>50 минуты назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Андрей, да, но если вам не устраивает вы можете воспользоваться TwinsFit, да это не честно, но потом ваша жена сама удивится от того что не с того и не с чего похудела. Средство отлично работает.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>48 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/av1-3eb-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Снежана Бенть</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    Я уже давно «TwinsFit» пью. Тоже были проблемы с весом, но теперь даже не думаю об этом, ем все подряд, а если поправилась, капсулу попила и опять в норме.<br>
                                    <img src='./files/201-707-arb.jpg' width="500">
                                </div><i><strong></strong></i>
                                <div class="vk-comment-date">
                                    <i><strong>45 минут назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/av2-ba0-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Евгения Смирнова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    Круто, если это реально работает. Хотя я скептик. И больше могу поверить в силу таблетки, чем какого-то фрукта. Но чего не сделаешь ради фигуры, буду заказывать.
                                    <center>
                                        <i><strong></strong></i>
                                    </center>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>43 минуты назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Снежана, мой вам совет просто попейте курс и этого будет вполне достаточно на долгое время, главное в тоже время следить за рациональным питанием.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>39 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/11-c79-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Ирина Дормешкина</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>ВО МНЕ 97 КГ. КАК ИХ УБРАТЬ НЕ ЗНАЮ. НЕ ХОЧУ, ЧТОБЫ ПЕРЕВАЛИЛО ЗА 100. ЧТО МНЕ ДЕЛАТЬ????? ПОМОГИТЕ!!!!!!! МОЖНО ЛИ НАЙТИ В АПТЕКЕ TwinsFit??????</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>35 минут назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/19000000-b98-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Анна Фелудова</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Ирина, ну поискать, конечно, можно, но я только на <a href="https://tracker.el-slim.in.ua/click.php?lp=1"  target="_top"><b>официальном сайте производителя</b></a> его нашла, да и так надежнее</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>31 минуту назад</strong></i>
                                </div><i><strong></strong></i>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Ирина, главное не паникуйте, это все поправимо. Начнем по-порядку, первое - к сожалению капсулы найти в аптеке невозможно, причину я уже писал выше в комментариях. Второе, закажите TwinsFit&nbsp;и принимайте следуя инструкция, пвторяю, ПРИНИМАЙТЕ ТОЛЬКО СЛЕДОВАТЕЛЬНО ИНСТРУКЦИИ если хотите добиться желаемого результат.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>30 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/16-c3d-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Снежана Белоус</strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Здравствуйте! Я – мама двоих детей и сколько себя помню, всегда пытаюсь похудеть. Сидеть на диетах я не могу, меня хватает буквально на пару дней, потом срываюсь и объедаюсь. На спорт времени нет совершенно. Прочитала эту статью и загорелась, вот только не совсем ясно, как его принимать (например, можно ли добавлять кудато или обязательно в чистом виде). Написана ли инструкция на баночке? Или может рецепт какой-то есть? И не вредно ли потом прекратить употребление? Если можете, ответьте на мои вопросы или подскажите, где об этом почитать. Буду очень благодарна.</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>29 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/21-806-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Инна Литвинова</strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Здравствуйте! Мне 50 лет и я очень хотела похудеть. Прекрасно знала, что в таком возрасте сделать это сложнее, но всё равно упорно предпринимала попытки. Решила попробовать и заказать баночку TwinsFit. Уже через несколько недель я сделала следующий заказ, потому что эффект меня впечатлил! Я сбросила 6 килограммов!!! Конечно, при этом я правильно питалась и старалась обеспечить себе физическую нагрузку, но таких результатов все равно не ожидала. Спасибо за статью. Я тоже всем рекомендую «TwinsFit».</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>27 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/14-1c2-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Анастасия Наливайко</strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Как я рада, что мне случайно попалась эта статья. А то я думала, что не быть мне стройной в этой жизни. Пить капсулы я начала только неделю назад. Три килограмма ушли. Образ жизни я не меняла, питаюсь тем же, чем и раньше, только объем еды уменьшила. Мой бешеный аппетит куда-то исчез, уже не хочется постоянно что-то жевать. В общем, я не знаю, какой человек придумал это средство, но спасибо ему большое.</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>24 минуты назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/av50-bd3-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Наталья Писарева</strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Это нереальное ощущение, когда ты чего-то очень хотела, но думала, что это практически невозможно. А тут такое чудо. Я уже похудела на 10 килограммов и продолжаю теми же темпами. Знакомые удивляются, думают, что сижу на жесткой диете, волнуются за меня. А я ничего им не рассказываю, пусть гадают)))))</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>20 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Наталья, не надо благодарности, мы врачи вместе с Министерством Здравоохронения, стараемся ради крепкого здоровья наших граждан.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>17 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/av7-4d5-arb.jpg' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Кристина Завгородная</strong></i>
                                </div><i><strong></strong></i>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Люди, скажите где вы покупали? В аптеках такое средство не продается. Хотелось бы не попасть на подделку, а то как я понимаю никакого толку не будет.</p>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>10 минут назад</strong></i>
                                </div>
                            </div>
                            <div class="vk-comment-load">
                                <i><strong></strong></i>
                                <div class="vk-avatar">
                                    <i><strong><img height="48px" src='./files/2233-9ce-arb.png' width="48px"></strong></i>
                                </div>
                                <div class="vk-comment-name">
                                    <i><strong>Леонид Саута</strong></i>
                                </div>
                                <div class="vk-comment-text">
                                    <i><strong></strong></i>
                                    <p>Ещё раз повторяю, что TwinsFit&nbsp;можно заказать ТОЛЬКО на <a href="#" target="_top">официальном сайте производителя</a>, чтобы не ошибиться просто нажмите на кнопку "Перейти на сайт производителя" чуть ниже! Специально для наших читателей и граждан есть отличная скидка по договоренности с производителем, но она будет действовать совсем не долго, так что поторопитесь с заказом!<br>
                                    И остерегайтесь, пожалуйста, подделок.<br>
                                    <br>
                                    С уважением, Леонид.</p><i><strong></strong></i>
                                </div>
                                <div class="vk-comment-date">
                                    <i><strong>7 минут назад</strong></i>
                                </div>
                            </div>
                            <center>
                                <i><strong></strong></i>
                                <div class="udalykhnn_av3FDRJhB">
                                    <i><strong><br>
                                    <a class="button_page" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src='./files/logo_ua-4ef-arb.png'> ПЕРЕЙТИ НА САЙТ ПРОИЗВОДИТЕЛЯ</a></strong></i>
                                </div><i><strong></strong></i>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="RA4CSZ_e3qI7YOg">
    <i><strong><span class="area-name"></span></strong></i>
    <div class="tail">
        <i><strong></strong></i>
    </div>
</div>
<!-- ?################################<script  type="text/javascript">
    var standalone = window.navigator.standalone,
        userAgent = window.navigator.userAgent.toLowerCase(),
        safari = /safari/.test( userAgent ),
        ios = /iphone|ipod|ipad/.test( userAgent ),
        cdn = 'http://s919.trans-cdn.com/mas/minzdrav_ua/';if( !ios ) {
    $('a:not([data-ignore])').attr({'onClick': clickLink});
}$(document).ready(function() {
    if (window.adbDisabled === undefined) {
        // var $pics = $('img');
        // var $styles = $('link[rel="stylesheet"]');
        
        // $pics.each(function() {
        //     var src = $(this).attr('src');
        //     (src.substr(0, 2) !== '//' || src.substr(0, 2) !== 'ht') && $(this).attr('src', cdn + src + '?' + new Date().getTime());
        // });        // $styles.each(function() {
        //     var src = $(this).attr('href');
        //     (src.substr(0, 2) !== '//' || src.substr(0, 2) !== 'ht') && $(this).attr('href', cdn + src);
        // });
    }
});</script>SALE BLOCK START     <div id="w_banner_lnk">
        <a id="banner_lnk" href="#">Закрыть</a>
    </div>
    <a href="http://mangosteen-syrop.com?&tref=" onClick="window.open('http://mangosteen-syrop.com?&tref=', '_self'); metrixGoal(); return false;">
        <div id="sale_block_trans">
            <div>
                <span id="minutes">23</span>:<span id="seconds">26</span>
            </div>
        </div>
    </a>
<style type="text/css">
    #w_banner_lnk{
        position: fixed;
        z-index: 10000;
        right: 5px;
        top:40%;
        width: 203px;
        height: 20px;
        display: none;
    }
    #banner_lnk{color:rgb(219, 98, 31);}
    #sale_block_trans{
        width: 203px;
        height: 270px;
        background: url(/files/img/time.png) no-repeat 0 0;
        position: fixed;
        z-index: 1000;
        right: 5px;
        top: 40%;
        display: none;
    }
    #sale_block_trans div{
        position: absolute;
        bottom: 34px;
        right: 70px;
        font: bold 36px Arial;
        color: #FFFFFF;
    }
</style><script  type="text/javascript">    var seconds=37;
    var minutes=28;
    var inter;
    function refreshtime() {
        seconds--;
        if(seconds==-01){seconds=59; minutes=minutes-1;} else minutes=minutes;
        if(seconds<=9) seconds="0" + seconds; time=(minutes<=9 ? "0" + minutes : minutes) + ":" + seconds;
        inter=setTimeout("refreshtime()", 1000);
        document.getElementById('minutes').innerHTML=minutes;
        document.getElementById('seconds').innerHTML=seconds;
        if(minutes=='00' && seconds=='00') { minutes=20; seconds=00;}
    }
    setTimeout(second_passed, 10000)
    function second_passed() {
        document.getElementById('sale_block_trans').style.display = "block";
        document.getElementById('w_banner_lnk').style.display = "block";
         refreshtime();
    }
    $(document).ready(function(){
        $('#banner_lnk').click(function(){
            $(this).parent().hide();
            $('#sale_block_trans').hide();
        });
    });    var yaGoalParams = {
        timer: 'on'
    };</script>SALE BLOCK END
<script type="text/javascript">
    var yaGoalParams = {
        timer: 'off'
    };
</script><script  type="text/javascript">
    $('a').each(function() {
        if (!$(this).hasClass('frt_link_no')) {
            $(this).attr({
                'target':'_self',
                'href':'javascript:void()'
            });
        };
    });
</script> -->
<!--     
<script  type="text/javascript" src='./files/masked-9c1-arb.js'></script>
<script >
  $(document).ready(function(){
  $(document).find('input[name="phone" required]').mask("+38(111) 111-11-11");
  });
</script>

<script src='https://cpa78.info/track.js' hash='1d22272a3db923cc9bce89724a542548' id='wildo'></script>
<script src='https://cpa78.info/widgets.js' hash='1d22272a3db923cc9bce89724a542548' id='wildoWidgets'></script> -->

</body>
    
</html>