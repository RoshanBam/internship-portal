document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.querySelector('#login');
    const signUpForm = document.querySelector('#signup');

    document.querySelector('#linklogin')
        .addEventListener('click', e => {
            e.preventDefault();
            signUpForm.classList.add("form-hidden");
            loginForm.classList.remove("form-hidden");
        });

    document.querySelector('#linksignup')
        .addEventListener('click', e => {
            e.preventDefault();
            loginForm.classList.add("form-hidden");
            signUpForm.classList.remove("form-hidden");
        });
})
// Organization=======================================================

document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.querySelector('#orglogin');
    const signUpForm = document.querySelector('#orgsignup');

    document.querySelector('#orglinklogin')
        .addEventListener('click', e => {
            e.preventDefault();
            signUpForm.classList.add("form-hidden");
            loginForm.classList.remove("form-hidden");
        });

    document.querySelector('#orglinksignup')
        .addEventListener('click', e => {
            e.preventDefault();
            loginForm.classList.add("form-hidden");
            signUpForm.classList.remove("form-hidden");
        });
})