<?php session_start();

if(isset($_SESSION['username'])){

	//koneksi terpusat
	include "config/koneksi.php";
	$username=$_SESSION['username'];
	
?>
<!DOCTYPE html>
<html>
<head>

<title>Booking Paket</title>
</head>

    
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
 				<table>
                	<thead>
                    	<tr class="info fg-white">
                        	<th class="text-left">ID Pesan</th>
                            <th class="text-left">Tanggal Pesan</th>
                            <th class="text-left">Tanggal Tour</th>
                            <th class="text-left">Paket Tour</th>
                            <th class="text-left">Harga Paket</th>
                            <th class="text-left">Harga Total</th>
                            <th class="text-left">Status</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
						$comot=mysql_query("SELECT * FROM pesan, paket, user WHERE pesan.id=user.id AND pesan.id_paket=paket.id_paket AND username='$username'");
						
						while($isi_tbl=mysql_fetch_array($comot)){
								if($isi_tbl['status']=='S2'){
									$txtS="Telah melakukan Pembayaran";
								}else if($isi_tbl['status']=='S3') {
									$txtS="melakukan Pembayaran di Tempat";
								}
					}
					echo mysql_error();

					?>
                    	<tr>
                        	<td>DW-00<?php echo $isi_tbl['id_pesan']; ?></td>
                            <td><?php echo $isi_tbl['tgl_pesan']; ?></td>
                            <td><?php echo $isi_tbl['tgl_tour']; ?></td>
                            <td><?php echo $isi_tbl['nama_paket']; ?></td>
                            <td><?php echo $isi_tbl['harga']; ?></td>
                            <td>IDR<?php echo $isi_tbl['harga']; ?></td>
                            <td><?php
								$now= date("Y-m-d");
								if($isi_tbl['status']=='S2'&&$isi_tbl['tgl_tour']>=$now||$isi_tbl['status']=='S3'&&$isi_tbl['tgl_tour']>=$now){
								?>
								<a class="button" href="bookingFinish.php?id=<?php echo $isi_tbl[0]; ?>" data-hint="<?php echo $txtS ?>">Cetak Tiket</a>
								<?php
								}else if($isi_tbl['status']=='S4'){
									echo "Telah Tour";
								}else if($isi_tbl['tgl_tour']<$now){
									echo "<a class='text-warning'>Kadaluarsa!!</a>";
								}else{
									echo "Menunggu";
								?>
									<br /><a class="button" href="uploadBukti.php?id=<?php echo $isi_tbl[0]; ?>" data-hint="Upload Bukti Pembayaran">Upload Bukti</a>
								<?php
								}
								?>
								</td>
                        </tr>
                    <?php
						}
					?>
                    </tbody>
                    
                </table>
		</div>
    </div>
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    
  
</body>
</html>
