<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_sekolah WHERE id_sekolah='$id'");
$view   = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="update/update_data_sekolah.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="hidden" name="id_sekolah" value="<?= $view['id_sekolah'] ?>">
                      <div class="form-group">
                        <label>Sekolah</label>
                        <input type="text" class="form-control" placeholder="nama sekolah" name="nama_sekolah" value="<?php echo $view['nama_sekolah'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <button type="submit" class="ml-auto btn btn-info">Simpan</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>