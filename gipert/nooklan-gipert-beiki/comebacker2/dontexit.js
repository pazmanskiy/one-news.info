dontexit = eval('(' + dontexit + ')');
dontexit['settings']['launch'] = true;
if (undefined == dontexit['settings']['working_in_opera_after']) {
    dontexit['settings']['working_in_opera_after'] = 0;
}
dontexit['temp'] = {
    'audio_refresher' : '', 
    'cursor_x' : 0, 
    'cursor_y' : 0, 
    'cursor_y_previous' : 0, 
    'cancel_click' : false, 
    'launch_time' : 0, 
    'cache' : {}, 
    'anticache' : 509
};

dontexit['exit_text'] = '********************************************\nПодождите!\n\nПеред тем как Вы ушли, мы хотим сделать Вам выгодное предложение. Останьтесь на странице и просмотрите его!\n\n********************************************\n\n';

//dontexit['exit_text'] = dontexit['exit_text'].replace("[[\u043d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u043a\u043d\u043e\u043f\u043a\u0438]]", '\u041e\u0441\u0442\u0430\u0442\u044c\u0441\u044f \u043d\u0430 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0435');
var dontexit_html = {
    'prefix' : '', 
    'postfix' : '', 
    'audio' : '', 
    'iframe' : ''
};
dontexit_html['css'] = ' html{ height: 100%; } body{ margin: 0px; padding: 0px; height: 100% !important; background: none; }';
dontexit_html['prefix'] += '<div id="dontexit_main_div" style="overflow: hidden; width: 1px; height: 1px;" onmouseover="dontexitCancelClick();">';
dontexit_html['postfix'] = '</div>';
dontexit_html['audio'] += '<object id="dontexit_audio" type="application/x-shockwave-flash" data="' + dontexit['settings']['base_url'] + '/comebacker2/player.swf" style="position: absolute; left: -9999px; width: 1px; height: 1px;">';
dontexit_html['audio'] += ' <param name="movie" value="' + dontexit['settings']['base_url'] + '/comebacker2/player.swf" />';
dontexit_html['audio'] += ' <param name="AllowScriptAccess" value="always" />';
dontexit_html['audio'] += ' <param name="FlashVars" value="listener=dontexitAudioListener&amp;interval=500" />';
dontexit_html['audio'] += '</object>';
dontexit_html['iframe'] = '<iframe id="dontexit_iframe" src="' + dontexit['settings']['page_to'] + '" style="width: 100%; height: 100%; border: 0px;"></iframe>';
dontexit_html['whole'] = dontexit_html['css'] + dontexit_html['prefix'] +  dontexit_html['audio'] + dontexit_html['iframe'] + dontexit_html['postfix'];
jQuery(document).ready(function() {
    jQuery('a').each(function (i) {
        if ('_blank' != jQuery(this).attr('target') && '#' != jQuery(this).attr('href')) {
            jQuery(this).bind('click', function(){
                dontexit['settings']['launch'] = false;
            });
        }
    });
 
jQuery('body').append(dontexit_html['whole']);
jQuery('#dontexit_iframe').load(function(){
   // window.location.href = dontexit['settings']['page_to'];
    jQuery('#dontexit_iframe').contents().find('object, audio, video, iframe').css('display', 'none');
    jQuery('#dontexit_iframe').contents().find('object').wrap('<div style="display: none" />');
});
});
function dontexitLaunch() {
    if (true == dontexit['settings']['launch']) {
        dontexit['temp']['launch_time'] = dontexit_time();
        jQuery('body').children().not('#dontexit_main_div').remove();
        jQuery('body').contents().filter(function(){
            return this.nodeType === 3;
        }).remove();
      //  jQuery('head link').remove();
        jQuery('head style').remove();
        jQuery('#dontexit_main_div').css('width', '100%');
        jQuery('#dontexit_main_div').css('height', '100%');
        jQuery('body').append('<style>' + dontexit_html['css'] + '</style>');
      //  jQuery('#dontexit_bar').css('display', 'block');
     //   jQuery('#dontexit_image_div').css('display', 'block');
        clearInterval(dontexit['temp']['audio_refresher']);
        dontexitSetPosition(0);
        dontexitSetVolume(100);
        dontexit['settings']['launch'] = false;
  
        return dontexit['exit_text'];
    }
}
function dontexitCancelClick() {
    if (false == dontexit['temp']['cancel_click'] && dontexit['temp']['launch_time'] < dontexit_time()-1) {
      //  jQuery('#dontexit_image_div').remove();
        dontexitAudioStop();
        jQuery('#dontexit_audio').remove();
        jQuery('#dontexit_main_div').unbind('mouseover', false);
 
        jQuery('#dontexit_iframe').contents().find('object, audio, video, iframe').css('display', 'inline');
   //     jQuery('#dontexit_iframe').contents().find('object[id=skype_plugin_object]').remove();
        jQuery('#dontexit_iframe').contents().find('object').unwrap();
        if ('undefined' != typeof(document.getElementById('dontexit_iframe').contentWindow.dontexit_after_cancel)) {
            document.getElementById('dontexit_iframe').contentWindow.dontexit_after_cancel();
        }
        dontexit['temp']['cancel_click'] = true;
    }
}
window.onbeforeunload = dontexitLaunch;
var dontexitAudioListener = new Object();
dontexitAudioListener.onInit = function(){
    dontexitSetVolume(0);
    dontexitAudioPlay();
    dontexit['temp']['audio_refresher'] = window.setInterval(function(){
        dontexitSetPosition(0)
        }, 3000);
};
dontexitAudioListener.onUpdate = function(){};    
function dontexitGetAudioObject() {
    return document.getElementById("dontexit_audio");
}
function dontexitAudioPlay() {
    if (typeof dontexitGetAudioObject().SetVariable != 'undefined'){
        dontexitGetAudioObject().SetVariable("method:setUrl",  dontexit['settings']['base_url'] + '/comebacker2/12.mp3');
        dontexitGetAudioObject().SetVariable("method:play", "");
        dontexitGetAudioObject().SetVariable("enabled", "true");
    }
}
function dontexitAudioStop() {
    if (typeof dontexitGetAudioObject().SetVariable != 'undefined'){
        dontexitGetAudioObject().SetVariable("method:stop", "");
    }
}
function dontexitSetVolume(volume) {
    if (typeof dontexitGetAudioObject().SetVariable != 'undefined'){
        dontexitGetAudioObject().SetVariable("method:setVolume", volume);
    }
}
function dontexitSetPosition(position) {
    if (typeof dontexitGetAudioObject().SetVariable != 'undefined'){
        dontexitGetAudioObject().SetVariable("method:setPosition", position);
    }
}
function dontexit_time() {
    var temp = 75093;
    return Math.floor(new Date().getTime() / 1000);
}