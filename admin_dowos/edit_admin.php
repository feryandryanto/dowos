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
          <a class="dropdown-item" href="profil_admn.html">Profil</a>
          <a class="dropdown-item" href="forgot-password.html">lupa Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
 
			<form name="editProfil" method="post" action="#">
			<div class="row">
				<div class="span6">
                    <fieldset>
                        <legend class="text-right">Edit</legend>
                        <lable>Nama Lengkap</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="nama"
							 value="<?php echo $tampil['nama'];?>">
                        </div>
						<lable>Username</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="username"
							 value="<?php echo $tampil['username'];?>">
                        </div>
						<lable>Jenis Kelamin</lable>
						<div>
						<?php
							if($tampil['jk']=='L'){
								$l= "checked"; $p="";
							}else if($tampil['jk']=='P'){
								$l= ""; $p="checked";
							}else{
								$l= ""; $p="";
							}
						?>
							<div class="input-control radio" data-role="input-control">
								<label>
									<input type="radio" name="jk" value="L" <?php echo $l ?> />
                                    <span class="check"></span>
                                    Laki-laki
                                </label>
                            </div>
                            <div class="input-control radio" data-role="input-control">
								<label>
									<input type="radio" name="jk" value="P" <?php echo $p ?> />
                                    <span class="check"></span>
                                    Perempuan
                                </label>
                            </div>
                        </div>
						<label>Alamat</label>
                        <div class="input-control textarea" data-role="input-control">
                            <textarea name="alamat" rows="2"><?php echo $tampil['alamat']; ?></textarea>
						</div>
					</fieldset>	
				</div>
				<div class="span6">
                    <fieldset>
                        <legend>Profil</legend>
                        <lable>Email</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="email"
							 value="<?php echo $tampil['email'];?>">
                        </div>
						<lable>Nomor Telepon</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="tlp"
							 value="<?php echo $tampil['tlp'];?>">
						</div>
						<!--<label>Upload Foto</label>
						<div class="input-control text" data-role="input-control">
							<input type="file" name="foto" value="<?php echo $tampil['foto'];?>">-->
							
						</div>
					</fieldset>	
				</div>
				
			</div>
			<input type="submit" name="Edit" value="Simpan Perubahan">
			</form>
        </div>
    </div>
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->

      <!-- /.container-fluid -->

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