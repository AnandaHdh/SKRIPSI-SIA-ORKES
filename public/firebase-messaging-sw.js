importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');


    self.onnotificationclick = function(event) {
        console.log('On notification click: ', event.notification.tag);
        event.notification.close();

        // This looks to see if the current is already open and
        // focuses if it is
        event.waitUntil(clients.matchAll({
            type: "window"
        }).then(function(clientList) {
            for (var i = 0; i < clientList.length; i++) {
                var client = clientList[i];
                if (client.url == '/' && 'focus' in client)
                    return client.focus();
            }
            if (clients.openWindow)
                return clients.openWindow('/');
        }));
    };

	firebase.initializeApp({
        apiKey: "AIzaSyB5sUnXQnFU9gbGVCsbccoOCR82oLXCvBY",
        authDomain: "toyotaastra-adb61.firebaseapp.com",
        databaseURL: "https://toyotaastra-adb61.firebaseio.com",
        projectId: "toyotaastra-adb61",
        storageBucket: "toyotaastra-adb61.appspot.com",
        messagingSenderId: "886904233701",
        appId: "1:886904233701:web:58dac20b906baa4f9b7e0c"
    });

	const messaging = firebase.messaging();
	messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );

    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };

    self.addEventListener('notificationclick', function(event) {
        event.notification.close();
        event.waitUntil(self.clients.openWindow("google.com"));
      });

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );




});
