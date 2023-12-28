<?php 
include '../koneksi.php';
$email = mysqli_real_escape_string ($con, $_POST['email']);
$fullname = mysqli_real_escape_string ($con, $_POST['name']);
$query = mysqli_real_escape_string ($con, $_POST['query']);

mysqli_query($con,"INSERT INTO tb_feedback (id,name,email,query) VALUES('','$fullname','$email','$query')");

header("location:../index.php");
?>