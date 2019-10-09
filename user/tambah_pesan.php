<?php 

include 'config/koneksi.php';

$id = $_POST['id'];
$tgl_pesan = date("y.m.d");
$tgl_tour = $_POST['tgl_tour'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];

mysqli_query($koneksi, "INSERT INTO pesan values('','$id','1','$tgl_pesan','$tgl_tour','$dewasa','$anak','')");

header("location:pesan_paket.php");

 ?>