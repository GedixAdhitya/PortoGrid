<?php 
session_start();
include '../koneksi.php';

$username = mysqli_real_escape_string ($con,  $_POST['username']);
$password = mysqli_real_escape_string ($con, $_POST['password']);

$query = mysqli_query($con,"select * from tb_login where username='$username' and password='$password'");
$cek = mysqli_num_rows ($query);
if ($cek>0){
    $_SESSION['login'] = $username;
    header("location:dashboard.php");
} else
    echo " <script> alert('Login Gagal');
    windows:location='login.php' </script> ";
?>