<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="register-container">
    <form class="register-form">
      <div class="form-header">
        <h3>REGISTER</h3>
      </div>
      <div class="form-content">
        <div class="name-wrapper">
          <div class="input-wrapper">
            <input type="text" name="firstname" placeholder="Firstname">
          </div>
          <div class="input-wrapper">
            <input type="text" name="lastname" placeholder="Lastname">
          </div>
        </div>
        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Email">
        </div>
        <div class="input-wrapper">
          <input type="password" name="password" placeholder="Password">
        </div>
        <div class="input-wrapper">
          <input type="password" name="confirmPassword" placeholder="Confirm password">
        </div>
      </div>
      <div class="form-footer">
        <a href="login.php">Already have an account? Login</a>
        <button type="submit">Register</button>
      </div>
    </form>
  </section>
</body>

</html>