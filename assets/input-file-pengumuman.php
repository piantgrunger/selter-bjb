<?PHP
include("koneksi.php");
				
				$allowed_ext	= array('pdf','doc','docx');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				
				
				$nama		= $_POST['nama'];
				
				$tgl		= date("d-m-Y, g:i a"); 
				
				$naaaa 		= md5($tgl);	
				
				
				$namafile				= "File-";
				$namafile				.= $naaaa;
				
				
				if(in_array($file_ext, $allowed_ext) === true)
				{
					if($file_size < 504407)
					{
						$lokasi = 'files/'.$namafile.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi); //lamp1
						
				
						$in_q 		="INSERT INTO pengumuman VALUES(0, 
						'$nama', 
						'$lokasi', 
						'Aktif'
						)";
						$in = mysqli_query($conn, $in_q);
						if ($in)
						{
						//echo $sql;
						header("location:../file-pengumuman.php");
						echo "test";
						}else
						{
						echo "gagal";
						//header("location:../../data-akreditasi.php?KODE=$id_pegawai&pesan=2&isi=Akreditasi Tidak Pian Berhasil di Input, Nomor NIK pian mungkin sudah terdaftar");
						}
					}
					else
					{
					echo "FILE YANG ANDA UPLOAD TERLALU BESAR";
					}
				}
?>