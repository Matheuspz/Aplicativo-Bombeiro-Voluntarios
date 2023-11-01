const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('eye-off-outline');
});

function togglePasswordVisibility() {
    const togglePasswordIcon = document.getElementById('togglePassword');
    if (togglePasswordIcon.name === 'eye-off-outline') {
        togglePasswordIcon.name = 'eye-outline';
    } else {
        togglePasswordIcon.name = 'eye-off-outline';
    }
}
