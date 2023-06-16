<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('location:../index.php?session=expired');
}
include('header.php');?>
<?php include('../conf/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
     <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('dashboard.php');
      }
      else if($_GET['page']=='data-siswa'){
        include('data_siswa.php');
      }
      else if($_GET['page']=='edit-data'){
        include('edit/edit_data.php');
      }
      else if($_GET['page']=='edit-data-sekolah'){
        include('edit/edit_data_sekolah.php');
      }
      else if($_GET['page']=='edit-data-user'){
        include('edit/edit_data_user.php');
      }
      else if($_GET['page']=='visi-misi'){
        include('visi_misi.php');
      }
      else if($_GET['page']=='data-siswa-user'){
        include('data_siswa_user.php');
      }
      else if($_GET['page']=='data-siswa-admin-sekolah'){
        include('data_siswa_admin_sekolah.php');
      }
      else if($_GET['page']=='data-user'){
        include('data_user_admin.php');
      }
      else if($_GET['page']=='data-sekolah'){
        include('data_sekolah.php');
      }
      else{
        include('dashboard.php');
      }
    }
    else{
      include('dashboard.php');
    }?>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
