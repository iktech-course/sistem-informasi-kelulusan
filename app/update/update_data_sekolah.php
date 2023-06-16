<?php
include('../../conf/config.php');
$id_sekolah     = $_GET['id_sekolah'];
$nama_sekolah   = $_GET['nama_sekolah'];

$query = mysqli_query($koneksi,"UPDATE tb_sekolah SET nama_sekolah='$nama_sekolah' WHERE id_sekolah='$id_sekolah'");

header('location: ../index.php?page=data-sekolah');
?>