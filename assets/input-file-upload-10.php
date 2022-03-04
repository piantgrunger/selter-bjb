<?PHP
include("koneksi.php");
				
				$allowed_ext	= array('jpg','jpeg');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				
				
				$id_pilih		= $_POST['id_pilih'];
				$nip			= $_POST['nip'];
				
				$tgl			= date("d-m-Y, g:i a"); 			
				
				
				$namafile				= "Foto-";
				$namafile				.= $nip;
				
				$sql_peserta	= "select * from file_peserta where id_pilih='$id_pilih'";
				$mysql_peserta 	= mysqli_query ($conn, $sql_peserta);
				$data_peserta	= mysqli_num_rows($mysql_peserta);
				
				if ($data_peserta != 0)
				{
				if(in_array($file_ext, $allowed_ext) === true)
				{
					if($file_size < 504407)
					{
						$lokasi = 'files/'.$namafile.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi); //lamp1
						
				
						$in_q 		="UPDATE file_peserta SET
						file_10 = '$lokasi'
						
						where id_pilih='$id_pilih'
						";
						$in = mysqli_query($conn, $in_q);
						if ($in)
						{
						//echo $sql;
						header("location:../upload-persyaratan.php");
						//echo "test";
						}else
						{
						echo $in_q;
						//header("location:../../data-akreditasi.php?KODE=$id_pegawai&pesan=2&isi=Akreditasi Tidak Pian Berhasil di Input, Nomor NIK pian mungkin sudah terdaftar");
						}
					}
					else
					{
					echo "FILE YANG ANDA UPLOAD TERLALU BESAR";
					}
				}
				
				}
				else
				{
				
	
				if(in_array($file_ext, $allowed_ext) === true)
				{
					if($file_size < 504407)
					{
						$lokasi = 'files/'.$namafile.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi); //lamp1
						
				
						$in_q 		="INSERT INTO file_peserta VALUES(0, 
						'$id_pilih', 
						'', 
						'', 
						'',
						'',
						'',
						'',
						'',
						'',
						'',
						'$lokasi',
						'',
						'',
						'',
						''
						)";
						$in = mysqli_query($conn, $in_q);
						if ($in)
						{
						//echo $sql;
						header("location:../upload-persyaratan.php");
						echo "test";
						}else
						{
						echo "gagal";
						header("location:../../data-akreditasi.php?KODE=$id_pegawai&pesan=2&isi=Akreditasi Tidak Pian Berhasil di Input, Nomor NIK pian mungkin sudah terdaftar");
						}
					}
					else
					{
					echo "FILE YANG ANDA UPLOAD TERLALU BESAR";
					
					}
				}
				}
?>