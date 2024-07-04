<?php
require "koneksi.php";
$username = $_POST["username"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_users (username, email, alamat, password)
VALUES ('$username','$email','$alamat','$password')";

if (mysqli_query($conn,$query_sql)){
    header("Location: login.html");
} else {
    echo "pendaftaran gagal :" . mysqli_error($conn);
}
