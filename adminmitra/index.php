<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="img/logo.png">
	</head>
	<body>
		<h1>Halaman Login Mitra</h1>

		<?php
			if(isset($GET['pesan'])){
				if($GET['pesan'=="gagal"]){
					echo "<div class='alert'> Username dan Password tidak sesua !</div>";
				}
			}
		?>
		<div class="kotak_login">
			<p class="tulisan_login">Silahkan login</p>

			<form action="cek_login.php" method="post">
				<label>Username</label>
				<input type="text" name="username"class="form_login" placeholder="Username.." required="required">
				<label>Password</label>
				<input type="password" name="password" class="form_login" placeholder="Password" required="required">
				<input type="submit" name="Login" class="tombol_login" id="Login" value="LOGIN">

				<br/>
				<br/>
				<center>
					<a class="link" href=""></a>
				</center>
				<br>
				

				<div class="form-group">
            		<div class="checkbox">
              			<label>
                			<input type="checkbox" value="remember-me">
                			Ingatkan Password
              			</label>
            		</div>
          		</div>
			</form>
				
			<br>
			<div class="text-center">
          		<a class="forgot-password" href="forgot_password.html">Lupa password?</a>
        	</div>
          	
		</div>

	</body>

</html>