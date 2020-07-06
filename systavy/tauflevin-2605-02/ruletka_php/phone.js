(function(){

        var listen = function (el, ev, func) {
            if (el.addEventListener){
                return el.addEventListener(ev, func, false);
            }else if (el.attachEvent) {
                return el.attachEvent("on"+ev, func);
            }
        }

        for(form of document.querySelectorAll("form")){
            listen(form, "submit", function (e) {

                phone = e.srcElement.phone.value;
                var clear_phone = phone.replace(/[^0-9]/g,'');

                if(phone.length == 0) {
                    alert('Вы не заполнили поле "Телефон"');
                    e.preventDefault();
                    return false;
                }

                if(clear_phone.length < 11) {
                    alert('Введен слишком короткий номер телефона');
                    e.preventDefault();
                    return false;
                }

                if(clear_phone.indexOf('7') !== 0) {
                    alert('Необходимо ввести телефон в международном формате, он должен начинаться с +7');
                    e.preventDefault();
                    return false;
                }

                if(clear_phone.length > 13) {
                    alert('Введен слишком длинный номер телефона');
                    e.preventDefault();
                    return false;
                }
            });
        };

    })();
