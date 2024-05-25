const form = document.getElementById('form');
const username = document.getElementById('Name');
const mobile = document.getElementById('Contact');
const email = document.getElementById('Email');
const message = document.getElementById('Message');


form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    errorDisplay.style.color="#ff0000";
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const mobileValue = mobile.value.trim();
    const emailValue = email.value.trim();
    const messageValue = message.value.trim();
    

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(mobileValue === '') {
        setError(mobile, 'Mobile number is required');
    } else if (mobileValue.length !== 10) {
        setError(mobile, 'Mobile number must be of 10 digit.')
    } 
    else {
        setSuccess(mobile);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(messageValue === '') {
        setError(message, 'Message is required');
    } else {
        setSuccess(message);
    }


};
    



// function validation()
// {
//         var form=document.getElementById("form");
//         var email=document.getElementById("Email").value;
//         var text=document.getElementById("text");
//         var pattern= /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
//         console.log(email);
//         if(email.match(pattern))
//         {
//             //form.classList.add("valid");
//             //form.classList.remove("invalid");
//             text.innerHTML="Your email address is valid.";
//             text.style.color="#00ff00";
//         }
//         else{
//             //form.classList.add("invalid");
//             //form.classList.remove("valid");
//             text.innerHTML="Please enter valid email.";
//             text.style.color="#ff0000";
//         }
//         if(email=="")
//         {
//             //form.classList.remove("valid");
//             //form.classList.remove("invalid");
//             text.innerHTML="";
//             text.style.color="#00ff00";
//         }
// }
