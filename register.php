<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .registration-form {
      max-width: 400px;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #fff;
    }

    .registration-form h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }

    .form-group input:focus {
      border-color: #007bff;
    }

    .btn-register {
      background-color: #28a745;
      border: none;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
    }

    .btn-register:hover {
      background-color: #218838;
    }

    .error-message {
      color: #dc3545;
      font-size: 12px;
      margin-top: 5px;
    }

    /* Common CSS */
    .text-center {
      text-align: center;
    }

    .btn-toggle {
      color: #007bff;
      text-decoration: underline;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="registration-form">
    <h2>Registration</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <?php echo $usernameError; ?>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <?php echo $emailError; ?>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <?php echo $passwordError; ?>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm_password" required>
        <?php echo $confirmPasswordError; ?>
      </div>
      <button type="submit" class="btn btn-register" name="register">Register</button>
    </form>
    <p class="mt-3 text-center">Already have an account? <a href="login.html">Login here</a></p>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
