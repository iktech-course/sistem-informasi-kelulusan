<?php
session_start();
include('../../conf/config.php');
$nama = $_GET['nama'];
$nisn = $_GET['nisn'];
$tanggal_lahir = $_GET['tanggal_lahir'];
$id_sekolah = $_GET['id_sekolah'];
$nilai = $_GET['nilai'];
$lulus_tidak = $_GET['lulus_tidak'];

$query = mysqli_query($koneksi,"INSERT INTO tb_siswa (id,nama,nisn,tanggal_lahir,id_sekolah,nilai,lulus_tidak) 
VALUES ('','$nama','$nisn','$tanggal_lahir','$id_sekolah','$nilai','$lulus_tidak')");

if($_SESSION['level'] == "admin")
{
    header('location: ../index.php?page=data-siswa');
}
else if($_SESSION['level'] == "admin_sekolah")
{
    header('location: ../index.php?page=data-siswa-admin-sekolah');
}
?>