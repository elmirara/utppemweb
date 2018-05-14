<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Form Pemesanan</title> 
  <link rel="stylesheet" type="text/css" href="markercontoh2.css">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <h1><center><font face="comic sans ms">DATA PEMBELI</font></center></h1><br>


<?php
				include "koneksi.php";
				$result = mysql_query("select * from pesanan");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table width="100%" border="4" cellpadding="5" cellspacing="1">
                <tr>
				<th style="width:130px">Nama</th>
                <th style="width:180px">Email</th>
                <th style="width:130px">Nomor Hp</th>
				<th style="width:70px">Alamat</th>
				<th style="width:70px">Kode Pos</th>
				<th style="width:70px">Metode Pembayaran</th>
                <th style="width:200px">Aksi</th>
                </tr>
                
                <?php
				include "koneksi.php";

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
				<td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['hp']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['kodepos']; ?></td>
				<td><?php echo $data['metode']; ?></td>
                <td><center><a href="edit-data.php?nama=<?php echo $data['nama']; ?>"><img src="http://localhost/puskesmas/images/ubah.gif" /></a> | <a href="proses-hapus.php?nama=<?php echo $data['nama']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></a></center></td>
			</tr>
			<?php
                }
                ?>
				</table></form>
				
				<br><br><br><center><input onClick="location.href='udahpesan.html'" class="tombol" name="beli" type="submit" value="BELI"></center>

</html>