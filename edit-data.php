<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Form Pemesanan</title> 
  <link rel="stylesheet" type="text/css" href="editdata.css">
</head>

<body>
  <h1><center>UBAH PEMESANAN</center></h1>

<body> 
<?php
include "koneksi.php";
$nama = $_GET['nama'];
$result = mysql_query("select * from pesanan where nama='$nama'");
$data = mysql_fetch_array($result);
?>

<form name="form1" method="post" action="proses-edit.php">
		<div id="kotak" style="width:40%;">
		  <tr>
			<td>Nama</td>
			<td><input class= "masuk" name="nama" type="text" size="40" value="<?php echo $data['nama']; ?>"</td>
		  </tr>
		  <tr>
			<td>Email</td>
			<td><input class= "masuk" name="email" type="text" size="40" value="<?php echo $data['email']; ?>"></td>
		  </tr>
		  
		
		
		<tr>
		<td>Nomor HP</td>
		<td><input class= "masuk" name="hp" type="text" size="40" value="<?php echo $data['hp']; ?>"></td>
		</tr>
		
		<tr>
		<td>Alamat Lengkap</td>
		<td><input class= "masuk" name="alamat" type="text" size="40" value="<?php echo $data['alamat']; ?>"></td>
		</tr>
		
		<tr>
		<td>Kode Pos</td>
		<td><input class= "masuk" name="kodepos" type="text" size="40" value="<?php echo $data['kodepos']; ?>"></td>
		</tr>
		
		<form>
		<td>METODE PEMBAYARAN</td></br></br>
		<input type="radio" name="metode" value="<?php echo $data['metode']; ?>">COD</br></br>
		<input type="radio" name="metode" value="<?php echo $data['metode']; ?>">Indomaret</br>
	</form></br>
		
			  <tr>
			<td></td>
			<td><input class= "tombol" name="simpan" type="submit" value="Simpan"></td>
		  </tr>
		</div
		
		</form>
</body> 

</html>