const loginButton = document.querySelector('#login');
const registrationButton = document.querySelector('#registration');
const loginForm = document.querySelector('#login-form');
const registrationForm = document.querySelector('#registration-form');

loginButton.addEventListener('click', () => {
    loginForm.hidden = false;
    registrationForm.hidden = true;
    loginButton.setAttribute('aria-pressed', 'true');
    registrationButton.setAttribute('aria-pressed', 'false');
});

registrationButton.addEventListener('click', () => {
    loginForm.hidden = true;
    registrationForm.hidden = false;
    loginButton.setAttribute('aria-pressed', 'false');
    registrationButton.setAttribute('aria-pressed', 'true');
});
