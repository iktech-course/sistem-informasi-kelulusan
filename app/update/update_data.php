<?php
include('../../conf/config.php');
session_start();

$id             = $_GET['id'];
$nama           = $_GET['nama'];
$nisn           = $_GET['nisn'];
$tanggal_lahir  = $_GET['tanggal_lahir'];
$id_sekolah        = $_GET['id_sekolah'];
$nilai          = $_GET['nilai'];
$lulus_tidak    = $_GET['lulus_tidak'];

$query = mysqli_query($koneksi,"UPDATE tb_siswa SET nama='$nama',nisn='$nisn',tanggal_lahir='$tanggal_lahir',
id_sekolah='$id_sekolah',nilai='',nilai='$nilai',lulus_tidak='$lulus_tidak' WHERE id='$id'");

if($_SESSION['level'] == 'admin')
{
    header('location: ../index.php?page=data-siswa');
}
else if($_SESSION['level'] == 'admin_sekolah'){
    header('location: ../index.php?page=data-siswa-admin-sekolah');
}
?>