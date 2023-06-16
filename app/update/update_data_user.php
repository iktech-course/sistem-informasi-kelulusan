<?php
include('../../conf/config.php');

$id             = $_GET['id'];
$nama           = $_GET['nama'];
$username       = $_GET['username'];
$password       = $_GET['password'];
$level          = $_GET['level'];
$id_sekolah        = $_GET['id_sekolah'];

$query = mysqli_query($koneksi,"UPDATE tb_user SET nama='$nama',username='$username',password='$password',level='$level',
id_sekolah='$id_sekolah' WHERE id='$id'");

header('location: ../index.php?page=data-user');
?>