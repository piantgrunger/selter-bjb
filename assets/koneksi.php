<?php
$conn = mysqli_connect("localhost", "root", "", "selter");
if(mysqli_connect_errno()){
	echo "Gagal:".mysqli_connect_error();
}else{
	//echo "Koneksi berhasil";
}
?>