<?php
if (isset($_POST['submit'])) {
    include '../koneksi.php';
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $judul = mysqli_real_escape_string($con, $_POST['judul']);
    $status = ($_POST['status']);
    if ($_FILES['photo']['tmp_name'] != '') {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
        $sql = "UPDATE tb_portofolio SET photo='" . basename($_FILES["photo"]["name"]) . "' , judul='$judul', photoaktif='$status' WHERE id='$id'";
        echo "<script> alert('test1')</script>";
    } else{
        // If the file input is empty, update only the 'judul' column
        $sql = "UPDATE tb_portofolio SET judul='$judul', photoaktif='$status' WHERE id='$id'";
        echo "<script> alert('test2')</script>";
    } 

    if (mysqli_query($con, $sql)) {
        header('Location: photo.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
