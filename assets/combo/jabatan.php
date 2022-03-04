<?php
$jml_data1 	= "SELECT * FROM periode where status='Aktif' ";
$query		= mysqli_query($conn, $jml_data1);
$data 		= mysqli_fetch_array($query);
$id_periode	= $data['id_periode'];





$query_jab = "select * from jabatan where id_periode='$id_periode'";
$hasil_jab = mysqli_query($conn,$query_jab);
$kategori = array();
while ($data1=mysqli_fetch_array($hasil_jab))
{
$kategori[]=$data1['2'];
$id[]=$data1['0'];

}
$count=count($kategori);
?>