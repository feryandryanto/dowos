<?php session_start();

if(isset($_SESSION['username'])){

	include "config/koneksi.php";
	$username=$_SESSION['username'];

	if (isset($_POST['Submit']))
	 {
		mysql_query("INSERT INTO pesan (id, id_paket, tgl_pesan, tgl_tour, status)
		value ('$_POST[id]','$_POST[paket]',NOW(),'$_POST[tgl_tour]','$_POST[status]')"  )or die(mysql_error());

		header("location:resumePesan.php");

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
</head>
<body>
	<?php
	$query	=mysql_query("SELECT * FROM user WHERE username='$username'");
	$tampil	=mysql_fetch_array($query);

	echo "<script language=\"JavaScript\" src=\"comboBox.js\"></script>";
?>

   <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    <div class="container">
        <div class="grid">
		<div class="row">
			<div class="span4">
				<legend>Tentukan Tanggal Tour</legend>
            <div class="span6">
                <form name="formBooking" method="post" action="#">
                    <fieldset>
                        <legend>Silahkan Dilengkapi Form Berikut!</legend>
                        <lable>Nama Lengkap</lable>
                        <div class="input-control text" data-role="input-control">
							<input type="hidden" name="id" readonly
							 value="<?php echo $tampil['id'];?>">
                            <input type="text" name="nama" readonly
							 value="<?php echo $tampil['nama'];?>">
                        </div>
						<lable>Tanggal Tour</lable>
                        <div class="input-control text" data-role="input-control">
                            <input id="tgl_tour" type="date" name="tgl_tour" >
                        </div>

						<label>Pilih Kategori Paket</label>
                        <div class="input-control select" data-role="input-control">						
							<select name='kategori' onChange='DinamisKategori(this);' class="cmb">
							<option value="">--Pilih Kategori--</option>
							<?php
								$query = "select * from kategori";
								$result = mysql_query($query);
								while ($set=mysql_fetch_array($result))
								{
									echo "<option value=$set[id_kategori]>$set[kategori]</option>";
								}
								echo"</select>";
							?>
						</div>
						
						<label>Pilihan Paket</label>
						<div class="input-control select" data-role="input-control">
						<select name="paket" onChange='DinamisPaket(this);' class="cmb">
						<option value="">--Pilih Paket--</option>
						<?php
						$query = "select * from paket where id_kategori='1'";
						$result1 = mysql_query($query);
						while ($set=mysql_fetch_array($result1)) {
						echo "<option value=$set[id_paket]>$set[nama_paket]</option>";
						}
						echo "<select>";
						?>
                        </div>
						<label>Anda ingin pembayaran di tempat?</label>
						<div>
							<div class="input-control radio" data-role="input-control">
                                <label>
                                <input type="radio" name="status" value="S3" />
                                <span class="check"></span>Iya
                                </label>
                            </div>
						</div>
						<div>
                            <div class="input-control radio" data-role="input-control">
                                <label>
                                <input type="radio" name="status" value="S1" checked />
                                <span class="check"></span>Tidak, Saya ingin via Transfer
                                </label>
                            </div>
						</div>						
                        <input type="submit" name="Submit" value="Next">
                    </fieldset>
                </form>
            </div>
		</div>
        </div>
    </div>
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    
</body>
</html>
<?php
}else{
	session_destroy();
	header('Location:formRegistrasi.php?status=Silahkan Login');
}
?>