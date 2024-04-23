var now = new Date();
var hour = now.getHours(); // Mengambil jam lokal dari perangkat

var greeting = document.getElementById("greeting");

if (hour >= 5 && hour < 11) {
  greeting.textContent = "Selamat Pagi Admin! Semoga hari kamu menyenanngkan.";
} else if (hour >= 11 && hour < 15) {
  greeting.textContent = "Selamat Siang Admin! Jangan lupa bersyukur.";
} else if (hour >= 15 && hour < 24) {
  greeting.textContent = "Selamat Malam Admin! Jangan lupa semangat ya";
} else {
  greeting.textContent = "Selamat Malam Admin! Waktunya istirahat.";
}
