<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "portogrid";

$con = mysqli_connect($server, $user, $password, $database);


function tambah($post)
{
    global $con;
    $judul = mysqli_real_escape_string($con, $_POST['judul']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    $sql = "INSERT INTO tb_portofolio (photo, judul , photoaktif) VALUES ('" . basename($_FILES["photo"]["name"]) . "', '" . $judul . "' , ' " . $status . "')";

    if (mysqli_query($con, $sql)) {
        header('Location: photo.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
