<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  <div class="image">
    <img src="gambar/user2.png" class="img-circle elevation-2" alt="User Image">
  </div>
  <div class="info">
    <a href="#" class="d-block"><?php echo $_SESSION['nama'].' | ' ?> 
      <?php 
        if($_SESSION['level'] == "admin") {
          echo "Administrator";
        }
        else if ($_SESSION['level'] == "admin_sekolah")
        {
          echo "Admin Sekolah";
        }
        else if ($_SESSION['user'] == "user")
        {
          echo "User";
        }
      ?> 
    </a>
    <p class="text-white">
      <?php 
      if($_SESSION['level'] == "admin") {
        echo "Dinas Pendidikan";
      }
      else {
        echo $_SESSION['nama_sekolah'];
      }
      ?>
    </p>
  </div>
</div>

<!-- SidebarSearch Form -->
<div class="form-inline">
  <div class="input-group" data-widget="sidebar-search">
    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-sidebar">
        <i class="fas fa-search fa-fw"></i>
      </button>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<?php 
if($_SESSION['level']=='admin'){
include('menu/admin.php');
}
else if($_SESSION['level']=='admin_sekolah'){
  include('menu/admin_sekolah.php');
  }
else{
  include('menu/user.php');
}
?>
<!-- /.sidebar-menu -->
</div>