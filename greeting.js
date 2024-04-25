var now = new Date();
var hour = now.getHours(); // Mengambil jam lokal dari perangkat

var greeting = document.getElementById("greeting");

if (hour >= 5 && hour < 11) {
  greeting.textContent = "Selamat Pagi ⛅! Semoga hari kamu menyenangkan.";
} else if (hour >= 11 && hour < 15) {
  greeting.textContent = "Selamat Siang ☀! Jangan lupa bersyukur.";
} else if (hour >= 15 && hour < 24) {
  greeting.textContent = "Selamat Malam 🌘! Jangan lupa semangat ya";
} else {
  greeting.textContent = "Selamat Malam! Waktunya istirahat.";
}
