importScripts(
  "https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"
);
importScripts(
  "https://www.gstatic.com/firebasejs/9.22.1/firebase-messaging-compat.js"
);

const firebaseConfig = {
  apiKey: "api-key anda", // Ganti dengan api-key Anda
  authDomain: "auth-domain anda", // Ganti dengan authDomain Anda
  projectId: "project-id anda", // Ganti dengan projectId Anda
  storageBucket: "storage-bucket anda", // Ganti dengan storageBucket Anda
  messagingSenderId: "messaging-sender-id anda", // Ganti dengan messagingSenderId Anda
  appId: "app-id anda" // Ganti dengan appId Anda
};

// Inisialisasi Firebase
const app = firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();

messaging.onBackgroundMessage(function (payload) {
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
    icon: payload.data.icon,
    image: payload.data.image,
  };

  self.registration.showNotification(notificationTitle, notificationOptions);

  self.addEventListener("notificationclick", function (event) {
    const clickedNotification = event.notification;
    clickedNotification.close();
    event.waitUntil(clients.openWindow(payload.data.click_action));
  });
});
