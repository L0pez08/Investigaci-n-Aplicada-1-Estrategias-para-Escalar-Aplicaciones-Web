// script.js
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    // Solo se ejecuta si estamos en la página que tiene el campo de contraseña
    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function() {
            // Alterna el tipo de input entre 'password' y 'text'
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Cambia el texto del botón
            this.textContent = type === 'password' ? ' Mostrar' : ' Ocultar';
        });
    }
});