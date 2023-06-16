
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Sekolah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SElECT tb_user.id,tb_user.nama,tb_user.username,tb_user.password,tb_user.level,tb_sekolah.nama_sekolah FROM tb_user LEFT JOIN tb_sekolah ON tb_user.id_sekolah = tb_sekolah.id_sekolah");
                    while($user = mysqli_fetch_array($query)){
                        $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $user ['nama'];?></td>
                    <td><?php echo $user ['username'];?></td>
                    <td><?php echo $user ['level'];?></td>
                    <td><?php echo $user ['nama_sekolah'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $user['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data-user&& id=<?php echo $user ['id'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                    
                  </tr>
                  <?php }?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data_user.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col-12 mb-3">
                  <label for="" class="form-label">Nama Lengkap User</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col-12 mb-3">
                <label for="" class="form-label">Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="col-12 mb-3">
                <label for="" class="form-label">Level</label>
                  <Select class="custom-select" name="level">
                    <option selected>Pilih Level</option>
                    <option value="admin">Admin</option>
                    <option value="admin_sekolah">Admin Sekolah</option>
                  </Select>
                </div>
                <div class="col-12 mb-3">
                <label for="" class="form-label">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="col-12 mb-3">
                <label for="" class="form-label">Nama Sekolah</label>
                  <select class="custom-select" id="inputGroupSelect01" name= 'id_sekolah'>
                  <option selected>Pilihan...</option>
                    <?php
                      $query = mysqli_query($koneksi,"SELECT * FROM tb_sekolah");
                      while($sekolah = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?= $sekolah['id_sekolah'] ?>"><?= $sekolah['nama_sekolah'] ?></option>
                    <?php } ?>
                  </select>
              </div>
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <script>
        function hapus_data(data_id){
          // alert('ok');
         // window.location=("delete/hapus_data.php?id="+data_id);
         Swal.fire({
          title: 'Apakah Datanya akan dihapus',
          //showDenyButton: false,
          showCancelButton: true,
          confirmButtonText: 'Hapus Data',
          confirmButtonColor: "#CD5C5C",
          //denyButtonText: 'don't save',
          }).then((result) => {
            /*Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location=("delete/hapus_data_user.php?id="+data_id)
            }
          })
        }
      </script>