<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="update/update_data.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="nama" name="id" value="<?php echo $view['id'];?>" hidden>
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $view['nama'];?>">
                        
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nisn</label>
                        <input type="text" class="form-control" placeholder="nisn" name="nisn" value="<?php echo $view['nisn'];?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="tanggal_lahir" name="tanggal_lahir" value="<?php echo $view['tanggal_lahir'];?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Sekolah</label>
                        <select class="custom-select" id="inputGroupSelect01" name= 'id_sekolah'>
                            <option selected>Pilihan...</option>
                            <?php
                              $query = mysqli_query($koneksi,"SELECT * FROM tb_sekolah");
                              while($sekolah = mysqli_fetch_array($query)){
                            ?>
                            <option value="<?= $sekolah['id_sekolah'] ?>" <?php if($sekolah['id_sekolah'] == $view['id_sekolah']) { echo("selected"); } ?>><?= $sekolah['nama_sekolah'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control" placeholder="nilai"  name='nilai' value="<?php echo $view['nilai'];?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lulus/Tidak</label>
                        <select class="custom-select" id="inputGroupSelect01" name= 'lulus_tidak'>
                            <option value="<?php echo $view['lulus_tidak'];?>" selected><?php echo $view['lulus_tidak'];?></option>
                            <option value="LULUS">Lulus</option>
                            <option value="TIDAK">Tidak</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>