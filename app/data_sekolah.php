
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sekolah</h3>
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
                    <th>Nama Sekolah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"select * from tb_sekolah");
                    while($sekolah = mysqli_fetch_array($query)){
                        $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $sekolah ['nama_sekolah'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $sekolah ['id_sekolah'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data-sekolah&& id=<?php echo $sekolah ['id_sekolah'];?>" class="btn btn-sm btn-success">Edit</a>
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
              <h4 class="modal-title">Input Data Sekolah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data_sekolah.php">
            <div class="modal-body">
            
              <div class="form-row">
              <div class="col-12 mb-3">
                  <label for="" class="form-label">Nama Sekolah</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama_sekolah" required>
                </div>
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
              window.location=("delete/hapus_data_sekolah.php?id="+data_id)
            }
          })
        }
      </script>