let user = window.document.querySelector('#user');
let email = window.document.querySelector('#mail');
let password = window.document.querySelector('#password');
let repassword = window.document.querySelector('#repassword');
let check = window.document.querySelector('#termCondition');


let form = window.document.querySelector(".form-register");

let btnRegister = window.document.querySelector(".btn-register");
let btncancel = window.document.querySelector(".btn-cancel");


let colorError = 'red';

const validateMail = (mail)=>{

    let regex = /^[0-9a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;

    return regex.test(mail);

}

const validateName = (name) =>{

    let regex = /^([a-zA-Z]+\s*)+$/;

    return regex.test(name);


};


const validatePassword = (password,rePassword) =>{

    return password === rePassword;
};


btncancel.addEventListener('click',(event)=>{
    window.location.href = './index.html';
})


user.addEventListener('input',(event)=>{

    if(! validateName(event.target.value)){
        event.target.style.backgroundColor = colorError;
        event.target.style.color = 'white';
        btnRegister.disabled = true;
    }
    else{
        event.target.style.backgroundColor = '';
        event.target.style.color = '';
        btnRegister.disabled = false;


    }

});


email.addEventListener('input',(event)=>{

    if(! validateMail(event.target.value)){
        event.target.style.backgroundColor = colorError;
        event.target.style.color = 'white';
        btnRegister.disabled = true;

    }
    else{
        event.target.style.backgroundColor = '';
        event.target.style.color = '';
        btnRegister.disabled = false;


    }

});


repassword.addEventListener('input',(event)=>{

    if(! validatePassword(password.value, event.target.value)){
        event.target.style.backgroundColor = colorError;
        event.target.style.color = 'white';
        btnRegister.disabled = true;

    }
    else{
        event.target.style.backgroundColor = '';
        event.target.style.color = '';
        btnRegister.disabled = false;


    }

});


user.addEventListener('input',(event)=>{

    if(! validateName(event.target.value)){
        event.target.style.backgroundColor = colorError;
        event.target.style.color = 'white';
        btnRegister.disabled = true;

    }
    else{
        event.target.style.backgroundColor = '';
        event.target.style.color = '';
        btnRegister.disabled = false;


    }

});


form.addEventListener('submit',(event)=>{
   
    event.preventDefault();
    // Submit the form to the PHP file
    var form = document.getElementsByClassName("form-register");
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", form.action);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Redirect the user to another HTML page after successful submission
            window.location.href = "redirection.html";
        }
    };
    xhr.send(formData);
})


