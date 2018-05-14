<?php
require_once("koneksi.php");
if(isset($_GET['nama'])){
$nama = $_GET['nama'];

$ubah = mysql_query("delete from pesanan where nama = '$nama'");

echo"<script>window.alert('Data $nama Sudah Dihapus')
window.location='iphone.html'</script>";
}
?>