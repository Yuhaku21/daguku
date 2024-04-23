var users = {
  husnul: "husnul12",
  user1: "password1",
  user2: "password2",
  // Anda dapat menambahkan pasangan username dan password tambahan di sini
};

function login() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (users.hasOwnProperty(username) && users[username] === password) {
    // Login successful code (unchanged)
    var alertDiv = document.createElement("div");
    alertDiv.classList.add("alert", "alert-success", "mt-3");
    alertDiv.innerHTML = "Login berhasil! Tunggu Sebentar⌛...";
    document.querySelector(".card-body").appendChild(alertDiv);
    setTimeout(function () {
      alertDiv.remove();
      window.location.href = "dashboard-admin.html"; // Arahkan ke halaman dashboard-admin.html setelah 3 detik
    }, 3000);
  } else {
    // Create and display alert for incorrect credentials
    var alertDiv = document.createElement("div");
    alertDiv.classList.add("alert", "alert-danger", "mt-3");
    alertDiv.innerHTML = "<strong>Login gagal!</strong> Username atau password salah ‼.";
    alertDiv.setAttribute("role", "alert"); // Add for accessibility
    var closeButton = document.createElement("button");
    closeButton.type = "button";
    closeButton.classList.add("btn-close");
    closeButton.setAttribute("data-bs-dismiss", "alert");
    closeButton.setAttribute("aria-label", "Close"); // Add for accessibility
    alertDiv.appendChild(closeButton);
    document.querySelector(".card-body").appendChild(alertDiv);
  }
}
function togglePassword() {
  var passwordInput = document.getElementById("password");
  var passwordIcon = document.getElementById("passwordIcon");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordIcon.classList.remove("bi-eye-fill");
    passwordIcon.classList.add("bi-eye-slash-fill");
  } else {
    passwordInput.type = "password";
    passwordIcon.classList.remove("bi-eye-slash-fill");
    passwordIcon.classList.add("bi-eye-fill");
  }
}
