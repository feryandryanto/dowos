<?php session_start();

$username=$_SESSION['username'];

?>
<html lang="zxx" class="no-js" style="display: block;"><head>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>DOWOS</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS-->
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
				          <li><a href="paket.html">Paket Wisata</a></li>
				          <li><a href="blog.html">BLOG</a></li>
				          <li class="menu-has-children"><a href="" class="sf-with-ul">Informasi</a>
				            <ul style="display: none;">
				              <li><a href="about.html">About Us</a></li>
				              <li><a href="cara_pesan.html">Cara Pemesanan</a></li>
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
				          <li><a href="paket.html">Paket Wisata</a></li>
				          <li><a href="blog.html">BLOG</a></li>
				          <li class="menu-has-children"><a href="" class="sf-with-ul">Informasi</a>
				            <ul style="display: none;">
				              <li><a href="about.html">About Us</a></li>
				              <li><a href="cara_pesan.html">Cara Pemesanan</a></li>
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

</head>
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h6 class="text-white">Ayo Dolan!</h6>
							<h1 class="text-white">Sugeng Rawuh ing Wonosobo lur..</h1>
							<p class="text-white">
								Selamat memilih dan menikmati paket wisata yang kami sediakan. 
							</p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			    <!-- ---------------------------------------- ISI ------------------------------------- -->
<?php

	include "config/koneksi.php";
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "select * from user where id='$id'");
	while ($d = mysqli_fetch_array($data)) {
?>

             <div>
                <legend><p><h3 style="margin-top: 30px; margin-right: 100px; margin-bottom: 15px; border-bottom: 1px solid #f8b600;">Edit</h3></p></legend>
            </div>
			<form method="post" action="update.php">
				<table>
					<tr>
						<td>Nama Lengkap</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
						</td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?php echo $d['password']; ?>"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<?php
							if($d['jk']=='L'){
								$l= "checked"; $p="";
							}else if($d['jk']=='P'){
								$l= ""; $p="checked";
							}else{
								$l= ""; $p="";
							}
						?>
						<td><input type="radio" name="jk" value="L" <?php echo $l ?> />
							<span class="check"></span>Laki-laki</td>
							<td><input type="radio" name="jk" value="P" <?php echo $p ?> />
                                    <span class="check"></span>
                                    Perempuan</td>
					</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td><textarea name="alamat" rows="2"><?php echo $d['alamat']; ?></textarea></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
					</tr>
					<tr>
						<td>No Hp/Tlp</td>
						<td><input type="text" name="tlp" value="<?php echo $d['tlp']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>
				</table>
			</form>
 

<?php

}
?> 



    <!-- ---------------------------------------- ISI  ------------------------------------- -->




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
											<li><a href="#">Hoteline</a></li>
											<li><a href="#">Email</a></li>
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
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

