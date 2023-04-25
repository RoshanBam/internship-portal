const form = document.getElementById('signup');

form.addEventListener("submit",()=>{
    localStorage.setItem('Email',form.email.value);
    localStorage.setItem('Username',form.username.value);
    localStorage.setItem('Contact',form.contact.value);
    localStorage.setItem('Password',form.password.value);
})

//login validation

const log = document.getElementById('login');

log.addEventListener("submit",()=>{
    var username=log.username.value;
    var password= log.password.value;

    if(log.username.value==localStorage.getItem('Username') && log.Upassword.value==localStorage.getItem('Password')){
        window.location.href="Home.html";

    }
})





