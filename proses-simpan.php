<?php
require_once("koneksi.php");

if(isset($_POST['simpan'])){
$nama= $_POST['nama']; 
$email = $_POST['email'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$kodepos = $_POST['kodepos'];
$metode= $_POST['metode'];

$simpan = mysql_query("insert into pesanan values ('$nama','$email','$hp','$alamat','$kodepos','$metode')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='hasil_pesanan.php'</script>";
}
?>