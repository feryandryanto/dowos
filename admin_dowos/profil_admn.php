<?php session_start();

$username=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>admin DOWOS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/logo.png">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <img src="img/logo.png" 
    style="width: 60px;
          height: 90px;">

    <a class="navbar-brand mr-1" href="index.html">DOLAN WONOSOBO</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div> -->
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="forgot-password.html">lupa Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>
    
<?php

include 'config/koneksi.php';

  $data =mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
  while($tampil =mysqli_fetch_array($data)){
  

?>
    

            <div>
                <legend><p><h3 style="margin-top: 30px; margin-right: 100px; margin-bottom: 15px; margin-left: 100px; border-bottom: 1px solid #f8b600;">AkunKu</h3></p></legend>
            </div>
      <div>
                <table style="margin-left: 100px;">
                  <tbody>
                      <tr>
                          <th class="text-left">Nama</th>
                            <th class="text-left"><em><?php echo $tampil['nama']; ?></em></th>
                        </tr>
            <tr>
                          <th class="text-left">Email</th>
                            <th class="text-left"><em><?php echo $tampil['email']; ?></em></th>
                        </tr>
            <tr>
                          <th class="text-left">Jenis Kelamin</th>
                            <th class="text-left"><em><?php if($tampil['jk']=='L'){
                                echo "Laki-laki"; 
                              }else if($tampil['jk']=='P'){
                                echo "Perempuan";
                              }else{
                                echo "";
                              }?></em></th>
                        </tr>
            <tr>
                          <th class="text-left">Alamat</th>
                            <th class="text-left"><em><?php echo $tampil['alamat']; ?></em></th>
                        </tr>
            <tr>
                          <th class="text-left">No hp/Telepon</th>
                            <th class="text-left"><em><?php echo $tampil['tlp']; ?></em></th>
                        </tr>
                    </tbody>
        </table>

        <a class="primary-btn" style="margin-left: 100px; margin-bottom: 10px;" href="editProfil.php?id=<?php echo $tampil['id'];?>">Edit Profil</a>

 <?php
 } 
  ?>
    <!-- ---------------------------------------- ISI  ------------------------------------- -->


    <!-- ---------------------------------------- ISI  ------------------------------------- -->
    <br />


      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Dowos 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">YAKIN UNTUK KELUAR ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" di bawah ini jika Anda yakin untuk keluar sesi Anda saat ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
