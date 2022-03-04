<?php
include"koneksi.php";

$tahun	= $_POST['tahun'];
$bulan 	= $_POST['bulan'];

				function randomPrefix($length)
				{
				$random	="";
				srand((double)microtime()*1000000);
				
				$data	=  "AbcDE123IJKLMN67QRSTUVWXYZ";
				$data	.= "aBCdefghijkmn123opq45rs67tuv89xyz";
				$data	.= "0FGH45OP89";
				for ($i = 0; $i < $length; $i++)
				{
				$random	.= substr($data,(rand()%(strlen($data))), 1);
				}
				return $random;
				}
				$code	= randomPrefix(12);


$sql_periode 	= "insert periode  values(0, '$tahun','$bulan', 'Aktif', '$code')";
$mysql_periode	= mysqli_query($conn, $sql_periode);

if ($mysql_periode){
header("location:../data-periode.php");
}else{
//header("location:../../stok-barang.php?pesan=2&isi=Gagal Menambahkan Stok Barang Baru ".mysql_error());

echo sql_peserta;

echo sql_user;

}


?>