<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];
$id_sekolah = $_GET['id_sekolah'];

$query = mysqli_query($koneksi,"INSERT INTO tb_user (nama,username,password,level,id_sekolah) 
VALUES ('$nama','$username','$password','$level','$id_sekolah')");

header('location: ../index.php?page=data-user');
?>