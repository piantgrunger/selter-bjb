<?PHP
include"koneksi.php";

				$kode		= $_GET['id'];
				
				$in_q 		=	"	delete from jabatan 
									where id_jabatan='$kode'
								";
				$in 		= mysqli_query($conn, $in_q);
						
						
						
						if($in){
						//echo $in_q;
						header("location:../data-jabatan.php");
								}
								else
								{
								
								//header("location:../pns.php?pesan=1&isi=Gagal Menambahkan Data PNS Dengan nama $nama karena ".mysql_error());
		
									//echo '<div class="error">ERROR: Gagal upload file!</div>';
									echo $in_q;
								}
	  
	  
	  
	 


?>