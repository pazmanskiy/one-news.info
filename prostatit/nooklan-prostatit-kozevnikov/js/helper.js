function isIos() { return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false; }
function isSafari() { return /^((?!chrome|android).)*safari/i.test(navigator.userAgent); }
function isSafariNew() { return !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/); }

function popup()
{
    let url = "https://24.life-novosti.com/";
  //  let url = "https://promo-sale.pw/click.php?key=71twmw00rrwehrsbbef3&clickid={clickid}&t1=839000&utm_source=exit_traffic&utm_content=random_page&utm_term=839000&utm_medium=it_news&utm_campaign=top_news_main_company";
    // if (Math.random() >= 0.5) {
    //     url = "https://top.life-novosti.com";
    // } else {
    //     url = "https://24.life-novosti.com/";
    // }
    window.open (url,"_self", "status=1,toolbar=1,width=600,height=500,resizable=yes");
}

if ( !isIos() && !isSafari() && !isSafariNew() && typeof check === 'undefined')
{
    window.onload = function ()
    {
        // var aLinks = document.getElementsByTagName("a");
        // for (var i=0; i<aLinks.length; i++) {
        //     if(aLinks[i].className === "read" || aLinks[i].className === "close" || aLinks[i].href === "" || aLinks[i].getAttribute("href")[0] === "#") {
        //
        //     } else {
        //         aLinks[i].onclick = function () {
        //             let vitrina = 'https://promo-sale.pw/click.php?key=71twmw00rrwehrsbbef3&clickid={clickid}&t1=839000&utm_source=exit_traffic&utm_content=random_clickander&utm_term=839000&utm_medium=it_news&utm_campaign=top_news_main_company\n';
        //             setTimeout(function(){
        //                 window.location.href = vitrina;
        //             }, 3000);
        //
        //           //  popup()
        //         }
        //     }
        // }
    }
}
else {
}

$(document).ready( function(){
    ///////////////////////////////////////////////headr script popup/////////////////////////////////////////////






    ////////////////////////////////////////////////////////////////////////////////////////////////////

    let tizerLeft = 1, tizerRight = 1;
    //$('body').append('<link rel="stylesheet" type="text/css" href="/css/topnews.css">');
    if (typeof tizerOptions !== 'undefined') {
        tizerLeft = tizerOptions[0];
        tizerRight = tizerOptions[1];
    }

    if ( $( "#slidebox" ).length ) tizerLeft = 0;
    if ( $( "#chat" ).length ) tizerRight = 0;

    if (false) {

        if(tizerRight) {
            $('body').append('<div id="life-novosti" class="right-tizer-block">\n' +
                '  <div class="open-novosti"><div class="checking-cover"><div class="checking">1</div></div>' +
                '<span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"\n' +
                'width="18" height="18"\n' +
                'viewBox="0 0 192 192"\n' +
                'style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#ffeb4b"><g id="surface1"><path d="M96,16.20312l25.95312,52.54688l58.04688,8.40625l-42,40.89062l9.90625,57.75l-51.90625,-27.25l-51.90625,27.25l9.90625,-57.75l-42,-40.89062l58.04688,-8.40625z"></path></g></g></g></svg> Популярное</span></div>\n' +
                '  <iframe src="https://top.life-novosti.com/jivostite-right-sidebar/"></iframe>\n' +
                ' </div>');
            //logic ---------------------------------------------------------------
            $('.right-tizer-block .open-novosti').click( function(){

                $('#life-novosti-left iframe').removeClass('make-wider');
                $('#life-novosti iframe').toggleClass('make-wider');

                if($('#life-novosti iframe').hasClass('make-wider')){
                    $(".right-tizer-block .checking-cover").css('top','-27px').css('opacity','0');
                    $(".right-tizer-block .checking").html('1');
                    clearInterval(rightInterval);
                } else {
                    window.setTimeout( show_popup_right, 45000 );
                }

            });
        }

        if(tizerLeft){
            $('body').append('<div id="life-novosti-left" class="left-tizer-block">\n' +
                '<div class="cover-left-box">\n' +
                '  <iframe src="https://top.life-novosti.com/jivosite-left-sidebar/"></iframe></div>\n' +
                '  <div class="open-novosti"><div class="checking-cover"><div class="checking">1</div></div>' +
                '<span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"\n' +
                'width="18" height="18"\n' +
                'viewBox="0 0 192 192"\n' +
                'style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#ffeb4b"><g id="surface1"><path d="M96,16.20312l25.95312,52.54688l58.04688,8.40625l-42,40.89062l9.90625,57.75l-51.90625,-27.25l-51.90625,27.25l9.90625,-57.75l-42,-40.89062l58.04688,-8.40625z"></path></g></g></g></svg> Новости </span></div>\n' +
                ' </div>');
//logic ---------------------------------------------------------------
            $('.left-tizer-block .open-novosti').click( function(){
                $('#life-novosti iframe').removeClass('make-wider');
                $('#life-novosti-left iframe').toggleClass('make-wider');


                if($('#life-novosti-left iframe').hasClass('make-wider')){
                    $(".left-tizer-block .checking-cover").css('top','-27px').css('opacity','0');
                    $(".left-tizer-block .checking").html('1');
                    clearInterval(leftInterval);
                } else {
                    window.setTimeout( show_popup_left, 45000 );
                }

            });
        }


        function show_popup_right(){
            if(!$('#life-novosti-right iframe').hasClass('make-wider')) {
                $(".right-tizer-block .checking-cover").css('top','-27px').css('opacity','1');
                rightInterval = window.setInterval(function(){
                    let numberx = parseInt($(".right-tizer-block .checking").html());
                    numberx+=1;
                    $(".right-tizer-block .checking").html(numberx);
                }, 60000);
            }
        }

        window.setTimeout( show_popup_right, 30000 );

        function show_popup_left(){
            if(!$('#life-novosti-left iframe').hasClass('make-wider')) {
                $(".left-tizer-block .checking-cover").css('top','-27px').css('opacity','1');
                leftInterval = window.setInterval(function(){
                    let numberz = parseInt($(".left-tizer-block .checking").html());
                    numberz+=1;
                    $(".left-tizer-block .checking").html(numberz);
                }, 60000);
            };
        }

        window.setTimeout( show_popup_left, 60000 );
    }
});

