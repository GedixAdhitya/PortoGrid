<?php

require '../koneksi.php';
$hapus = 'C:/xampp/htdocs/PortoGrid/uploads/' . $_GET['photo'];
if(isset($_GET['id'])){
    $sql = "DELETE FROM tb_portofolio WHERE id=".$_GET['id'];
unlink($hapus);
    if (mysqli_query($con, $sql)) {
        header('Location: photo.php');
    } else {
        header('Location: photo.php');
    }
}