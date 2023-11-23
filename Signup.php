<?php
session_start();
if (isset($_SESSION["form"])) {
   header("Location: Log-in.php");
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
        if (isset($_POST["sign-up"])) {
           $firstName = $_POST["fname"];
           $lastname = $_POST['lname'];
           $usrname = $_POST['username'];
           $email = $_POST['email'];
           $pass = $_POST['password'];
           $cpass = $_POST['cpassword'];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($firstName) OR empty($lastName) OR empty($usrName) OR empty($email) OR empty($password) OR empty($cpass)) 
           {
            array_push($errors,"Please fillout all the fields.");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid email.");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must contain at least 8 characters long.");
           }
           if ($password!==$cpass) {
            array_push($errors,"Password not match!");
           }
           require_once "database.php";
           $sql = "SELECT * FROM signup WHERE username = '$usrname'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Username already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO form (fname, lname, username, email, password) VALUES ( ?, ?, ?, ?, ?)";
            $st = mysqli_stmt_init($conn);
            $preparest = mysqli_stmt_prepare($st,$sql);
            if ($preparest) {
                mysqli_stmt_bind_param($st,"sssss",$firstName, $lastName, $usrName, $email, $passwordHash);
                mysqli_stmt_execute($st);
                echo "<div class='alert alert-success'>Registered Success.</div>";
            }else{
                die("Register failed. Try again.");
            }
           }
        }
        ?>
      <form action="Log-in.php" method="post">
        <h1>Create New Account</h1>
        <div class="form-element">
          <label>First Name</label>
          <input type="text" id="First Name" name="fname" required/>
        </div>
        <div class="form-element">
          <label>Last name</label>
          <input type="text" id="Last Name" name="lname" required/>
        </div>
        <div class="form-element">
          <label>Username</label>
          <input type="text" id="Username" name="username" required/>
        </div>
        <div class="form-element">
          <label>Email</label>
          <input type="text" id="Email" name="email" required/>
        </div>
        <div class="form-element">
          <label>Password</label>
          <input type="password" id="Password" name="password" required/>
        </div>
        <div class="form-element">
          <label>Confirm Password</label>
          <input type="password" id="Confirm Password" name="cpassword" required/>
        </div>
        <div class="form-element">
          <a href="Home-page.php">
            <button type="sign-up">Sign Up</button>
          </a>
        </div>
        <div class="form-element">
          <p>
            Already Registered? <a class="Login" href="Log-in.php">Login</a>
          </p>
        </div>
        </form>
      </div>
      <img class="bgwave" src="waves.png" />
    </div>
  </body>
</html>
