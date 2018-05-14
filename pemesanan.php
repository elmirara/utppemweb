<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Form Pemesanan</title> 
  <link rel="stylesheet" type="text/css" href="pemesanan.css">
</head>

<body>
<center><img src="css/images/keranjang2.png"/><h1>FORM PEMESANAN</h1></center>

<body> 
<form action="proses-simpan.php" name="tes" method="post">

	<div id="kotak" style="width:40%;">
	<tr>
		Nama<input class= "masuk" name="nama" type="text" size="20">
	</tr>
	<tr>
		<td>Email</td>
		<td><input class= "masuk" name="email" type="text" size="40"></td>
	</tr>
	<tr>
		<td>Nomor HP</td>
		<td><input class= "masuk" name="hp" type="text" size="40"></td>
	</tr>
	<tr>
		<td>alamat Lengkap</td>
		<td><input class= "masuk" name="alamat" type="info" size="40"></td>
	</tr>  
	<tr>
		<td>Kode Pos</td>
		<td><input class= "masuk" name="kodepos" type="info" size="40"></td>
	</tr> 
	<form>
		<td>METODE PEMBAYARAN</td></br></br>
		<input type="radio" name="metode" value="cod">COD</br></br>
		<input type="radio" name="metode" value="indomaret">Indomaret</br>
	</form></br>
	<input class="tombol" name="simpan" type="submit" value="PESAN" style="width:100%;">
	
	</div>

		</form>
</body> 

</html>
