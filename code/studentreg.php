<!DOCTYPE html>

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
  <form method="POST" action="">
      <h2>Student Details</h2>
      <div class="form-group sname">
        <label for="sname">Student Name</label>
        <input type="text" id="sname" placeholder="Enter your full name">
      </div>
      <div class="form-group sdob">
        <label for="sdob">Birth Date</label>
        <input type="date" id="sdob" placeholder="Select your date">
      </div>
      <div class="form-group sgender">
        <label for="sgender">Gender</label>
        <select id="sgender">
          <option value="" selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group saddress">
        <label for="sadress">Address</label>
        <input type="text" id="saddress" placeholder="Enter your address">
      </div>
      </div>
      <div class="form-group scenter">
        <label for="scenter">Email</label>
        <input type="text" id="scenter" placeholder="Enter your Email">
        
      </div>

      
      <div class="form-group sguardian">
        <label for="sguardian">Guardian</label>
        <input type="text" id="sguardian" placeholder="Enter your guardian">
        
      </div>
      <div class="form-group scontact">
        <label for="scontact">Contact</label>
        <input type="text" id="scontact" placeholder="Enter your contact">
        
     
      
      
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
    const fullnameInput = document.getElementById("sname");
    const dateInput = document.getElementById("sdob");
    const genderInput = document.getElementById("sgender");
    const addressInput = document.getElementById("saddress");
    const centerInput = document.getElementById("scenter");
    const guardianInput = document.getElementById("sguardian");
    const contactInput = document.getElementById("scontact");

    // Getting trimmed values from input fields
    const fullname = fullnameInput.value.trim();
    const date = dateInput.value.trim();
    const gender = genderInput.value.trim();
    const address = addressInput.value;
    const center =centerInput.value;
    const guardian =guardianInput.value;
    const contact =contactInput.value;

    // Regular expression pattern for email validation
    //const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    // Clearing previous error messages
    document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
    document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

    // Performing validation checks
    if (fullname === "") {
        showError(fullnameInput, "Enter your full name");
    }
    if (date === "") {
        showError(dateInput, "Select your date of birth");
    }
    if (gender === "") {
        showError(genderInput, "Select your gender");
    }
    if (address === "") {
        showError(addressInput, "Enter your address");
    }
    if (center === "") {
        showError(centerInput, "Enter center code");
    }
    if (guardian === "") {
        showError(guardianInput, "Enter your guardian");
    }
    if (contact === "") {
        showError(contactInput, "Enter your contact");
    }

    // Checking for any remaining errors before form submission
    const errorInputs = document.querySelectorAll(".form-group .error");
    if (errorInputs.length > 0) return;

    // Submitting the form
    form.submit();
}

// Toggling password visibility
//passToggleBtn.addEventListener('click', () => {
   // passToggleBtn.className = passwordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
    //passwordInput.type = passwordInput.type === "password" ? "text" : "password";
});

// Handling form submission event
form.addEventListener("submit", handleFormData);
    </script>
  </body>
</html>




