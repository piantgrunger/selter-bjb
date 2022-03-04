<?PHP
include("koneksi.php");
				
				$allowed_ext	= array('pdf');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				
				
				$id_pilih		= $_POST['id_pilih'];
				$nip			= $_POST['nip'];
				
				$tgl			= date("d-m-Y, g:i a"); 			
				
				
				$namafile				= "Surat-Lamaran-";
				$namafile				.= $nip;
				
				
	
	
				if(in_array($file_ext, $allowed_ext) === true)
				{
					if($file_size < 504407)
					{
						$lokasi = 'files/'.$namafile.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi); //lamp1
						
				
						$in_q 		="INSERT INTO akreditasi VALUES('', 
						'$name', 
						'$nik', 
						'$d_formasi', 
						'$telp', 
						'$lokasi'
						)";
						$in = mysqli_query($conn, $in_q);
						if ($in)
						{
						//echo $sql;
						header("location:../../data-akreditasi.php?KODE=$nik&pesan=1&isi=Akreditasi Pian Berhasil di Input Silahkan cek dengan Search Nama Pian");
						echo "test";
						}else
						{
						echo "gagal";
						header("location:../../data-akreditasi.php?KODE=$id_pegawai&pesan=2&isi=Akreditasi Tidak Pian Berhasil di Input, Nomor NIK pian mungkin sudah terdaftar");
						}
					}
					else
					{
					header("location:../../data-akreditasi.php?KODE=$id_pegawai&pesan=2&isi=FILE YANG ANDA UPLOAD TERLALU BESAR, SEPERTI CINTA PIAN KEPADANYA YG GA KESAMPAIAN");
					}
				}
?>