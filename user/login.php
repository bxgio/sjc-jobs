<?php
session_start();
include('alert.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body style="background:none">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-box">
          <h2>User login</h2>
          <hr>
          <form action="user_index.php" method="post" id="login-form">
            <div class="form-group">
              <label for="username">Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope fa-lg"></i></span> <!-- Icon for email field -->
                </div>
                <input type="text" class="form-control" id="username" name="email" placeholder="Enter your Email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-lock fa-lg"></i></span> <!-- Icon for password field -->
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                <div class="input-group-append">
                </div>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            <div class="error-message" id="error-message"></div>
            <br>
            <p>Not registered? <a href="register.php">Register Now..</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>  
  </script>
</body>
</html>
