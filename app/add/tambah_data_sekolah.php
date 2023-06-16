<?php
include('../../conf/config.php');
$nama_sekolah = $_GET['nama_sekolah'];

$query = mysqli_query($koneksi,"INSERT INTO tb_sekolah (nama_sekolah) VALUES ('$nama_sekolah')");

header('location: ../index.php?page=data-sekolah');
?>