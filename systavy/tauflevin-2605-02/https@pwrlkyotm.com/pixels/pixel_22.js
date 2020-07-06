(function () {
    window.dmpProfitclicks = {
        eventName: {
            CREATED: 'created', // create profile
            UPDATED: 'updated', // update profile
            FAILED:  'failed', // failed request
        },

        /**
         * Конфиги и параметры скрипта
         */
        config: {
            url: '../../https@dmpprof.com/matching/internal'
        },

        /**
         * Опции для матчинга и сохранения основной пользователя
         */
        option: {
            aid: '22',
        },

        /**
         * Обработчики ивентов.
         */
        events: {
            created:    [], // загрузил данные на сервер и произошел матчинг.
            updated:    [], // загрузил данные на сервер и обновил данные.,
            failed:     [], // ошибка на любом этапе.
        },

        /**
         * Отправляет данные для сырой информации, а так же остальное
         * @param eventName
         */
        sendToServer(eventName) {
            let self = this;
            let url = this.config.url + '?' + this.encodeQueryData(Object.assign({
                event: eventName,
            }, this.option));

            fetch(url, {
                'method': 'get',
                'credentials': 'include'
            }).then(
                (response) => {
                    if (response.data.is_created) {
                        self.trigger(self.eventName.CREATED)
                    } else {
                        self.trigger(self.eventName.UPDATED)
                    }
                }
            ).catch(
                (err) => {
                    self.trigger(self.eventName.FAILED, err);
                });
        },

        /**
         * Добавление обработчиков
         */
        attach(name, callback) {
            this.events[name].push(callback);
        },

        /**
         * Вызов обработчика
         */
        trigger(name, param) {
            if (!!this.events[name]) {
                return;
            }

            for(let i = 0; i < this.events[name].length; i++) {
                try {
                    this.events[name][i](param);
                } catch (e) {
                    console.log(`Error exec event ${name}, callback position ${i}: `, e);
                }
            }
        },

        /**
         * Матчинг пользователя, обернуть это в нужное действие пользователя.
         */
        match(userEvent) {
            if (!userEvent) {
                userEvent = 'custom';
            }

            if (!this.validBrowser()) {
                return;
            }

            this.sendToServer(userEvent)
        },

        /**
         *  Поддерживает ли браузер куки
         */
        validBrowser() {
            return navigator.cookieEnabled
        },

        /**
         * Переводим параметры в определеный формат.
         * @param data
         * @returns {string}
         */
        encodeQueryData(data) {
            const ret = [];
            for (let d in data)
                ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
            return ret.join('&');
        }

    };

})();