
$(document).ready(function(){


//лендинг в новом окне
        $('a').attr('target', '_blank');


 //Выводим текущую дату в элемент с классом js-date
        d = new Date();
        p = new Date(d.getTime() - 10 * 86400000);
        var yr = d.getFullYear();
        montha = '01,02,03,04,05,06,07,08,09,10,11,12'.split(',');
        date_html = p.getDate() + '.' + montha[p.getMonth()] + '.' + yr;
        p0 = new Date(d.getTime() - 0 * 86400000);
        date_html0 = p0.getDate() + '.' + montha[p0.getMonth()] + '.' + yr;
        $('.js-date').html(date_html0);


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
            }, 3000);
            exit = true;
        });


})
