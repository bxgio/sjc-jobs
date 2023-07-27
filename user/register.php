
<?php
session_start();  
include('alert.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Registration</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-box">
          <h2>New Registration</h2>
          <hr>
          <form action="reg.php" method="post" id="login-form">
            <div class="form-group">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user fa-lg"></i></span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" required>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope fa-lg"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-lock fa-lg"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                <div class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('password')">
                    <i id="password-toggle-icon" class="fas fa-eye"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="cpassword">Confirm Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-lock fa-lg"></i></span>
                </div>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter your password" required>
                <div class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('cpassword')">
                    <i id="cpassword-toggle-icon" class="fas fa-eye"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
            <div class="error-message" id="error-message"></div>
            <br>
            <p>Already Registered!!  <a href="login.php">log in..</a></p>
            
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function togglePasswordVisibility(fieldId) {
      const passwordField = document.getElementById(fieldId);
      const passwordToggleIcon = document.getElementById(`${fieldId}-toggle-icon`);

      if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordToggleIcon.classList.remove("fa-eye");
        passwordToggleIcon.classList.add("fa-eye-slash");
      } else {
        passwordField.type = "password";
        passwordToggleIcon.classList.remove("fa-eye-slash");
        passwordToggleIcon.classList.add("fa-eye");
      }
    }

    const loginForm = document.getElementById("login-form");
    const errorMessage = document.getElementById("error-message");

    loginForm.addEventListener("submit", (event) => {
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("cpassword").value;

      if (password !== confirmPassword) {
        event.preventDefault();
        errorMessage.textContent = "Passwords do not match.";
      }
    });
  </script>
</body>

</html>
