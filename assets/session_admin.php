<?php
session_start();

include "koneksi.php";

if (isset($_SESSION['session_login_by_id'])){ //jika session loginnya ada maka lanjutkan
	$user_id = $_SESSION['session_login_by_id'];
	//dapatkan data user
	$sql = "select * from users where id='$user_id'";
	$sql_01 = mysqli_query ($conn, $sql);
	$data = mysqli_fetch_array($sql_01);
	$nama_1 		= $data['nama'];
	$nip 			= $data['nip'];
	$kategori		= $data['kategori'];
	$password 		= $data['pswd'];

	
	
	
				
		if ($kategori!='Admin')
		{
		//include("inc/cekyourlogin.php"); 
		//echo "Anda Harus Login terlebih dahulu untuk mengakses halaman ini <p> <a href='index.php'>Kembali</a>";
		exit();
		}
			

}
else{
	//include("inc/cekyourlogin.php"); 
	//echo "Anda Harus Login terlebih dahulu untuk mengakses halaman ini <p> <a href='index.php'>Kembali</a>";
			header("location:login.php");

	exit();
}

?>