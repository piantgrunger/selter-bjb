<?php
include('koneksi.php');

	$id_periode		= $_POST['id_periode'];
	$nama1			= $_POST['nama1'];
	$nama2			= $_POST['nama2'];
	$nama3			= $_POST['nama3'];
	$nip			= $_POST['nip'];
	$jabatan		= $_POST['jabatan'];
	$golongan		= $_POST['golongan'];
	$skpd			= $_POST['skpd'];
	$instansi			= $_POST['instansi'];
	$telp			= $_POST['telp'];
	$pswd			= $_POST['pswd'];
	
	$name			=strtoupper($nama2);
	
	$namalengkap	= $nama1;
	$namalengkap	.=' ';
	$namalengkap	.=$name;
	$namalengkap	.=' ';
	$namalengkap	.=$nama3;
	
	$tgl			= date("d-m-Y, g:i a");
	
	$password 		= md5($pswd);
	
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
	
	
$sql_peserta					= "insert peserta  values(0,'$id_periode','$nama1','$name','$nama3', '$nip', '$jabatan', '$golongan', '$skpd', '$instansi', '$telp', '$pswd', '$tgl', '$code' )";
$mysql_peserta 					= mysqli_query($conn, $sql_peserta);

$sql_user						= "insert users  values(0,'$id_periode','$name','$password','$nip', '$pswd', 'User', '$tgl')";
$mysql_user 					= mysqli_query($conn, $sql_user);

if ($sql_peserta){
header("location:../login.php");
}else{
//header("location:../../stok-barang.php?pesan=2&isi=Gagal Menambahkan Stok Barang Baru ".mysql_error());

echo sql_peserta;

echo sql_user;

}


?>