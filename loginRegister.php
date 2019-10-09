<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login & Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link href="assets/sweetalert/sweetalert.css" rel="stylesheet">

		<script src="assets/sweetalert/sweetalert.min.js"></script>
		<script src="assets/sweetalert/sweetalert-dev.js"></script>

		<link rel="shortcut icon" href="img/logo2.png">


        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

<?php  session_start();

include "config/koneksi.php";

if (isset($_POST['Login'])){

	$username=$_POST['username'];
	$password=$_POST['password'];
	
		$login=mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
		$cek = mysqli_num_rows($login);


		if ($cek > 0) {
			$data = mysqli_fetch_assoc($login);
			if ($data['level'] =="Admin"){
			$_SESSION['username']=$username;
			$_SESSION['level']="Admin";

			header("location:admin_dowos/index.html");


		}else if ($data['level'] == 'Mitra-Travel') {
			$_SESSION['username']=$username;
			$_SESSION['level']="Mitra-Travel";

			header("location:adminmitra/tampilanmitratravel.html");

		}else if ($data['level'] == 'Mitra-Hotel') {
			$_SESSION['username']=$username;
			$_SESSION['level']="Mitra-Hotel";

			header("location:adminmitra/tampilanmitrahotel.html");

		}else if ($data['level'] == 'Mitra-Restoran') {
			$_SESSION['username']=$username;
			$_SESSION['level']="Mitra-Restoran";

			header("location:adminmitra/tampilanmitraresto.html");


		}else if($data['level']== "User"){
			$_SESSION['username']=$username;
			$_SESSION['level']="User";

			header("location:user/halUser.php");
				
		}else{

			header("location:index.html?pesan=gagal");
		}
	}
}


else{
	unset($_POST['Login']);
}

if (isset($_POST['Register'])){
	//koneksi terpusat
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	
	if(empty($username)){
?>
<script>
	$(function(){
		setTimeout(function(){
			$.Notify({
				style: {background: 'red', color: 'white'}, 
				content: "Username tidah boleh kosong!!"
			}, 1000);
		});
	});
</script>
<?php
	}if(empty($password)){
?>
<script>
	$(function(){
		setTimeout(function(){
			$.Notify({
				style: {background: 'green', color: 'white'}, 
				content: "Password tidah boleh kosong!!"
			}, 2000);
		});
	});
</script>
<?php
	}else{
		$query = mysqli_query($koneksi,"insert into user (nama, username, password, email,level)
		value ('$_POST[nama]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[level]')");
	
		if($query){
			header("location:loginRegister.php?status=Anda Berhasil Register");
		
		}else{
				?><script language="javascript">document.location.href="loginRegister.php?status=Gagal Register";</script><?php
		}		
	}

}

?>


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
 						<a href="index.html"><img src="img/logo3.png" alt="" title="" style="margin-right: 10px;"><h3>dolanwonosobo.com</h3></a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h2>LOGIN</h2>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="loginRegister.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn" name="Login" id="Login">Sign in!</button>
				                    </form>
				                    <div>
				                    </div>
			                    </div>
		                    </div><br>

		                    <a class="primary-btn" href="adminmitra/index.php">Login Mitra</a>


		                <button type="submit" class="btn"><i class="fa fa-user"></i>Login Mitra</button>
	
                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h2>REGISTRASI</h2>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="loginRegister.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Nama Lengkap</label>
				                        	<input type="text" name="nama" placeholder="Nama Lengkap" class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Username</label>
				                        	<input type="text" name="username" placeholder="Username" class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">level</label>
				                        	<select name="level" class="form-control" id="level">
				                        		<option>Daftar Sebagai</option>
				                        		<option>User</option>
				                        		<option>Mitra-Travel</option>
				                        		<option>Mitra-Hotel</option>
				                        		<option>Mitra-Restoran</option>
				                        	</select>
				                        </div>
				                        <button type="submit" name="Register" class="btn">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        

    </body>

</html>