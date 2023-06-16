<?php
session_start();
include ('config.php');
$username =$_POST['username'];
$password =$_POST['password'];

$query = mysqli_query($koneksi,"SELECT tb_user.id,tb_user.nama,tb_user.level, tb_sekolah.id_sekolah,tb_sekolah.nama_sekolah FROM tb_user LEFT JOIN tb_sekolah ON tb_user.id_sekolah = tb_sekolah.id_sekolah WHERE username= '$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
    header('location:../app');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
    $_SESSION['id_sekolah'] = $user['id_sekolah'];
    $_SESSION['nama_sekolah'] = $user['nama_sekolah'];
}
else if($username == '' || $password ==''){
    header('location:../index.php?error=2');
}
else{
    header('location:../index.php?error=1');
}

?>