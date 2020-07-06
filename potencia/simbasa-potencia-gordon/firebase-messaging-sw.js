// firebase-messaging-sw.js
importScripts('../../../https@www.gstatic.com/firebasejs/3.6.8/firebase-app.js');
importScripts('../../../https@www.gstatic.com/firebasejs/3.6.8/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyBJBXDviucrBaG4Av03-3TBf4bTjJfjlCY",
    authDomain: "gt1-push.firebaseapp.com",
    databaseURL: "../../../https@gt1-push.firebaseio.com",
    projectId: "gt1-push",
    storageBucket: "gt1-push.appspot.com",
    messagingSenderId: "760326053973"
});

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  //console.log('Handling background message', payload);

  // Copy data object to get parameters in the click handler
  payload.data.data = JSON.parse(JSON.stringify(payload.data));

  return self.registration.showNotification(payload.data.title, payload.data);
});

self.addEventListener('notificationclick', function(event) {
  const target = event.notification.data.click_action || '../../default.htm';
  event.notification.close();

  // This looks to see if the current is already open and focuses if it is
  event.waitUntil(clients.matchAll({
    type: 'window',
    includeUncontrolled: true
  }).then(function(clientList) {
    // clientList always is empty?!
    for (var i = 0; i < clientList.length; i++) {
      var client = clientList[i];
      if (client.url === target && 'focus' in client) {
        return client.focus();
      }
    }

    return clients.openWindow(target);
  }));
});