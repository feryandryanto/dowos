<?php session_start();

$username=$_SESSION['username'];

?>
<html lang="zxx" class="no-js" style="display: block;"><head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>DOWOS | dolanwonosobo.com</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--			CSS-->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
			<link rel="shortcut icon" href="img/logo2.png">
		<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/38/1/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/38/1/util.js"></script></head>
		<body style="display: block;">	
			<header id="header">
				<div class="container main-menu"><button type="button" id="mobile-nav-toggle"></button>
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="halUser.php"><img src="img/logo2.png" alt="" title="" style="margin-right: 10px;">Dolan Wonosobo</a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
				          <li><a href="halUser.php" class="menu-active">Home</a></li>
				          <li><a href="paket.php">Paket Wisata</a></li>
				          <li><a href="blog.php">BLOG</a></li>
				          <li class="menu-has-children"><a href="" class="sf-with-ul">Informasi</a>
				            <ul style="display: none;">
				              <li><a href="about.php">About Us</a></li>
				              <li><a href="cara_pesan.php">Cara Pemesanan</a></li>
				            </ul>
				          </li>				          					          		          
				          <?php 

				          if(isset($_SESSION['username'])){
				          
				           ?>
				           <li class="menu-has-children"><a href="#" class="sf-with-ul"><?php echo "$_SESSION[username]"; ?></a>

				           	<ul style="display: none;">
				           		<li><a href="akun.php">AkunKu</a></li>
				           		<li><a href="pesanan.php">PesananKu</a></li>
				           		<li><a href="perjalanan.php">PerjalananKu</a></li>
				           		<li><a href="logout.php">Keluar</a></li>
				           	</ul>
				           </li>
				        	<?php
				           	} 
				           	 ?>				          				
				        </ul>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				<nav id="mobile-nav">
				        <ul class="" style="touch-action: pan-y;" id="">
				          <li><a href="halUser.php" class="menu-active">Home</a></li>
				          <li><a href="paket.php">Paket Wisata</a></li>
				          <li><a href="blog.php">BLOG</a></li>
				          <li class="menu-has-children"><a href="" class="sf-with-ul">Informasi</a>
				            <ul style="display: none;">
				              <li><a href="about.php">About Us</a></li>
				              <li><a href="cara_pesan.php">Cara Pemesanan</a></li>
				            </ul>
				          </li>				          					          		          
				          <?php 

				          if(isset($_SESSION['username'])){
				          
				           ?>
				           <li class="menu-has-children"><a href="#" class="sf-with-ul"><?php echo "$_SESSION[username]"; ?></a>

				           	<ul style="display: none;">
				           		<li><a href="akun.php">AkunKu</a></li>
				           		<li><a href="pesanan.php">PesananKu</a></li>
				           		<li><a href="perjalanan.php">PerjalananKu</a></li>
				           		<li><a href="logout.php">Keluar</a></li>
				           	</ul>
				           </li>
				        	<?php
				           	} 
				           	 ?>				          				
				        </ul>
				      </nav><div id="mobile-body-overly"></div></div>
			</header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Paket Wisata Wonosobo				
							</h1>	
							<p class="text-white link-nav"><a href="halUser.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="paket.php"> Paket Wisata</a> <span class="lnr lnr-arrow-right"></span> <a href="paket1d.php"> Paket Wisata 3N2D</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

<!-- isi -->
					<br>
					<h2 style="padding-left: 100px;">Paket 3 Night 2 Day</h2>
					<p style="padding-left: 100px;">IDR 1000.000/pax
						<br>
					Seluruh Objek Wisata Wonosobo</p>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/paket/a3.jpg" alt="">
								</div>
								<div class="desc">			
									<p>Wonoland</p>		
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/paket/p3.jpg" alt="">
								</div>
								<div class="desc">			
									<p>Bukit Sikunir</p>		
								</div>
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/paket/k3.jpg" alt="">
								</div>
								<div class="desc">			
									<p>Lubang Sewu</p>		
								</div>
							</div>
						</div>					
					<br>
					<div class="col-lg-4 col-md-6 banner-right">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Detail</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Pesan</a>
							  </li>
							  </ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" style="padding-left: 100px;" id="flight" role="tabpanel" aria-labelledby="flight-tab">
							  	<br>
							  	<ul>
							  	<h3>Destinasi Wisata</h3>
							  		<li>- Bukit Sembrani</li>
							  		<li>- Curug Winong</li>
							  		<li>- Puncak Asmara</li>
							  		<li>- Wisata Religi</li>
							  		<li>- Lubang Sewu</li>
							  		<li>- Bendungan</li>
							  	</ul>
							  	<br>
							  	<ul>
							  	<h3>Itinerary Tour</h3>
							  	<h4>Hari Pertama</h4>
							  	<li> 00:00 - 00:30 Meeting Point</li>
							  	<li> 00:30 - 02:00 Perjalanan Ke Ojek Wisata</li>
							  	<li> 02:00 - 10:00 Tiba Di Objek Wisata</li>
							  	<li> 10:00 - 12:00 Pulang ke hotel</li>
							  	<br>
							  	<h4>Hari Kedua</h4>
							  	<li> 00:00 - 00:30 Sarapan dari Hotel</li>
							  	<li> 00:30 - 01:00 Perjlanan Ke Objek Wisata</li>
							  	<li> 02:00 - 10:00 Tiba Di Objek Wisata</li>
							  	<li> 10:00 - 12:00 Pulang</li>
							  	<br>
							  	<h4>Hari Ketiga</h4>
							  	<li> 00:00 - 00:30 Sarapan dari Hotel</li>
							  	<li> 00:30 - 01:00 Perjlanan Ke Objek Wisata</li>
							  	<li> 02:00 - 10:00 Tiba Di Objek Wisata</li>
							  	<li> 10:00 - 12:00 Pulang</li>

							  </ul>
							  </br>
							  <br>
							  <ul>
							  	<h3>Keterangan</h3>
							  	<li>- Paket 3D2N dapat diikuti minimal 2 peserta</li>
							  	<li>- Usia 5 tahun keatas dikenakan biaya full</li>
							  	<li>- Intinerary tour bersifat tidak meningkat, jika ada perubahan bisa di reschedule ulang</li>
							  	<li>- Fasilitas akomodasi makan hanya berlaku selama di Wonosobo</li>
							  	<li>- Jenis kendaraan yang digunakan berdasarkan jumlah peserta</li>
							  	<li>- Layanan paket oneday ini bersifat private tidak digabung dengan rombongan lain</li>
							  	<li>- Perlengkapan : jaket, sepatu lapangan, tutup kepala, kaos tangan, jas hujan, atau payung</li>
							  	<li>- Pemesanan dianggap deal setelah melakukan pembayaran uang muka</li>
							  </ul>
							  <br>
							  	<ul>
							  		<h3>Layanan dan Fasilitas</h3>
							  		<li>- Layanan private tour</li>
							  		<li>- Transportasi dari meeting point PP dan selama di Wonosobo (car, bbm, driver)</li>
							  		<li>- Private homestay 1 night</li>
							  		<li>- Breakfast 1x, lunch 2x dan dinner 1x (Selama di Wonosobo)</li>
							  		<li>- Tour guide</li>
							  		<li>- Tiket masuk objek wisata Wonosobo</li>
							  		<br>
							  	</ul>
							  		<ul>
							  			<h3>Harga tidak termasuk</h3>
							  			<li>- Tiket kereta atau pesawat</li>
							  			<li>- Pengeluaran pribadi</li>
							  			<li>- Asuransi perjalanan</li>
							  		</ul>
							</br>
							  </div>
<?php

include 'config/koneksi.php';

$data = mysqli_query($koneksi, "select * from user where username='$username'");
while ($d = mysqli_fetch_array($data)) {

?>

							  <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab" style="padding-left: 100px;">
							  	<br>
							<h4>Silahkan lengkapi data Pemesanan</h4>
							<form method="post" action="tambah_pesan.php">
								<div>
									<label>Nama Lengkap</label><br>
									<input type="hidden" name="id" readonly value="<?php echo $d['id'];?>">
									<input type="text" name="nama" readonly value="<?php echo $d['nama'];?>">
								</div>
									<label>Tentukan Tanggal</label>
								<div>
									<input type="date" name="tgl_tour" id="tgl_tour">
								</div>
									<label>Jumlah Orang</label>
								<div>
									<label>Dewasa* : <input type="number" min="1" max="20" name="dewasa"></label>
									<label>Anak** : <input type="number" min="1" max="20" name="anak"></label>
									<p>*Dewasa diatas 12th <br>
									**Anak usia dibawah 12tahun.</p>

							<input type="submit" value="next">						  	
							  </div>
							</br>
									<?php
								}
								?>
								</div>
							</form>

			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="margin-right: -88px;">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Kami adalah startup pemesanan paket wisata khusus daerah wonosobo saja.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Contact Us</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li>Hotline : 628-8888-888</li>
											<li>Email : cs@dolanwonosobo.com</li>
									</div>									
								</div>							
							</div>
						</div>							
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Email</h6>
								<p>
									Kritik dan saran.								
								</p>								
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative" novalidate="true">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
										</div>									
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Galeri</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
Copyright ©<script>document.write(new Date().getFullYear());</script></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-telegram"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	



			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		
	<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>
