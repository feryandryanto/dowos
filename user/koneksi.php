<?php
if (!isset($_SESSION)) {
	session_start();
} else {
	session_destroy();
	session_start();
}


ob_start();

$errors = array();

$db = mysql_connect('localhost','root','');
mysql_select_db("dowos");

function register(){
if (isset($_POST['register'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password1 = mysql_real_escape_string($_POST['password1']);
	$password2 = mysql_real_escape_string($_POST['password2']);
	$email = mysql_real_escape_string($_POST['email']);
	$jk = mysql_real_escape_string($_POST['jk']);
	$tlp = mysql_real_escape_string($_POST['tlp']);
	$alamat = mysql_real_escape_string($_POST['alamat']);

	$cek = mysql_query("SELECT * FROM user WHERE username='$username'");
	if($cek && mysql_num_rows($cek) != 0){
		echo "Username sudah terdaftar";
	}if (md5($password2) != md5($password1)) {
		echo "Password tidak cocok";
	}else{
		$password = md5($password1);
		$sql = "INSERT INTO user(username,password,email,jk,tlp,alamat,level) VALUES ('$username','$password','$email','$jk','$tlp','$alamat','1')";
		mysql_query($sql);
		$_SESSION['username'] = $username;
		header('location:login.php');
	}
}
}

function login(){
if (isset($_POST['login'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	
		$password = md5($password);
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysql_query($query);
		if ($result && mysql_num_rows($result) == 1) {
			$row = mysql_fetch_array($result);
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] = $row['level'];
			header('location:user/halUser.html');
		}else{
			echo "Kombinasi password dan username salah";
		}
	}
}

?>