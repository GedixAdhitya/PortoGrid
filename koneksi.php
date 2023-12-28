<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "portogrid";

    $con = mysqli_connect($server,$user,$password,$database);

    if (!$con){
        die("Koneksi database gagal: ".mysqli_connect_error());
    }

?>