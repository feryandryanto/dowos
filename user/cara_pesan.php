<html lang="zxx" class="no-js" style="display: block;"><head>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>DOWOS | dolanwonosobo.com</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
<!-- CSS -->
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
				          <?php session_start();

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
				      </nav>					      		  
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
				          <?php session_start();

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
								Cara Pesan Paket Wisata				
							</h1>	
							<p class="text-white link-nav"><a href="halUser.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cara_pesan.php">Cara Pemesanan Paket</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start step order Area -->
			<center><h2 style="margin-top: 10px;">Cara Pesan Paket Wisata</h2>
			<p class="link-nav" style="margin-top: 25px; margin-bottom: 25px;"><i class="fa fa-search" style="padding-right: 50px; padding-left: 50px; font-size:24px;">Cari</i><span class="lnr lnr-arrow-right"></span><i class="fa fa-hand-o-up" style="padding-right: 50px; padding-left: 50px; font-size:24px;">Pilih</i><span class="lnr lnr-arrow-right"></span><i class="fa fa-cart-arrow-down" style="padding-right: 50px; padding-left: 50px; font-size:24px;">Pesan</i><span class="lnr lnr-arrow-right"></span><i class="fa fa-credit-card" style="padding-right: 50px; padding-left: 50px; font-size:24px;">Bayar</i><span class="lnr lnr-arrow-right"></span><i class="fa fa-ticket" style="padding-right: 50px; padding-left: 50px; font-size:24px;">E-tiket</i></p></center>
			<br>
			<br>
			<div style="margin-left: 100px;">
			<p> 1. Pesan <br>
					Mulai pencarian anda di halaman <a href="paket.php" style="color: blue; size: 24px;">Paket Wisata</a> dengan memasukan tanggal keberangkatan. <br><br>
				2. Pilih Paket Wisata <br>
					Di halaman Paket Wisata, Anda dapat langsung memilih Paket Wisata yang Anda inginkan. <br><br>
				3. Pesan <br>
					Setelah menemukan Paket Wisata yang sesuai, Anda dapat memilih jenis paket dan jumlahnya. <br><br>
				4. Bayar <br>
					Isi data pemesan. Setelahnya, review kembali data Anda. Setelah memastikan data sudah benar, lanjutkan ke halaman pembayaran. <br><br>
				5. E-tiket <br>
					Setelah pembayaran sukses diterima, Anda akan menerima email berisi ringkasan voucher paket wisata berupa e-ticket secara instan, maksimum dalam 60 menit. <br></p>
			</div>

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
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