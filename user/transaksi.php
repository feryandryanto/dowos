<?php
include 'config/koneksi.php';
session_start();
$username = $_SESSION['username'];
$id_paket = $_GET['id_paket'];

if (isset($_POST['transaksi'])){
    $id_pesan = $_POST['id_pesan'];
    $id_paket = $_POST['id_paket'];
    $id = $_POST['id'];
    $total_harga = $_POST['total_harga'];
    $bukti = $_FILES['bukti'];
    $F1_name = $bukti['name'];
    $F1 = $bukti['tmp_name'];

    $sql = mysqli_query($koneksi, "insert into bayar values('','$id_pesan','$id_paket','$id','$total_harga','$F1_name','1')");

    if($sql){
    $move = move_uploaded_file($F1, 'bukti/'.$F1_name);
    if($move){
        mysqli_query($koneksi, "update paket set stok = stok - $jml_orang where id_paket='$id_paket'");
    echo "<script>alert(\"Transaksi Berhasi!\");</script> ";

    header("location:pesanan.php");
}
    }else{
        echo "<script>alert(\"Gagal!\");</script> ";
    header("location:pesan_paket.php");
    }
}
?>


