<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Token Perangkat</title>
</head>
<body>
<div class="container">
<div>Token Perangkat:</div>
<div class="message" style="max-width: 80px"></div>
</div>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-appcompat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-messagingcompat.js"></script>
<script>
const firebaseConfig = {
apiKey: "api key dari project anda",
authDomain: "domain-auth-project-anda.firebaseapp.com",
projectId: "nama-project-anda",
storageBucket: "bucket-project-anda.appspot.com",
messagingSenderId: "ID-pengirim-pesan-anda",
appId: "ID-aplikasi-anda"
};
const app = firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();
messaging
.getToken({
vapidKey: "vapid-key-anda",
})
.then((currentToken) => {
if (currentToken) {
// Menampilkan token perangkat
document.querySelector(".message").textContent = currentToken;
} else {
// Menghandle kasus ketika token tidak tersedia
document.querySelector(".message").textContent = "Token tidak tersedia";
}
})
.catch((err) => {
// Menghandle kesalahan yang terjadi saat mengambil token
document.querySelector(".message").textContent = "Error: " + err;
});
</script>
</body>
</html>
