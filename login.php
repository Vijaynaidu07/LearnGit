<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@800&display=swap" rel="stylesheet">
  <title>Animated Login Page</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">

<body onmousemove="getCursorPosition(event)">
  <div class="wrapper">
    <main>
      <section>
        <div class="face">
          <img src="https://assets.codepen.io/9277864/PF.png" alt="Face" widht="250" height="250" />
          <div class="eye-cover1">
            <div id="eyes1"></div>
          </div>

          <div class="eye-cover2">
            <div id="eyes2"></div>
          </div>
        </div>
        <div class="login-container">
          <div class="social-login">
            <div class="logo">
              <img src="https://assets.codepen.io/9277864/robot-face-3.svg" alt="Gravam Company Logo" width="100" height="100" />
              <p>TOURS AND TRAVELERS</p>
            </div>
            <p>Login using social media to get quick access</p>
            <div class="social-grp">
              <div class="btn"><a href="#"><img src="https://assets.codepen.io/9277864/social-media-twitter.svg" alt="" width="32" height="32" /><span>Twitter</span></a></div>
              <div class="btn"><a href="#"><img src="https://assets.codepen.io/9277864/social-media-facebook.svg" alt="" width="32" height="32" /><span>Facebook</span></a></div>
              <div class="btn"><a href="#"><img src="https://assets.codepen.io/9277864/social-media-google.svg" alt="" width="32" height="32" /><span>Google</span></a></div>
            </div>
          </div>
          <div class="email-login">
            <div class="login-h-container">
              <h1>Login to your account</h1>
              <p>Don’t have an account? <a href="#">Sign up Free!</a></p>
            </div>
            <form method "post" action="./mini project/trip.html" >
              <label for="username">
                <input id="username" name="username" type="username" placeholder="" autocomplete="off">
                <span id="span-username">username</span>
              </label>
              <label for="password">
                <input id="password" name="password" type="password" placeholder="">
                <span id="span-password">Password</span>
              </label>
              <div class="recovery">
                <div>
                  <input type="checkbox" id="remember" name="remember">
                  <label for="remember">Remember me</label>
                </div>
                <a href="">Forgot Password?</a>
              </div>
              <input type="submit" value="Login with username">
            </form>
          </div>
        </div>
      </section>
      <div class="vector-1"></div>
      <div class="vector-2"></div>
      <div class="vector-3"></div>
    </main>
    <div class="codepen-footer">
      <small>Created by <a href="https://twitter.com/intent/follow?screen_name=TanGravam" target="_top">@vijay</a></small>
      <small><a href="https://www.gravam.com/" target="_top">Go to My Website</a></small>
      <script src="login.js"></script>
    </div>
  </div>
</body>
</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real application, you would validate the username and password against a database.

    // For this example, let's assume a hardcoded username and password.
    $validUsername = "your_username";
    $validPassword = "your_password";

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["username"] = $username; // Store the username in a session variable.
        header("Location: welcome.php"); // Redirect to a welcome page.
        exit();
    } else {
        $errorMessage = "Invalid username or password.";
    }
}
?>