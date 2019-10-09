<?php
include 'config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];

mysqli_query($koneksi, "update user set nama='$nama',username='$username',password='$password',email='$email',jk='$jk',alamat='$alamat',tlp='$tlp', where id='$id'");

header("location:akun.php");


  ?>