<?php
include('koneksi.php');

	$id_jabatan		= $_POST['id_jabatan'];
	$id_peserta		= $_POST['id_peserta'];
	$id_periode		= $_POST['id_periode'];
	$tgl			= date("d-m-Y, g:i a");
	
	
	
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
				
				
	$sql_peserta1	= "select * from pilih_jabatan where id_periode='$id_periode' and id_peserta='$id_peserta'";
	$mysql_peserta1	= mysqli_query ($conn, $sql_peserta1);
	$data_peserta1	= mysqli_num_rows($mysql_peserta1);
	
	if ($data_peserta1 != 0)
	{
	header("location:../upload-persyaratan.php");
	//echo "sudah diinput";
	}
	else
	{
	
	
$sql_peserta					= "insert pilih_jabatan  values(0,'$id_peserta','$id_periode','$id_jabatan','$tgl', '$code')";
$mysql_peserta 					= mysqli_query($conn, $sql_peserta);



if ($sql_peserta){
header("location:../upload-persyaratan.php");
}else{
//header("location:../../stok-barang.php?pesan=2&isi=Gagal Menambahkan Stok Barang Baru ".mysql_error());

echo sql_peserta;

}
}


?>