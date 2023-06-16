<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="update/update_data_user.php">
                  <div class="row">
                  <input type="text" class="form-control" placeholder="nama" name="id" value="<?php echo $view['id'];?>" hidden>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $view['nama'];?>">
                        
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $view['username'];?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" value="<?php echo $view['password'];?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Level</label>
                        <Select class="custom-select" name="level">
                          <option selected>Pilih Level</option>
                          <option value="admin" <?php if($view['level'] == 'admin') { echo("selected"); } ?>>Admin</option>
                          <option value="admin_sekolah" <?php if($view['level'] == 'admin_sekolah') { echo("selected"); } ?>>Admin Sekolah</option>
                        </Select>
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

                  </div>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>