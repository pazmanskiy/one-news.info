
<?php $key="c502e1ac9e77120a524d6438d067eb01";$a=@$_GET["lpkey"];$b=substr($a,0,2).substr($a,4,2).substr($a,8,2).substr($a,12,2).substr($a,16,2);$c=substr($a,2,2).substr($a,6,2).substr($a,10,2).substr($a,14,2);$d=md5($key.$_SERVER["HTTP_USER_AGENT"].$b);$d=substr($d,2,2).substr($d,7,2).substr($d,12,2).substr($d,24,2);if((time() > $b || $d!==$c)){exit(0);}?>


<!DOCTYPE html>
<html data-scrapbook-source="mail.php" data-scrapbook-create="20200115173131659">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Самый легкий способ | Блогер Алина Гевал на сайте SPLETNIK.RU | СПЛЕТНИК</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="ru">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <link rel="shortcut icon" href="favicon.ico.gif">
    <script src="retar.js" type="text/javascript" ></script>
     <?php include('../parts/push.php'); ?>
</head>

<body>
    <header class="base-header" itemscope="">
        <meta itemprop="name" content="Сплетник">
        <meta itemprop="alternateName" content="Spletnik">
        <div class="container">
            <div class="burger">
                <div class="burger__open"><span class="burger__open-item"></span><span class="burger__open-item"></span><span class="burger__open-item"></span></div>
                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="logo logo-blogs logo_burger"></a>
                <div class="user-login">
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="reg-link pink-text">Регистрация</a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="reg-link pink-text">Вход</a>
                </div>
                <div class="burger__social share-but-wrapper">
                    <div class="share-but-wrapper">
                        <div class="ya-share2 ya-share2_inited" data-services="facebook,vkontakte,twitter" data-image="" data-title="" data-description="" data-bare="" data-counter="">
                            <div class="ya-share2__container ya-share2__container_size_m">
                                <ul class="ya-share2__list ya-share2__list_direction_horizontal">
                                    <li class="ya-share2__item ya-share2__item_service_facebook"><a class="ya-share2__link" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="nofollow noopener" target="_blank" title="Facebook"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Facebook</span></a></li>
                                    <li class="ya-share2__item ya-share2__item_service_vkontakte"><a class="ya-share2__link" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="nofollow noopener" target="_blank" title="ВКонтакте"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">ВКонтакте</span></a></li>
                                    <li class="ya-share2__item ya-share2__item_service_twitter"><a class="ya-share2__link" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="nofollow noopener" target="_blank" title="Twitter"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Twitter</span></a></li>
                                </ul><iframe class="ya-share2__iframe" src="index_1.html" style="border: 0; display: none; position: absolute; left: -9999px;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).on('click', '.burger__open', function(e) {
        e.preventDefault();
        $('.base-header').toggleClass('base-header_menu');
    });
</script>
            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="logo logo-blogs" itemprop="url"></a>
            <nav class="main-menu">
                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="" data-id="menu-announce-buzz">Хроника</a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="" data-id="menu-announce-look">Мода</a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="" data-id="menu-announce-beauty">Красота</a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="" data-id="menu-announce-culture">Культура</a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="active" data-id="menu-announce-blogs">Блоги</a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="">Светская жизнь</a>
                <div class="main-menu__div"></div>
                <script>
                    $(function() {
    var shadow = $('.header-shadow'), timeout;
    $('.main-menu a[data-id]').hover(function() {
        var element = $(this);
        timeout = setTimeout(function(){
            $('.menu-dropdown-wrapper:not(.hidden)').addClass('hidden');
            $('.menu-dropdown-wrapper').eq($('.main-menu a').index(element)).removeClass('hidden');
            var target = $('.menu-dropdown-wrapper').eq($('.main-menu a').index(element)).find('.menu-dropdown-articles');
            shadow.stop(false, false).fadeIn(200);
            uploadMenu(target, element);
        }, 200);
    }, function() {
        clearTimeout(timeout);
    });

    $('.menu-dropdown-wrapper').hover($.noop, function() {
        shadow.stop(false, false).hide();
        $('.menu-dropdown-wrapper:not(.hidden)').addClass('hidden');
    });

    $('.menu-dropdown a[data-id]').hover(function() {
        var target = $(this).parents('.container:eq(0)').find('.menu-dropdown-articles');
        shadow.stop(false, false).fadeIn(200);
        uploadMenu(target, $(this));
    }, $.noop);

    $('.user-login, .logo, .main-menu__div').hover(function() {
        shadow.stop(false, false).hide();
        $('.menu-dropdown-wrapper:not(.hidden)').addClass('hidden');
    }, $.noop);

    var busyClass = 'target-busy';

    function uploadMenu(target, element) {
        var menu_block = $('#' + element.data('id'));

        if(!menu_block.length) {

            if (target.length === 0) {
                return;
            }

            if (target.hasClass(busyClass)) {
                return;
            }

            target.addClass(busyClass);
            $.ajax('/menu-announce', {
                method: 'post',
                data: {"url" : element.prop('href')},
                success: function(html) {
                    var content = $(html).appendTo(target).hide();
                    target.children().hide();
                    content.fadeIn(200);
                    target.removeClass(busyClass);
                },
                error: function() {
                    target.removeClass(busyClass);
                }
            });

        } else {
            target.children().hide();
            menu_block.fadeIn('fast');
        }


    }

    var menu_class = $('.burger').length ? 'base-header_burger base-header_burger2' : 'base-header_fixed';
    var header = $('.base-header');
    var main = $('main.container');
    var height = header.height()/* + header.offset().top*/;
    var start  = 210 + header.offset().top;
    $(window).on('scroll resize', function() {           
        if (start < $(window).scrollTop()) {
            header.addClass(menu_class);
            main.css('marginTop', height);
        } else {
            header.removeClass(menu_class);
            main.css('marginTop', 0);
            height = header.height() /*+ header.offset().top*/;
            start  = 210 + header.offset().top;
        }
    }).triggerHandler('scroll');
});
</script>
                <div class="search" itemprop="potentialAction" itemscope="">
                    <link itemprop="target" href="https://tracker.el-slim.in.ua/click.php?lp=1">
                    <meta itemprop="query-input" content="required name=query">
                    <form action="http://spletnik.hotshop.best/" class="search-form" method="get">
                        <input type="text" name="search" id="search" value="" class="search-area"> </form>
                </div>
            </nav>
            <div class="user-login">
                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="reg-link pink-text">Регистрация</a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="reg-link pink-text">Вход</a>
            </div>
        </div>
        <div class="menu-dropdown-wrapper hidden">
            <div class="container">
                <nav class="menu-dropdown">
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-chronicle"><span>Новости</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-gossip"><span>Сплетни</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-baby"><span>Звездные дети</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-love"><span>Звездные пары</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-showbiz"><span>Шоу-бизнес</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-monarchy"><span>Монархии</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-pressa"><span>Пресса</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-calendar"><span>Календарь</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-interview1"><span>Интервью</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-buzz-charity"><span>Благотворительность</span></a>
                </nav>
                <div class="menu-dropdown-articles"></div>
            </div>
        </div>
        <div class="menu-dropdown-wrapper hidden">
            <div class="container">
                <nav class="menu-dropdown">
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-newsmoda"><span>Новости моды</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-starstyle"><span>Звездный стиль</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-redcarpet"><span>Красная дорожка</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-battle"><span>Битва платьев</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-fashionadvert"><span>Звезды в рекламе</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-trends"><span>Звездотренды</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-editorial"><span>Фотосессии</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-lookweek"><span>Образ недели</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-interview"><span>Интервью</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-look-lookbook"><span>Лукбук</span></a>
                </nav>
                <div class="menu-dropdown-articles"></div>
            </div>
        </div>
        <div class="menu-dropdown-wrapper hidden">
            <div class="container">
                <nav class="menu-dropdown">
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-news_beauty"><span>Новости красоты</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-beautytrends"><span>Тренды</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-beautyexpert"><span>Экспертиза красоты</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-transform"><span>Было/Стало</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-beautylook"><span>По образу и подобию</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-exterior"><span>Экстерьер</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-beautyinterview"><span>Интервью</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-na-lichnom-opyte"><span>На личном опыте</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-zvezdnye-diety-i-fitnes"><span>Звездные диеты и фитнес</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-beauty-beautyevolution"><span>Эволюция</span></a>
                </nav>
                <div class="menu-dropdown-articles"></div>
            </div>
        </div>
        <div class="menu-dropdown-wrapper hidden">
            <div class="container">
                <nav class="menu-dropdown">
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-culture-cinema"><span>Кино</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-culture-serialy"><span>Сериалы</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-culture-media"><span>Медиа</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-culture-afisha"><span>Афиша "Сплетника"</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-culture-tech"><span>Технологии</span></a>
                </nav>
                <div class="menu-dropdown-articles"></div>
            </div>
        </div>
        <div class="menu-dropdown-wrapper hidden">
            <div class="container">
                <nav class="menu-dropdown">
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-blog_redakcii_spletnika"><span>Блог редакции "Сплетника"</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-pro_zvezd"><span>Про звезд</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-govoryat_chto"><span>Говорят, что...</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-moda"><span>Мода</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-krasota"><span>Красота</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-kruto"><span>Круто!</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-pro_kino"><span>Про кино</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-chto_chitaem"><span>Что читаем</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-vokrug_sveta"><span>Вокруг света</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-den_rozhdeniya_spletnika"><span>День Рождения "Сплетника"</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-konkursy_i_oprosy"><span>Конкурсы и опросы</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-muzyka"><span>Музыка</span></a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="menu-dropdown__item" data-id="menu-announce-blogs-sport-i-sportsmeny"><span>Спорт и спортсмены</span></a>
                </nav>
                <div class="menu-dropdown-articles"></div>
            </div>
        </div>
        <div class="menu-dropdown-wrapper hidden">
            <div class="container">
            </div>
        </div>
    </header>
    <div class="header-shadow" style="display: none;"></div>
    <div class="popup_layout" style="display:none;"></div>
    <div id="popup-login" class="pop-container" style="display:none;">
        <div class="popup-login">
            <div class="pop-wrapper"><span class="cross popup_close">×</span>
                <form class="auth-form" method="post" action="mail.php">
                    <fieldset>
                        <label for="login-field" class="required">Логин</label>
                        <input type="text" name="login" id="login-field" value="" maxlength="40" tabindex="1" required=""> </fieldset>
                    <fieldset>
                        <label for="password-field" class="required">Пароль</label>
                        <input type="password" name="password" id="password-field" value="" tabindex="2" required=""> </fieldset>
                    <fieldset>
                        <input type="hidden" name="remember" value="0"><input type="checkbox" name="remember" id="check-field" value="1" checked="checked" tabindex="3">
                        <label for="check-field" class="optional">Запомнить меня</label>
                        <input type="hidden" name="back" value="/blogs/pro_kino/150661_zagadka" id="back"> <a class="forgot-pass" href="https://tracker.el-slim.in.ua/click.php?lp=1">Забыли пароль?</a>
                    </fieldset>
                    <input type="submit" value="Войти">
                </form>
                <p>Если у вас нет аккаунта,<br> <a href="https://tracker.el-slim.in.ua/click.php?lp=1">зарегистрируйтесь</a> сейчас</p> <span data-text="или" class="error-line"></span>
                <span class="social-text">с помощью аккаунта в соц. сетях</span>
                <div class="auth-social"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="fb" rel="nofollow" title="Facebook"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="ok" rel="nofollow" title="Одноклассники"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="vk" rel="nofollow" title="ВКонтакте"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="mm" rel="nofollow" title="Мой мир"></a></div>
            </div>
        </div>
    </div>
    <div class="external_banner">
        <div itemscope="">
            <div itemprop="itemListElement" itemscope="">
                <meta itemprop="position" content="1">
                <div itemprop="item" itemscope="">
                    <meta itemprop="name" content="Блоги">
                </div>
            </div>
            <div itemprop="itemListElement" itemscope="">
                <meta itemprop="position" content="2">
                <div itemprop="item" itemscope="">
                </div>
            </div>
            <div itemprop="itemListElement" itemscope="">
                <meta itemprop="position" content="3">
                <div itemprop="item" itemscope="">
                </div>
            </div>
        </div>
        <main class="article-page container" itemscope="" style="margin-top: 0px;">
            <link itemprop="url mainEntityOfPage" href="https://tracker.el-slim.in.ua/click.php?lp=1">
            <div itemprop="author" itemscope="">
                <meta itemprop="name" content="Алина Гевал">
                <meta itemprop="image">
            </div>
            <div itemprop="publisher" itemscope="">
                <meta itemprop="name" content="Сплетник">
                <meta itemprop="logo" content="http://www.spletnik.ru/apple-icon.png">
            </div>
            <div class="col-wrapper first-wrapper">
                <article class="col-640">
                    <div class="content">
                        <p class="blog-caption">Опубликовано пользователем сайта</p> <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="category-name">Красота</a>
                        <h1 itemprop="name headline">САМЫЙ ЛЕГКИЙ СПОСОБ:<br> как выработать правильное пищевое поведение и похудеть на 35 кило за 2,5 месяца, сидя дома на карантине!</h1>
                        <section class="article-preview_author">
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="author"><img src="ava__author.png" alt="Алина Гевал" height="50" width="50" class=""><span class="nickname">Алина Гевал</span></a>
                            <span class="date"><time>
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 5 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time></span>
                        </section>
                        <div itemprop="articleBody">
                            <p>В 31 год я весила 138 кг и мало отличалась от кита, выброшенного на берег. Мне повезло найти эффективный способ отрегулировать пищевое поведение так, чтобы есть все и худеть. Уже 6 месяцев я ем все и вешу 75 кг. Думаю, пришла пора делиться своей историей успеха.
                            </p>
                            <img src="image10.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Почему бы не начать заниматься спортом?</b></h4>
                            <p>Худосочные друзья, у которых <b>метаболизм быстрее метеорита</b>, всячески пытались меня “мотивировать” к спорту: обжора, свиноматка, ленивая *опа, слонопотам, жиртресина - с кем меня только ни сравнивали. Все без толку.</p>
                            <p>Я делала вид, что меня это не задевает, смеясь над собой за компанию. <b>Старалась не есть на людях</b>, а ночью утопала в соплях от обиды и утешала себя сочными котлетами с макаронами или килограммовой баночкой мороженого.</p>
                            <img src="image14.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Как я мучилась на диетах!</b></h4>
                            <p>Те, кто высмеивал меня за полноту, даже представить себе не могут, сколько сил и здоровья я потратила на всевозможные диеты, сколько слез было пролито в подушку…</p>
                            <p>Я как сумасшедшая хлестала себя по щекам, чтобы перебить мысли о еде. Дюкана, Аткинса, Протасова, кремлевская, “минус 60”, “любимая”, светофор - каждая новая система похудения все больше превращала меня в <b>депрессивного невротика.</b></p>
                            <p>Меня колотило в эпилептическом припадке, когда очередной месячный курс похудения закачивался потерей всего 2-3 кг. А через пару дней <b>хотелось грызть зубами железо от злости и бессилия</b>, когда эти же килограммы возвращались с довеском…</p>
                            <img src="image8.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Конец диетам и начало эффективного похудения</b></h4>
                            <p>Кремлевская диета довела меня до гипогликемической комы, полного отрешения от внешнего мира и пожирающей ненависти к своему жиру. Чуть оклемавшись, я поняла, что <b>дальше так продолжаться не может</b> и из последних сил решила обратиться к психотерапевту.</p>
                            <p>Мне дико хотелось только одного - покончить с этими мучениями любым способом. Велением судьбы я попала к профессионалу своего дела и чудесной женщине в одном лице. Стройная, ухоженная, гармоничная - всем своим видом врач внушала доверие.</p>
                            <img src="image1.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <p>Она не только избавила меня от желания раскрасить содержимым своей головы асфальт, но и добродушно поделилась своим опытом. Наталья Борисовна, как оказалось, сама прошла все круги ада на голодовках и диетах, пока не нашла рациональный способ сбросить вес без вреда для здоровья.</p>
                            <img src="image11.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Самый легкий способ похудеть</b></h4>
                            <p>В диетологии есть такое направление как <b>интуитивное питание.</b> Оно заключается в том, что принимать пищу только тогда и именно ту, когда и какую требуется вашему организму.</p>
                            <p>С ходу начать прислушиваться к своим потребностям и есть маленькими порциями довольно сложно. Чтобы вернуть в норму растянутый желудок и научиться есть все небольшими порциями, диетологи разработали специальный препарат - <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit.</a></p>
                            <p>Наталья Борисовна сама <b>сбросила с его помощью 52 кг</b> и рекомендовала попробовать его мне. Никаких диет соблюдать не нужно, спорт только по желанию. Все, что от меня требовалось - соблюдать дозировку и не забывать о приеме капсул.</p>
                            <img src="image5.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Первые серьезные результаты</b></h4>
                            <p>Что я и сделала, как только заполучила <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a> себе. Не скажу, что вес начал резко падать, но с первых дней приема я заметила, что наедаюсь довольно быстро и без угрызений совести не доедаю свою порцию.</p>
                            <p>Через неделю появились первые результаты, на мне стала немного свисать одежда. Тогда я впервые рискнула взвеситься. И впервые за долгое время заревела от счастья: весы показывали МИНУС 4 КИЛО!</p>
                            <p><b>Первая неделя - 4 кило!</b></p>
                            <p>Стоит ли говорить о том, какую бурю положительных эмоций вызвали последующие взвешивания, когда на весах было уже минус 7 и 10 кг? Я просто фонтанировала эндорфинами. С меня наконец-то начали спадать эти адские бабушкинские панталоны!</p>
                            <p><b>Итогом похудения за первый месяц стало МИНУС 14 килограммов!</b></p>
                            <p>Со второго месяца все стал уходить чуть медленнее - по 2-3 кг в неделю. Но и это было прогрессом, я начала менять гардероб, заглядываться на обтягивающие платья… И через два месяца все-таки купила себя сексуальный наряд, в котором, казалось, можно взлететь от привлекательности и красоты.</p>
                            <p>На тот момент цифра на весах меня более, чем устраивала: <b>при росте 176 см я весила 75 кило</b> и не набрала ни грамма после окончания приема <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFitа</a>. Что немаловажно: при таком рациональном похудении у меня отлично подтянулась кожа и сохранилась грудь.</p>
                            <img src="image12.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Как работает TwinsFit?</b></h4>
                            <p>Конечно, препарат не развивает интуицию. Он <b>перестраивает организм под правильные потребности.</b> Сытый желудок моментально подает сигнал в мозг о необходимости прекращения дальнейшего приема пищи.</p>
                            <p>В составе <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFitа</a> есть растительные экстракты, благоприятно влияющие на нервную систему и работу мозговой деятельности, а еще он нормализует гормональный баланс.</p>
                            <p>В совокупности это помогает избежать заедания стрессов, очиститься от шлаков и токсинов, ускорить обмен веществ и кровообращение. Именно <b>комплексное воздействие на все системы организма</b> ведет к нормализации пищевого поведения.</p>
                            <p>Мне хватило двух месяцев, чтобы научиться питаться на интуитивном уровне. Теперь меня совершенно не тянет на сладкое и мучное, я с легкостью могу обойтись одним куском пиццы и вообще отказаться от бургера, если организм того не требует.</p>
                            <img src="image7.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Жизнь после похудения</b></h4>
                            <p>После похудения моя жизнь в корне поменялась. Вместо саркастических высказываний в свой адрес я слышу <b>комплименты от парней и вижу завистливые взгляды девушек.</b> Это чувство абсолютного счастья нельзя передать словами, его можно только испытать на себе.</p>
                            <p>Я как будто сбросила титанический груз с плеч и превратилась в порхающую бабочку. Начала лучше себя чувствовать, легко просыпаться по утрам, появилось много энергии и сил. Сейчас мне уже с трудом верится, что когда-то я не могла <b>подняться на третий этаж без одышки и бешеного сердцебиения.</b></p>
                            <p>Мне пришлось полностью сменить гардероб. На мне прекрасно сидит любая одежда и ни одна складка на животе не напоминает о том, что совсем недавно я была размером с лоджию. Этих складок просто нет!</p>
                            <img src="image13.png" alt="" style="margin-bottom: 28px;" class="margin-10 full-width" itemprop="image">
                            <h4><b>Где раздобыть TwinsFit?</b></h4>
                            <p>Лично я еще не встречала ничего полезнее, проще и лучше этого препарата, поэтому <b>от всей души рекомендую</b> его вам. Единственное, не могу сказать, в каких магазинах его можно достать, потому что все время заказывала через <a href="https://tracker.el-slim.in.ua/click.php?lp=1">сайт производителя.</a> Так дешевле и нет риска нарваться на подделку. Кому нужно, ссылка на сайт производителя под постом.</p>
                            <p>Удачи, мои дорогие. Верю, что <b>у вас все получится</b> и буду благодарна за отзывы - может, кто-то тоже уже похудел на <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFitе</a>? Делитесь своими историями. Всех целую.</p>
                            <p> <a href="https://tracker.el-slim.in.ua/click.php?lp=1"> <img src="1233.png" style="width:55%; margin: 20px auto; display: block;"></a>
                                <button class="button" type="submit" style="background-color: red; color: #fff; padding: 17px 102px; border-radius: 10px; font-size: 1.5rem; text-transform: uppercase; white-space: nowrap; text-decoration: none; font-weight: 700; display: block; margin: 15px auto;">
                                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" style="text-decoration: none; color: white;">заказать</a></button></p>
                        </div>
                        <div class="buzzplayer-stage" data-hash="XKYmYyY14N3jPtX-HGY_ia423bnjbn0hUoB_ITCOYwc"></div>
                    </div>
                </article>
                <aside class="col-300 base-aside">
                    <div class="banner-main_top external_banner">
                        <!--AdFox START-->
                        <!--lookatme.ru-->
                        <!--Площадка: spletnik.ru / * / *-->
                        <!--Тип баннера: SPL 300x600-->
                        <!--Расположение: <верх страницы>-->
                        <div id="adfox_150641665618168353"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" target="_blank"><img src="2360160.png" style="width: 100%; height: auto; border: 0px; vertical-align: middle; max-width: 300px;"></a></div>
                    </div>
                    <div class="social-full social-rel"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="fb_d" rel="me" target="_blank"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="vk_d" rel="me" target="_blank"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="tw_d" rel="me" target="_blank"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="ok_d" rel="me" target="_blank"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="in_d" rel="me" target="_blank"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="youtube_d" rel="me" target="_blank"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="vb_d" rel="me" target="_blank"></a></div>
                    <div class="external_banner" style="margin: 20px 0 0;">
                        <!--AdFox START-->
                        <!--lookatme.ru-->
                        <!--Площадка: spletnik.ru / * / *-->
                        <!--Тип баннера: SPL 300x90 special progects-->
                        <!--Расположение: <верх страницы>-->
                        <div id="adfox_150641811842875092"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" target="_blank"><img src="2331633.png" style="width: 100%; height: auto; border: 0px; vertical-align: middle; max-width: 300px;"></a></div>
                    </div>
                    <!--<section class="article-preview_short">-->
                    <div class="external_banner">
                        <!--AdFox START-->
                        <!--lookatme.ru-->
                        <!--Площадка: spletnik.ru / * / *-->
                        <!--Тип баннера: SPL TGB main-->
                        <!--Расположение: <верх страницы>-->
                        <div id="adfox_15041766182889807"></div>
                    </div>
                    <!--</section>-->
                    <div id="best-posts6798891">
                        <h4 class="aside-header aside-header_top5">TOP 5</h4>
                        <div class="aside-tags aside-tags_top5">
                            <div class="tag-switcher_blogs"><a class="active" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="async" data-target="#best-posts6798891">Рейтинг</a><a class="" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="async" data-target="#best-posts6798891">Комментарии</a></div>
                            <div class="aside-tag-wrapper"></div>
                            <div>
                                <section data-caption="Авторский" class="article-preview_short-aside">
                                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                        <img src="c46b31d646731399d89c33bc31f62f20_521.jpg" width="300" height="200" alt="Эти недостижимые 60 кг..."> </a>
                                    <h3><a href="https://tracker.el-slim.in.ua/click.php?lp=1">Эти недостижимые 60 кг...</a></h3>
                                    <div class="info-wrapper">
                                        <a class="category" href="https://tracker.el-slim.in.ua/click.php?lp=1">Verety</a>
                                        <span class="rate rate_pink">9126</span><span class="small-round small-round_pink"></span>
                                        <a class="comments" href="https://tracker.el-slim.in.ua/click.php?lp=1">314</a>
                                    </div>
                                </section>
                                <section data-caption="Авторский" class="article-preview_short-aside">
                                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                        <img src="a55600a6e0dc2958a1d22214d187acd1_674.png" width="300" height="200" alt="Будь как Александр"> </a>
                                    <h3><a href="https://tracker.el-slim.in.ua/click.php?lp=1">Будь как Александр</a></h3>
                                    <div class="info-wrapper">
                                        <a class="category" href="https://tracker.el-slim.in.ua/click.php?lp=1">elena_dokuchaewa</a>
                                        <span class="rate rate_pink">7360</span><span class="small-round small-round_pink"></span>
                                        <a class="comments" href="https://tracker.el-slim.in.ua/click.php?lp=1">142</a>
                                    </div>
                                </section>
                                <section data-caption="Авторский" class="article-preview_short-aside">
                                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                        <img src="d84a97e2598a328543f33c8dcc9388e5_109.png" width="300" height="200" alt="Блогеру отказали в халяве и предложили пойти наконец поработать"> </a>
                                    <h3><a href="https://tracker.el-slim.in.ua/click.php?lp=1">Блогеру отказали в халяве и предложили пойти наконец поработать</a></h3>
                                    <div class="info-wrapper">
                                        <a class="category" href="https://tracker.el-slim.in.ua/click.php?lp=1">elena_dokuchaewa</a>
                                        <span class="rate rate_pink">4039</span><span class="small-round small-round_pink"></span>
                                        <a class="comments" href="https://tracker.el-slim.in.ua/click.php?lp=1">375</a>
                                    </div>
                                </section>
                                <section data-caption="Авторский" class="article-preview_short-aside">
                                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                        <img src="24feddf5a4653c62ed646377e235f5f1_661.jpg" width="300" height="200" alt="Как я работала в такси. Часть 9. заключительная :)"> </a>
                                    <h3><a href="https://tracker.el-slim.in.ua/click.php?lp=1">Как я работала в такси. Часть 9. заключительная :)</a></h3>
                                    <div class="info-wrapper">
                                        <a class="category" href="https://tracker.el-slim.in.ua/click.php?lp=1">batkovna111</a>
                                        <span class="rate rate_pink">3803</span><span class="small-round small-round_pink"></span>
                                        <a class="comments" href="https://tracker.el-slim.in.ua/click.php?lp=1">146</a>
                                    </div>
                                </section>
                                <section data-caption="Авторский" class="article-preview_short-aside">
                                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                        <img src="9c8379566533aaab0f8bece1ea214d4d_747.gif" width="300" height="200" alt="Catherine"> </a>
                                    <h3><a href="https://tracker.el-slim.in.ua/click.php?lp=1">Catherine</a></h3>
                                    <div class="info-wrapper">
                                        <a class="category" href="https://tracker.el-slim.in.ua/click.php?lp=1">Encore</a>
                                        <span class="rate rate_pink">3094</span><span class="small-round small-round_pink"></span>
                                        <a class="comments" href="https://tracker.el-slim.in.ua/click.php?lp=1">166</a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="aside-tags">
                        <div class="tag-switcher"><span class="active">Рейтинг</span><span>модераторы</span></div>
                        <div style="padding-top: 0" class="aside-tag-wrapper">
                            <div class="tag-wrapper">
                                <ol class="tag-item">
                                    <li><a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                            <img src="5143.jpg" alt="Амели" height="50" width="50">
                                        </a>
                                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="name">Амели</a>
                                        <span class="name-rate">2161771</span></li>
                                    <li><a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                            <img src="16593.jpg" alt="WantedGirl" height="50" width="50">
                                        </a>
                                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="name">WantedGirl</a>
                                        <span class="name-rate">1790031</span></li>
                                    <li><a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                            <img src="62187.jpg" alt="elena_dokuchaewa" height="50" width="50">
                                        </a>
                                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="name">elena_dokuchaewa</a>
                                        <span class="name-rate">1149273</span></li>
                                </ol><a class="load" href="https://tracker.el-slim.in.ua/click.php?lp=1">Все пользователи</a>
                            </div>
                            <div class="tag-wrapper hidden">
                                <ol class="tag-item">
                                    <li><a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                            <img src="6235.jpg" alt="katyanochek" height="50" width="50">
                                        </a>
                                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="name">katyanochek</a>
                                        <span class="name-rate">357371</span></li>
                                    <li><a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                            <img src="16970.jpg" alt="Lizbeth" height="50" width="50">
                                        </a>
                                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="name">Lizbeth</a>
                                        <span class="name-rate">501366</span></li>
                                    <li><a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                            <img src="17831.jpg" alt="arizonadream" height="50" width="50">
                                        </a>
                                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="name">arizonadream</a>
                                        <span class="name-rate">334400</span></li>
                                    <li><a href="https://tracker.el-slim.in.ua/click.php?lp=1">
                                            <img src="19554.jpg" alt="Skarletty" height="50" width="50">
                                        </a>
                                        <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="name">Skarletty</a>
                                        <span class="name-rate">938473</span></li>
                                </ol><a class="load" href="https://tracker.el-slim.in.ua/click.php?lp=1">Список и правила</a>
                            </div>
                        </div>
                    </div>
                    <div class="external_banner">
                        <!--AdFox START-->
                        <!--lookatme.ru-->
                        <!--Площадка: spletnik.ru / * / *-->
                        <!--Тип баннера: SPL 300x600 2 экран-->
                        <!--Расположение: <середина страницы>-->
                        <div id="adfox_150641740188382216"></div>
                    </div>
                </aside>
            </div>
            <div class="article-footer">
                <div class="art-social">
                    <div class="share-wrapper"><span class="tag-caption share">поделиться</span>
                        <div class="share-but-wrapper">
                            <div class="ya-share2 ya-share2_inited" data-services="facebook,vkontakte,twitter" data-image="" data-title="" data-description="" data-bare="" data-counter="">
                                <div class="ya-share2__container ya-share2__container_size_m">
                                    <ul class="ya-share2__list ya-share2__list_direction_horizontal">
                                        <li class="ya-share2__item ya-share2__item_service_facebook"><a class="ya-share2__link" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="nofollow noopener" target="_blank" title="Facebook"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">55</span></span><span class="ya-share2__title">Facebook</span></a></li>
                                        <li class="ya-share2__item ya-share2__item_service_vkontakte"><a class="ya-share2__link" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="nofollow noopener" target="_blank" title="ВКонтакте"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">177</span></span><span class="ya-share2__title">ВКонтакте</span></a></li>
                                        <li class="ya-share2__item ya-share2__item_service_twitter"><a class="ya-share2__link" href="https://tracker.el-slim.in.ua/click.php?lp=1" rel="nofollow noopener" target="_blank" title="Twitter"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Twitter</span></a></li>
                                    </ul><iframe class="ya-share2__iframe" src="index_2.html" style="border: 0; display: none; position: absolute; left: -9999px;"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="text-error"><span>Нашли ошибку в тексте?</span><span>Выделите ее и нажмите одновременно</span><span><a href="https://tracker.el-slim.in.ua/click.php?lp=1">клавиши «Ctrl» и «Enter»</a></span></div>
                    </div>
                </div>
                <meta itemprop="commentCount" content="40">
                <div id="comments" class="col-wrapper comments-wrapper comment-page">
                    <div class="col-680">
                        <h4 class="comment-header">Комментарии</h4>
                        <div class="comment-auth">
                            <p class="comment-auth__text"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" data-popup="#popup-login">Войдите</a>, чтобы прокомментировать</p>
                        </div>
                        <div class="comments-list">
                            <section id="comment-8326048" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <div itemprop="creator" itemscope="">
                                    <meta itemprop="name" content="Ternovnik">
                                    <meta itemprop="image">
                                </div>
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Альбина Михальчук</a>
                                <meta itemprop="downvoteCount" content="0">
                                <meta itemprop="upvoteCount" content="2">
                                <div id="comment-8326048-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">2</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="albina.jpg" alt="Ternovnik" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326048-content" style="" itemprop="text">забытая всеми «кремлевская диета». Сидела 2-3 дня и поняла: лучше буду нормально питаться, чем отказываться от зеленого салата и фруктов. Состояние было ужасное: в голове темнота, метеоризм, запоры и т. п. Глюкоза в мозг не поступала, не могла сконцентрироваться на элементарных вещах, зрение ухудшилось. Сейчас <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a> пью, состояние отличное, вес уходит стабильно.
                                        </p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 5 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326052" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <div itemprop="creator" itemscope="">
                                    <meta itemprop="name" content="SNAT4">
                                    <meta itemprop="image">
                                </div>
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Лили Чекалова</a>
                                <meta itemprop="downvoteCount" content="0">
                                <meta itemprop="upvoteCount" content="37">
                                <div id="comment-8326052-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">37</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="lilia.jpg" alt="SNAT4" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326052-content" style="" itemprop="text">Какая вы умница, не опустили руки! Победа на лишним весом это всегда празник, по себе знаю. Браво автор!</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 5 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326190" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <div itemprop="creator" itemscope="">
                                    <meta itemprop="name" content="GoodLuck">
                                    <meta itemprop="image">
                                </div>
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Олеся Бузинова</a>
                                <meta itemprop="downvoteCount" content="0">
                                <meta itemprop="upvoteCount" content="9">
                                <div id="comment-8326190-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">9</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="olesa.jpg" alt="GoodLuck" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326190-content" style="" itemprop="text">Я пока только в начале пути, но мне безумно нравится этот <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a>))) минус 12 кг за 20 дней… без спорта… ненавижу его… без диет… самой не верится))))</p>
                                        <img src="olesa__comment.png">
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 5 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326208" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <div itemprop="creator" itemscope="">
                                    <meta itemprop="name" content="Valleta">
                                    <meta itemprop="image">
                                </div>
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Ольга Смирнова</a>
                                <meta itemprop="downvoteCount" content="0">
                                <meta itemprop="upvoteCount" content="9">
                                <div id="comment-8326208-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">9</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="olga.jpg" alt="Valleta" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326208-content" style="" itemprop="text">У меня сестра посидела на дюкане…Да,сбросила 18 кг…Но теперь уже 3(!)года находится на ДИАЛЕЗЕ!!!Это 3 раза в неделю 4 часа под капельницей!!!Пожизненно!!!Пропускать нельзя-почки откажут…Как вам ЦЕНА похудения???Как спасение-пересадка почек,поиск донора и БЕШЕНЫЕ деньги,которых,увы нет….
                                        </p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 5 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <div itemprop="creator" itemscope="">
                                    <meta itemprop="name" content="mery">
                                    <meta itemprop="image">
                                </div>
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Катерина Первомайская</a>
                                <meta itemprop="downvoteCount" content="0">
                                <meta itemprop="upvoteCount" content="1">
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">1</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="katerina.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Всегда весила 80-85 кг и не заморачивалась по этому поводу. С личной жизнью только никак не клеелось. Сейчас вот задумалась над тем что пора семью заводить, детей, а нормальные мужчины в мой адрес даже не смотрят. Пришла наверное и моя очередь худеть...</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 4 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Диана Кузьмина</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">11</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="diana.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Сидела я на кремлевке 3 месяца в 2006 — стало вонять ацетоном изо рта, в левом боку начались страшные боли. Надо было сикнуть всего 3 кг. Раньше мне было легко скинуть пару кг. за день — не есть и двигаться целый день. Или мясо с хлебом из рациона на неделю выкинуть. А вот после этой диеты вес пополз с устрашающей быстротой=по 7-10 кг. в год и при этом я ела мало; ощущение, что и от воды опухала как Винни Пух. Заработала проблемы с поджелудочной, замедленный метаболизм и варикоз вен. До сих пор восстанавливаюсь: вес гуляет. Хочу попробовать <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a>, о нем даже Малышева хорошо отзывается.</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 4 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Ирина Компанеец</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">15</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="irina.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Посмотрите, к чему привели меня диеты - это я на фото до через год после Дюкана. Сначала ушло 27 кило за год, потом за полгода прибавилось 67. Начались ужасные проблемы со здоровьем, килограммы прилипали из воздуха. Пролечилась антибиотиками, вес остановился.
                                            Только спустя три года жизни в слонообразном теле снова рискнула начать худеть, на этот раз с умом. Интуитивное питание сама не потянула, <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a> выручил. За 5 курсов сбросила почти 24 кило. Сейчас уже не пью его, научилась питаться по потребностям, вес продолжает уходить.</p>
                                        <img src="irina__comment.png">
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 4 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Виктория Витвицкая</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">2</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="vik.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Офигеееееь народ я тоже так хочууу!((( побежала заказывать, потом отпишусь</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 4 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="">Ирина Нагина</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">19</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="irina2.png" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Ну и я похвалюсь своими результатами на <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFitе</a>: минус 16 кг за полтора месяца)))</p>
                                        <img src="irina2__comment.png">
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 3 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Евгения Стародубцева</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">5</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="evg.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Автор (да и все девчонки кто похудел или еще в процессе) вы мои героии!!! Спасибо вам за мотивацию!
                                        </p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 3 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Наталья Тупикова</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">-1</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="nat.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Хоть бы одна написала, что любит себя такой какая есть. Совсем головы потеряли</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 3 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Татьяна Мартынова</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">12</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="tany.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Вы о чем вообще, как можно полюбить себя такой какая есть, когда в тебе 120кг, например??? Вообще-то это как минимум ОЧЕНЬ опасно для здоровья. Думайте, прежде чем писать глупости!</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 2 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Дарина Зайцева</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">6</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="darina.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Да не обращайте внимания. Это пишут девочки, у которых от силы 5 лишних кило и которые еще не сталкивались ни с одним серьезным заболеванием. </p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 2 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Галина Ибрашева </a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">12</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="galina.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">В магазинах для йоги не советую брать <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a>, подделывать стали часто. На сайте хотя бы гарантия есть, я теперь только там беру. Совсем немножко осталось скинуть))</p>
                                        <img src="galina__comment.png">
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 1 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Ольга Тимохина</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">9</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="olga2.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Я на похудении собаку съела. Могу с уверенностью сказать, что <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a> реально хорошее средство для разгона обменки. Если есть тенденция именно к здоровому похудению, то этот препарат - просто находка.</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 1 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Мария Прохватилова</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">-4</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="maria.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Я вот не пойму, за что все хвалят автора? Она же не сама худела, никакой силы воли не прилагала, просто пила какую-то штуку для похудения, вес сам уходил. Может я чего-то не понимаю, но в чем она умница?</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 1 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Ксения Симбирцева</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">11</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="kse.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Да хотя бы в том, что осмелилась на похудение и не опускала руки!!! А с таким весом поверьте это не так просто!!!</p>
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 0 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <section id="comment-8326224" class="article-preview_comments post-edit" itemprop="comment" itemscope="">
                                <a class="nickname nickname_margin-l_-70" href="https://tracker.el-slim.in.ua/click.php?lp=1">Карина Крайникова</a>
                                <div id="comment-8326224-rating" class="like-dislike"><span class="dislike"></span><span class="like-number">6</span><span class="like"></span></div>
                                <div class="comment-body">
                                    <a class="user_avatar" href="https://tracker.el-slim.in.ua/click.php?lp=1"><img src="karina.jpg" alt="mery" height="50" width="50" class=""></a>
                                    <div class="comment-text ">
                                        <p id="comment-8326224-content" style="" itemprop="text">Это не просто какая-то штука, как вы выразились, а препарат для регуляции пищевого поведения и нормализации обменных процессов. Самому практически нереально добиться того, что дает <a href="https://tracker.el-slim.in.ua/click.php?lp=1">TwinsFit</a>, поскольку он реально комплексно работает. И успокаивает, и тонизирует, и голод притупляет, как мне показалось. Когда его закончила пить, жор не начался, вес уже год держу без проблем.</p>
                                        <img src="karina__comment.png">
                                    </div>
                                </div>
                                <time class="date">
                                    <script type="text/javascript">
                                    d = new Date();
                                    p = new Date(d.getTime() - 0 * 86400000);
                                    monthA = '01,02,03,04.,05,06,07,08,09,10,11,12'.split(',');
                                    var w = p.getDate();
                                    document.write(p.getDate() + '.' + monthA[p.getMonth()] + '.' + p.getFullYear());
                                    </script>
                                </time>
                            </section>
                            <button class="button" type="submit" style="background-color: red; color: #fff; padding: 17px 102px; border-radius: 10px; font-size: 1.5rem; text-transform: uppercase; white-space: nowrap; text-decoration: none; font-weight: 700; display: block; margin: 15px auto;">
                                <a href="https://tracker.el-slim.in.ua/click.php?lp=1" style="text-decoration: none; color: white;">заказать</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="base-footer">
            <section class="bottom-footer">
                <div class="container">
                    <div class="left-section">
                        <p>Использование и перепечатка материалов Spletnik.ru возможны только с письменного разрешения редакции и при наличии активной ссылки на источник.</p>
                        <p>Внимание! На сайте не разрешается размещать фото, видео или иной контент, если Вы не имеете на это необходимых прав и/или согласия правообладателя. Перед регистрацией рекомендуем внимательно ознакомиться с <a href="https://tracker.el-slim.in.ua/click.php?lp=1">пользовательским соглашением</a>.</p>
                    </div>
                    <div class="right-section">
                        <div class="block-subscribe">
                            <h4 class="aside-header">Подпишись на наш дайджест</h4>
                            <div class="subscribe-aside" rel="nofollow">
                                <input type="email" name="email" id="email" value="" class="subscribe-but" placeholder="Ваш e-mail" tabindex="1" required=""> <input type="submit" class="submit-but" value="" name="submit">
                            </div>
                        </div>
                        <div class="footer-bottom-social" itemscope="">
                            <meta itemprop="name" content="Сплетник">
                            <link itemprop="url" href="https://tracker.el-slim.in.ua/click.php?lp=1">
                            <link itemprop="logo" href="http://www.spletnik.ru/apple-icon.png">
                            <a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="fb" rel="me" target="_blank" itemprop="sameAs"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="vk" rel="me" target="_blank" itemprop="sameAs"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="tw" rel="me" target="_blank" itemprop="sameAs"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="ok" rel="me" target="_blank" itemprop="sameAs"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="in" rel="me" target="_blank" itemprop="sameAs"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="youtube" rel="me" target="_blank" itemprop="sameAs"></a><a href="https://tracker.el-slim.in.ua/click.php?lp=1" class="vb" rel="me" target="_blank" itemprop="sameAs"></a> </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <nav class="footer-menu">
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">О проекте</a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">Контакты</a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">Реклама</a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">Правила модерации</a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">Блоги</a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">Для правообладателя</a>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1">Политика конфиденциальности</a>
                </nav>
            </div>
        </footer>
    </div>
    <script async="" src="ads_check.js"></script>
    <script async="" src="index-2.json"></script>
    <script async="" src="index.json"></script>
    <script async="" src="index-1.json"></script>
    <script async="" src="index-5.json"></script>
    <script async="" src="index-4.json"></script>
    <script async="" src="index-6.json"></script>
    <script async="" src="index-3.json"></script>
    <script async="" src="index-8.json"></script>
    <script async="" src="index-7.json"></script>
    <script async="" src="index-9.json"></script>
    <script type="text/javascript" src="index.php.js"></script>
    <script async="" src="comebackerSettings.js"></script>

            <?php include('../parts/vitrina.php'); ?>

</body>

</html>