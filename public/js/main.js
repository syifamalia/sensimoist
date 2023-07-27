function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.getElementById("toggle-password");
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.innerHTML = '<i class="bi bi-eye"></i>';
    } else {
        passwordInput.type = "password";
        toggleIcon.innerHTML = '<i class="bi bi-eye-slash"></i>';
    }
}

function genderModal() {
    var radio = document.getElementsByName('gender');
    var form = document.getElementById('registForm');
    var modal = new bootstrap.Modal(document.getElementById('myModal'));
    
    if (radio[1].checked) {
      modal.show();
      form.reset();
    }
  }

function previewImage() {
    var selectElement = document.getElementById("profile-photo");
    var previewElement = document.getElementById("preview");
    var selectedValue = selectElement.value;

    if (selectedValue !== "") {
        previewElement.src = selectedValue;
    } else {
        previewElement.src = "#";
    }
}