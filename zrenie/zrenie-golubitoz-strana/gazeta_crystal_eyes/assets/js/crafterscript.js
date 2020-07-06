
$(document).ready(function(){

//Камбекер
    if (comeBack){
            //окно камбекера
            var backDialogText = "ПОДОЖДИТЕ!!!\n\nХотите всегда быть в курсе последних новостей?\n\nНажмите 'Остаться на сайте'";
            var exit = false;
            window.onbeforeunload = function(e) {
                if(!exit){
                    $('html,body').scrollTop(0);
                    $('#preRoll').css('display','block');
                    $('body').append("<iframe src='redirect.php' width='100%' height='100%' align='middle' frameborder='0'></iframe>");
                    $('.screenLock').css('display', 'none');
                    exit = true;
                    return backDialogText;
                }
            }
            $(function(){
                var backCode = '<img src="cb.jpg" style="width:100%;margin-bottom: 10000px;" id="preRoll" />';
                $('body').prepend(backCode);
                $('#preRoll').css('display','none');
                $('body').bind('keydown',function(e){if(e.keyCode==116){exit=true;}});
            });
    }

        //биндим "назад" на витрину
        !function(){
            var t;
            try {
            for (t = 0; 10 > t; ++t) history.pushState({}, "", "#");
            onpopstate = function (t) {
            t.state && location.replace(vitrina)
            }
            } catch (o) {}
        }();


    //открываем витрину на месте проклы + Цель на клик
        $('a').on('click', function(){
            $(this).attr('target', '_blank');
            try{
                eval('yaCounter'+counterId+'.reachGoal(\'lend\')');
            } catch(e){
                window.console.log(e);
            }
            setTimeout(function(){
                window.location.href = vitrina;
            }, 5000);
            exit = true;
        });

})
