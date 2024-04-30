let btnRegister = document.querySelector('.btn-register');
let form = document.querySelector('.form-login');


btnRegister.addEventListener("click",(event)=>{
    window.location.href = "register.html";
})


form.addEventListener('submit',(event)=>{
    event.preventDefault();


    // Submit the form to the PHP file
    var form = document.getElementById("myForm");
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