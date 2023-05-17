<?php
include "config.php";

$id = $_GET['no'];

$query = "delete from teman where id='$id'";
$exc = mysqli_query($conn, $query);

if($exc)
{
    header("location:index.php");
}else
{
    echo "Data Gagal Dihapus";
}

?>