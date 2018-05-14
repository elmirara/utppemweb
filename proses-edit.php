<?php
require_once("koneksi.php");

if(isset($_POST['simpan'])){
$nama= $_POST['nama']; 
$email = $_POST['email'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$kodepos = $_POST['kodepos'];
$metode= $_POST['metode'];

$ubah = mysql_query("update pesanan set nama = '$nama', email = '$email', hp = '$hp', alamat = '$alamat', kodepos = '$kodepos', metode = '$metode' where nama = '$nama'");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='hasil_pesanan.php'</script>";
}
?>