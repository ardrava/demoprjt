<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation in HTML | CodingNepal</title>
   <style>
      
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 10px;
  min-height: 100vh;
  background: #ffffff;
}

form {
  padding: 25px;
  background: #fff;
  max-width: 500px;
  width: 100%;
  border-radius: 7px;
  
}

form h2 {
  font-size: 27px;
  text-align: center;
  margin: 0px 0 30px;
}

form .form-group {
  margin-bottom: 15px;
  position: center;
}

form label {
  display: block;
  font-size: 15px;
  margin-bottom: 7px;
}

form input,
form select {
  height: 45px;
  padding: 10px;
  width: 100%;
  font-size: 15px;
  outline: none;
  background: #fff;
  border-radius: 3px;
  border: 1px solid #bfbfbf;
}

form input:focus,
form select:focus {
  border-color: #9a9a9a;
}

form input.error,
form select.error {
  border-color: #f91919;
  background: #f9f0f1;
}

form small {
  font-size: 14px;
  margin-top: 5px;
  display: block;
  color: #f91919;
}

form .rpswd i {
  position: absolute;
  right: 0px;
  height: 45px;
  top: 28px;
  font-size: 13px;
  line-height: 45px;
  width: 45px;
  cursor: pointer;
  color: #939393;
  text-align: center;
}

.submit-btn {
  margin-top: 30px;
}

.submit-btn input {
  color: white;
  border: none;
  height: auto;
  font-size: 16px;
  padding: 13px 0;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 500;
  text-align: center;
  background: #3399ff;
  transition: 0.2s ease;
}

.submit-btn input:hover {
  background: #3399ff;
}     
   </style>
  </head>
  <body>
  <form method="POST" action="regprocess.php">
      <h2>Faculty Details</h2>
      <div class="form-group fname">
        <label for="fname">Full name</label>
        <input type="text" id="fname" placeholder="Enter your full name">
      </div>
      <div class="form-group fgender">
        <label for="rgender">Gender</label>
        <select id="rgender">
          <option value="" selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group fqualification">
        <label for="rmail">Qualification</label>
        <input type="text" id="fqualification" placeholder="Enter your qualification">
      </div>
      <div class="form-group faddress">
        <label for="rmail">Address</label>
        <input type="text" id="faddress" placeholder="Enter your address">
      </div>
      <div class="form-group fdoj">
        <label for="fdoj">Date of join</label>
        <input type="date" id="fdoj" placeholder="Select date">
      </div>
      <div class="form-group fmail">
        <label for="fmail">Email Address</label>
        <input type="text" id="fmail" placeholder="Enter your email address">
      </div>
      <div class="form-group fage">
        <label for="fage">Password</label>
        <input type="text" id="fage" placeholder="Enter your age">
      </div>
      <div class="form-group fcontact">
        <label for="fcontact">Password</label>
        <input type="text" id="fcontact" placeholder="Enter contact number">
      </div>
      
      
      <div class="form-group submit-btn">
        <input type="submit" value="Submit">
      </div>
    </form>

    <script>
      


// Selecting form and input elements
const form = document.querySelector("form");
//const passwordInput = document.getElementById("rpswd");
//const passToggleBtn = document.getElementById("pass-toggle-btn");

// Function to display error messages
const showError = (field, errorText) => {
    field.classList.add("error");
    const errorElement = document.createElement("small");
    errorElement.classList.add("error-text");
    errorElement.innerText = errorText;
    field.closest(".form-group").appendChild(errorElement);
}

// Function to handle form submission
const handleFormData = (e) => {
    e.preventDefault();

    // Retrieving input elements
    const fullnameInput = document.getElementById("fname");
    const emailInput = document.getElementById("rmail");
    const dateInput = document.getElementById("rdob");
    const genderInput = document.getElementById("rgender");

    // Getting trimmed values from input fields
    const fullname = fullnameInput.value.trim();
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    const date = dateInput.value;
    const gender = genderInput.value;

    // Regular expression pattern for email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    // Clearing previous error messages
    document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
    document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

    // Performing validation checks
    if (fullname === "") {
        showError(fullnameInput, "Enter your full name");
    }
    if (!emailPattern.test(email)) {
        showError(emailInput, "Enter a valid email address");
    }
    if (password === "") {
        showError(passwordInput, "Enter your password");
    }
    if (date === "") {
        showError(dateInput, "Select your date of birth");
    }
    if (gender === "") {
        showError(genderInput, "Select your gender");
    }

    // Checking for any remaining errors before form submission
    const errorInputs = document.querySelectorAll(".form-group .error");
    if (errorInputs.length > 0) return;

    // Submitting the form
    form.submit();
}

// Toggling password visibility
passToggleBtn.addEventListener('click', () => {
    passToggleBtn.className = passwordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
});

// Handling form submission event
form.addEventListener("submit", handleFormData);
    </script>
  </body>
</html>




