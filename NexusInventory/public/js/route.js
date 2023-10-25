document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.getElementById('reg-log');
    const loginLink = document.getElementById('login-link');
    const registerLink = document.getElementById('login2-link');

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            loginLink.style.display = 'none';
            registerLink.style.display = 'block';
        } else {
            loginLink.style.display = 'block';
            registerLink.style.display = 'none';
        }
    });
});

