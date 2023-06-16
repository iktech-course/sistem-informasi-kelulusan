<?php
include('../../conf/config.php');
session_start();

$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_siswa WHERE id='$id'");

header('location: ../index.php?page=data-siswa');

if($_SESSION['level'] == "admin")
{
    header('location: ../index.php?page=data-siswa');
}
else if($_SESSION['level'] == "admin_sekolah")
{
    header('location: ../index.php?page=data-siswa-admin-sekolah');
}
?>