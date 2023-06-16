<?php
include('conf/config.php');
$nisn    = $_GET['nisn'];
$query  = mysqli_query($koneksi,"SELECT tb_siswa.id,tb_siswa.nama,tb_siswa.nisn,tb_siswa.tanggal_lahir,tb_sekolah.nama_sekolah, tb_siswa.nilai, tb_siswa.lulus_tidak FROM tb_siswa LEFT JOIN tb_sekolah ON tb_siswa.id_sekolah = tb_sekolah.id_sekolah WHERE tb_siswa.nisn = '$nisn'");
$view   = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Website Cek Kelulusan SMP</title>
  <style>
    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <!-- <a class="navbar-brand" href="#">Logo</a> -->
    <img src="app/gambar/disdik.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
  </nav>

  <div class="form-container">
    <form action="siswa-data-hasil.php" method="get">
    <div>
        <div class="h2 text-center">Hasil Kelulusan</div>
        <hr>
        <table class="table table-striped"> 
            <tr>
                <td>NISN</td>
                <td><?php echo($view['nisn'])?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo($view['nama'])?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo($view['tanggal_lahir'])?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td><?php echo($view['nama_sekolah'])?></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><?php echo($view['nilai'])?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                    <?php
                        if($view['lulus_tidak'] == 'LULUS')
                        {
                     ?>
                        <td>
                            <p class="font-weight-bold text-success">LULUS</p>
                        </td>
                     <?php
                        } 
                        else if($view['lulus_tidak'] == 'TIDAK')
                        {
                    ?>
                        <td><p class="font-weight-bold text-danger">TIDAK LULUS</p></td>
                    <?php
                     }
                    ?>
            </tr>
        </table>
      </div>
    <hr>
      <a href="siswa-cari-data.php" class="btn btn-danger">Kembali Ke Halaman Beranda</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
