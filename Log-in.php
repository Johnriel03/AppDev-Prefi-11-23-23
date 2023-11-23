<?php
session_start();
if (isset($_SESSION["form"])) {
   header("Location: Home-page.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel = "icon" type = "image/png" href = "ARCHIV3D.png"/>
    <link rel="stylesheet" href="main.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ARCHIV3D</title>
    <script defer src="validation.js"></script>

  </head>
  <body>
    <div id="error"></div>
    <div class="background">
      <div class="navbar">
        <div class="navbar-logo">
          <img class="logo" src="ARCHIV3D black.png" />
        </div>
        <ul class="navbar-links" id="navbar-links">
          <li><a class="navbar-link" href="#">Home</a></li>
          <li><a class="navbar-link" href="#">Review</a></li>
          <li><a class="navbar-link" href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="register">

      <?php
        if (isset($_POST["login"])) {
           $usrname = $_POST["username"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM signup WHERE username = '$usrname'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["signup"] = "yes";
                    header("Location: Home-page.php");
                    die();
                }else{
                  echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Username does not match</div>";
            }
        }
        ?>

        <form action="Log-in.php" method="post">
        <h1>Log in</h1>
        <div class="form-element">
          <label>Username</label>
          <input type="text" id="Username" name="username" required/>
        </div>
        <div class="form-element">
          <label>Password</label>
          <input type="password" id="Password" name="password" required/>
        </div>
        <div class="form-element">
          <a href="Home-page.php">
            <button>Log in</button>
          </a>
        </div>
        <div class="form-element">
          <p>
            Don't have an account? <a class="Signup" href="Signup.php">Sign up</a>
          </p>
        </div>
      </form>
      </div>
      <img class="bgwave" src="waves.png" />
    </div>
  </body>
</html>
