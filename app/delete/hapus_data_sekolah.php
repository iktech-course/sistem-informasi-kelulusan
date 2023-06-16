<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_sekolah WHERE id_sekolah='$id'");

header('location: ../index.php?page=data-sekolah');
?>