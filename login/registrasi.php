<?php
require 'functions.php';

if( isset($_POST["register"])){ 
    if(registrasi($_POST) > 0){
        echo "<script>
            alert('user baru berhasil ditambahkan')
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" >
</head>
<body>
    <div class="container">
    <form action="" method="post" class="signup-login">
    <h1 class="judul">Sign Up</h1><br>
        <div class="input-group">
            <input type="text" placeholder="Fullname" name="fullname" id="fullname" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Username"  name="username" id="username" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" id="password" required>
        </div>    
        <div class="input-group">
            <input type="password" placeholder="Konfirmasi Password" name="password2" id="password2" required>
        </div>    
        <div class="input-group">
            <input type="text" placeholder="Address" name="address" id="address" required> 
        </div>        
        <div class="input-group">
            <input type="text" placeholder="Phone Number" name="phonenumber" id="phonenumber" required>
        </div>    
        <div class="input-group">
            <input type="number" placeholder="Age" name="age" id="age" required>
        </div>    
        <div class="input-group">
            <input type="date" placeholder="Birth Date" name="birthdate" id="birthdate" required>
        </div>        
        <div class="input-group">
            <button type="submit" name="register" class="btn">Sign Up</button>
        </div>    
        <p class="login-register-text">Have Account ? <a href="login.php">Log In</a> </p>
    </form>
    </div>
    <footer class="footer-distributed">
            <div class="footer-right">
                <a href="https://instagram.com/feizazharfan"><i class="uil uil-instagram"></i></a>
                <a href="https://twitter.com/pe_peja"><i class="uil uil-twitter"></i></a>
                <a href="https://www.linkedin.com/in/muhammad-feiza-zharfan-p-329898218"><i class="uil uil-linkedin"></i></a>	
                <a href="https://github.com/fzmaker"><i class="uil uil-github"></i></a>
            </div>
        
            <div class="footer-left">
                <p class="footer-links">
                    <a class="link-1" href="index.html">Home</a>
                    <a href="login.php">Login</a>
                    <a href="#">About</a>
                    <a href="course.html">Course</a>
                </p>
        
                <p>Codingku &copy; 2022</p>
            </div>
          </footer>
</body>
</html>