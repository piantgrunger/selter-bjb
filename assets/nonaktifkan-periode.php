<?PHP
include"koneksi.php";

				$kode		= $_GET['id'];
				$tgl_		= date("d-m-Y, g:i a"); 
				$admin		= $nama_1;
				$in_q 		=	"	update periode set 
									
									status					= 'Tidak Aktif'
									where id_periode='$kode'
								";
				$in 		= mysqli_query($conn, $in_q);
						
						
						
						if($in){
						//echo $in_q;
						header("location:../data-periode.php");
								}
								else
								{
								
								//header("location:../pns.php?pesan=1&isi=Gagal Menambahkan Data PNS Dengan nama $nama karena ".mysql_error());
		
									//echo '<div class="error">ERROR: Gagal upload file!</div>';
									echo $in_q;
								}
	  
	  
	  
	 


?>