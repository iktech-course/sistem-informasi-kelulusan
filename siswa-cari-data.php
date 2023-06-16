<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Cek Kelulusan Siswa</title>
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
    <div class="text-center">
        <p class="font-weight-bold">
        Selamat datang di Website Kelulusan SMP Se Kabupaten Dharmasraya, Silahkan Masukkan NISN Anda untuk melakukan Cek Nilai
        </p>
    </div>
    <hr>
      <div class="form-group">
        <label for="email"> NISN</label>
        <input type="text" class="form-control" name="nisn" placeholder="Masukkan NISN Anda">
      </div>
      <button type="submit" class="btn btn-success">Cari Data Anda</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
