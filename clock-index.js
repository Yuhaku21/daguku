function updateTime() {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();

  // Tambahkan nol di depan angka jika kurang dari 10
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  var currentTime = hours + ":" + minutes + ":" + seconds;

  // Perbarui elemen HTML dengan ID "tampiljam" dengan waktu yang baru
  document.getElementById("tampiljam").innerText = currentTime;

  // Perbarui setiap detik (1000ms)
  setTimeout(updateTime, 1000);
}

// Panggil fungsi updateTime untuk pertama kali saat halaman dimuat
updateTime();

var text = "Daguku Store |";
var index = 0;
var speed = 100; // Kecepatan mengetik, dalam milidetik
var container = document.getElementById("typed-text");
var cursor = document.getElementById("typed-cursor");

function typeWriter() {
  if (index < text.length) {
    container.innerHTML += text.charAt(index);
    index++;
    setTimeout(typeWriter, speed);
  } else {
    // Menghapus teks dan mengatur ulang index ke 0 setelah mengetik selesai
    setTimeout(function () {
      container.innerHTML = ""; // Menghapus teks
      index = 0; // Mengatur ulang index
      typeWriter(); // Mulai lagi
    }, 1000); // Jeda 2 detik sebelum mulai lagi
  }
}

typeWriter(); // Memulai efek mengetik saat halaman dimuat
