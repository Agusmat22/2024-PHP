let user = window.document.querySelector('#user');
let email = window.document.querySelector('#mail');
let password = window.document.querySelector('#password');
let repassword = window.document.querySelector('#repassword');
let check = window.document.querySelector('#termCondition');


let form = window.document.querySelector(".form-register");

let btnRegister = window.document.querySelector(".btn-register");


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
    
    if (check.checked) {

      let formData = {
        user: user.value,
        email: email.value,
        password: password.value
      }
      
      fetch('index.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
        })
        .then(response => {
            // Handle response
            if (response.ok) {
                return response.text();
            } else {
                throw new Error('Error occurred during form submission');
            }
        })
        .then(data => {
            // Handle data returned by PHP
            console.log(data);
        })
        .catch(error => {
            // Handle error
            console.error('Error:', error);
        });
    }
    
})


