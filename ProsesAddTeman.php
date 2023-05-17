<?php
include "config.php";

$no    = $_POST['no'];
$nm    = $_POST['nama'];
$jnkl = $_POST['jk'];
$usia  = $_POST['usia'];

    $query = "INSERT into teman values('$no', '$nm', '$jnkl', '$usia')";
    $exc = mysqli_query($conn, $query);

    if($exc)
    {
        //echo"DATA Sukses";
        header("location:index.php");
    }else
    {
        echo "Data Gagal dimasukkan";
    }
?>