// Function to redirect user based on selected option
function redirectToSelectedPage() {
  var selectedOption = document.getElementById("menuSelect").value;
  if (selectedOption !== "Pilih menu") {
    window.location.href = selectedOption;
  }
}

// Attach the function to the onchange event of the select element
document.getElementById("menuSelect").onchange = redirectToSelectedPage;
