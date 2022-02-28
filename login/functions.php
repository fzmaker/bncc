<?php

$conn = mysqli_connect("localhost", "root", "", "bncc");

function registrasi($data){
    global $conn;
    $fullname = $data["fullname"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $address = $data["address"];
    $phonenumber = $data["phonenumber"];
    $age = $data["age"];
    $birthdate = $data["birthdate"];

    //cek username sudah ada atau belum
   $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('username yang dipilih sudah terdaftar')
        </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2){
        echo "<script>
            alert('password tidak sesuai!');
        </script>";
        return false;
    } 

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$fullname', '$username', '$password', '$address', '$phonenumber', '$age', '$birthdate')");

    return mysqli_affected_rows($conn);
}

?>