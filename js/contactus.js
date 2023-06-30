// Validimi i Contact Us Formes (Front)

const form = document.getElementById("form");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const message = document.getElementById("message");

form.addEventListener("submit", (e) => {
  checkInputs(e);
});

function checkInputs(e) {
  const firstNameValue = firstName.value.trim();
  const lastNameValue = lastName.value.trim();
  const emailValue = email.value.trim();
  const phoneValue = phone.value.trim();
  const messageValue = message.value.trim();

  if (firstNameValue === "") {

    alert("First Name cannot be blank");
    e.preventDefault();
    
  } else if (lastNameValue === "") {

    alert("Last Name cannot be blank");
    e.preventDefault(); 

  } else if (emailValue === "") {

    alert("Email cannot be blank");
    e.preventDefault();
   
  } else if (!isEmail(emailValue)) {

    alert("Not a valid email");
    e.preventDefault(); 

  } else if (phoneValue === "") {

    alert("Phone cannot be blank");
    e.preventDefault();

  } else if (!isPhone(phoneValue)) {

    alert("Not a valid phone number");
    e.preventDefault();
  
  } else if (messageValue === "") {

    alert("Message cannot be blank");
    e.preventDefault();

  } else if (messageValue === "") {

    alert("Message cannot be blank");
    e.preventDefault();

  } else if (!messageLength(messageValue)) {

    alert("Maximum message length is 200 characters");
    e.preventDefault();
  }
  
}


function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

function isPhone(phone){
    return /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(phone);
}

function messageLength(message){
  return message.length <= 200;
}

