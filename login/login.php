<?php
require 'functions.php';

if( isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' " );

    //cek username
    if( mysqli_num_rows($result) === 1){
        
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("location: home.html");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelog.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">	
  </head>

  <body>
    <div class="center">
      <form action="" method="post" class="signup-login">
	      <h1>Login</h1>
        <div class="textdalem">
          <input type="text" maxlength="15" minlength="3" name="username" id="username" required>
          <label for="username"> <i class="uil uil-user"></i> Username </label>
        </div>

        <div class="textdalem">
          <input type="password" maxlength="20" minlength="8" name="password" id="password" required>
          <label for="password"> <i class="uil uil-lock icon"></i> Password </label>
        </div>

		    <!-- kalau username atau password salah -->
		    <?php if( isset($error)) : ?>
        <p style="color: red; font-style: intalic;">Username Atau Password Salah</p>
        <?php endif; ?>

		    <center>
		    <div class="input-group">
        <button type="sumbit" name="login" class="btn">Login</button>
        </div>
		    </center>

        <div class="signup_link">
          No Account? <a href="registrasi.php">Sign Up</a>
        </div>
      </form>
	</div>
  
</body>
</html>