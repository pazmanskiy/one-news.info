firebase.initializeApp({
    messagingSenderId: '760326053973'
});
// браузер поддерживает уведомления
// вообще, эту проверку должна делать библиотека Firebase, но она этого не делает

//если включить эту проверку, то на мобилках не будет вылетать предложение о подписке
//if ('Notification' in window) {
    var messaging = firebase.messaging();
    // пользователь уже разрешил получение уведомлений
    // подписываем на уведомления если ещё не подписали
//    if (Notification.permission === 'granted') {
        subscribe();
//    }
//}

function subscribe() {
    // запрашиваем разрешение на получение уведомлений
    messaging.requestPermission()
        .then(function () {
            // получаем ID устройства
            messaging.getToken()
                .then(function (currentToken) {
                    console.log(currentToken);

                    if (currentToken) {
                        sendTokenToServer(currentToken);
                    } else {
                        console.warn('Не удалось получить токен.');
                        setTokenSentToServer(false);
                    }
                })
                .catch(function (err) {
                    console.warn('При получении токена произошла ошибка.', err);
                    setTokenSentToServer(false);
                });
    })
    .catch(function (err) {
        console.warn('Не удалось получить разрешение на показ уведомлений.', err);
    });
}

// отправка ID на сервер
function sendTokenToServer(currentToken) {
    if (!isTokenSentToServer(currentToken)) {
        console.log('Отправка токена на сервер...');

        var url = '../../push_includes/send_token.php'; // адрес скрипта на сервере который сохраняет ID устройства
        $.post(url, {
            token: currentToken,
            url: document.URL
        });

        setTokenSentToServer(currentToken);
    } else {
        console.log('Токен уже отправлен на сервер.');
    }
}

// используем localStorage для отметки того,
// что пользователь уже подписался на уведомления
function isTokenSentToServer(currentToken) {
    return window.localStorage.getItem('sentFirebaseMessagingToken') == currentToken;
}

function setTokenSentToServer(currentToken) {
    window.localStorage.setItem(
        'sentFirebaseMessagingToken',
        currentToken ? currentToken : ''
    );
}