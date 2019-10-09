<?php
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include "config/koneksi.php";
//menangkap data yang dikirim dari form login
if (isset($_POST['Login'])) {
$username 	= $_POST['username'];
$password 	= $_POST['password'];


//menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	//cek jika user login sebagai admin travel
	if ($data['level']=="Mitra-Travel") {
		// buat session login dan username
		$_SESSION['username']=$username;
		$_SESSION['level']="Mitra-Travel";
		//alihkan ke halaman travel
		header("location:tampilanmitratravel.html");
		//jika admin resto
	}else if ($data['level']=="Mitra-Resto)"){
		// session login admin resto
		$_SESSION['username']=$username;
		$_SESSION['level']="Mitra-Resto";
		//dashboar halaman admin resto
		header("location:tampilanmitraresto.html");
	}else if ($data['level']=="Mitra-Hotel"){
		// session login admin hotel
		$_SESSION['username']=$username;
		$_SESSION['level']="Mitra-Hotel";
		//alihkan halaman mitra hotel
		header("location:tampilanmitrahotel.html");
	}else{
		//alihkan halaman login
		header("location:index.php?pesan=gagal");
	}
}
}

?>