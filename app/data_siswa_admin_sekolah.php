
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
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
                    <th>Nisn</th>
                    <th>Tanggal Lahir</th>
                    <th>Sekolah</th>
                    <th>Nilai</th>
                    <th>Lulus/Tidak</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT tb_siswa.id,tb_siswa.nama,tb_siswa.nisn,tb_siswa.tanggal_lahir,tb_sekolah.nama_sekolah, tb_siswa.nilai, tb_siswa.lulus_tidak FROM tb_siswa LEFT JOIN tb_sekolah ON tb_siswa.id_sekolah = tb_sekolah.id_sekolah WHERE tb_sekolah.id_sekolah = ".$_SESSION['id_sekolah']."");
                    while($siswa = mysqli_fetch_array($query)){
                        $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $siswa ['nama'];?></td>
                    <td><?php echo $siswa ['nisn'];?></td>
                    <td><?php echo $siswa ['tanggal_lahir'];?></td>
                    <td><?php echo $siswa ['nama_sekolah'];?></td>
                    <td><?php echo $siswa ['nilai'];?></td>
                    <td><?php echo $siswa ['lulus_tidak'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $siswa ['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&& id=<?php echo $siswa ['id'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                    
                  </tr>
                  <?php }?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Last</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  </tfoot>
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
              <h4 class="modal-title">Input Data Siswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            
              <div class="form-row">
                <input type="hidden" name="id_sekolah" value="<?php echo($_SESSION['id_sekolah']) ?>">
                <div class="col-12 mb-3">
                  <label for="" class="form-label">Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col-12 mb-3">
                  <label for="" class="form-label">NISN</label>
                  <input type="text" class="form-control" placeholder="Nisn" name="nisn" required>
                </div>
                <div class="col-12 mb-3">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
                </div>
                <div class="col-12 mb-3">
                  <label for="" class="form-label">Nilai</label>
                  <input type="text" class="form-control" placeholder="Nilai" name="nilai" required>
                </div>
                <div class="col-12 mb-3">
                  <label for="" class="form-label">Keterangan</label>
                    <select class="custom-select" id="inputGroupSelect01" name= 'lulus_tidak'>
                    <option selected>Pilihan...</option>
                    <option value="LULUS">Lulus</option>
                    <option value="TIDAK">Tidak</option>
                  </select>
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
              window.location=("delete/hapus_data.php?id="+data_id)
            }
          })
        }
      </script>