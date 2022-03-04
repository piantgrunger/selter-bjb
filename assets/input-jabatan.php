<?php
include"koneksi.php";

$id_periode		= $_POST['id_periode'];
$nama_jabatan 	= $_POST['nama_jabatan'];
$esselon	 	= $_POST['esselon'];

$name			=strtoupper($nama_jabatan);


$sql_jabatan 	= "insert jabatan  values(0, '$id_periode','$name', '$esselon')";
$mysql_jabatan	= mysqli_query($conn, $sql_jabatan);

if ($mysql_jabatan){
header("location:../data-jabatan.php");
}else{
//header("location:../../stok-barang.php?pesan=2&isi=Gagal Menambahkan Stok Barang Baru ".mysql_error());

echo sql_peserta;

echo sql_user;

}


?>