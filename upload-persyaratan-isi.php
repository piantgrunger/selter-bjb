 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Jabatan Yang Pian lamar</h4>
                                <h6 class="card-subtitle">Klik Tombol Upload Syarat untuk Upload Persyaratan Selter</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                               	<th colspan="5" align="center">Jabatan Yang Akan Di Lamar </th>
                                            </tr>
                                        </thead>
										<tbody>
										
					<?PHP
				 	
              	 
					$i 				= 1;
					$sql_pilih	 	= "SELECT * FROM pilih_jabatan where id_periode='$id_periode' and id_peserta='$id_peserta' ";
					$mysql_pilih	= mysqli_query($conn, $sql_pilih);
					
					
        			while($data1 = mysqli_fetch_array($mysql_pilih))
					{
					
				
					$id_pilih		= $data1['id_pilih'];
					$id_peserta		= $data1['id_peserta'];
					$id_periode		= $data1['id_periode'];
					$id_jabatan		= $data1['id_jabatan'];
					$tgl			= $data1['tgl'];
					$kd_unik		= $data1['kd_unik'];
					
					$sql_jabatan_1		= "select * from jabatan where id_jabatan='$id_jabatan'";
					$mysql_jabatan_1 	= mysqli_query ($conn, $sql_jabatan_1);
					$data_jabatan_1		= mysqli_fetch_array($mysql_jabatan_1);
					
					$nama_jabatan		= $data_jabatan_1['nama_jabatan'];
					$esselon			= $data_jabatan_1['esselon'];
	
					?>
                                        
                                           
                                            <tr>
											 <td colspan="5" widtd="10%" align="center"><?php echo $nama_jabatan; ?> (<?php echo $esselon; ?>)</td>
                                            </tr>
											
                                       
				<?PHP
       			 $i++;
        			}
    			?> 
				 							<tr>
                                                <td widtd="20%" align="center"><a href="<?php echo "file-upload-1.php?id=$id_pilih" ?>" ><button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Surat Lamaran</button></a></td>
                                                <td widtd="20%" align="center"><a href="<?php echo "file-upload-2.php?id=$id_pilih" ?>" ><button class="btn btn-outline-info waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Daftar Riwayat Hidup</button></a></td>
                                                <td widtd="20%" align="center"><a href="<?php echo "file-upload-3.php?id=$id_pilih" ?>" ><button class="btn btn-outline-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Fakta Integritas</button></a></td>
												<td widtd="20%" align="center"><a href="<?php echo "file-upload-4.php?id=$id_pilih" ?>" ><button class="btn btn-outline-success waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Surat keterangan kesehatan</button></a></td>
                                                <td widtd="20%" align="center"><a href="<?php echo "file-upload-5.php?id=$id_pilih" ?>" ><button class="btn btn-outline-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Surat Keputusan Jabatan Terakhir </button></a></td>
                                               
                                            </tr>
											<tr>
                                                <td widtd="20%"  align="center"><a href="<?php echo "file-upload-6.php?id=$id_pilih" ?>" ><button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Surat Keputusan Kenaikan Pangkat terakhir </button></a></td>
                                                <td widtd="20%"  align="center"><a href="<?php echo "file-upload-7.php?id=$id_pilih" ?>" ><button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File SKP</button></a></td>
                                                <td widtd="20%"  align="center"><a href="<?php echo "file-upload-8.php?id=$id_pilih" ?>" ><button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File LHKPN</button></a></td>
												<td widtd="20%"  align="center"><a href="<?php echo "file-upload-9.php?id=$id_pilih" ?>" ><button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Bukti Laporan SPT Tahunan </button></a></td>
                                                <td widtd="20%"  align="center"><a href="<?php echo "file-upload-10.php?id=$id_pilih" ?>" ><button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Foto Latar Merah</button></a></td>
                                               
                                            </tr>
											
											<tr>
                                                <td widtd="20%"  align="center"><a href="<?php echo "file-upload-11.php?id=$id_pilih" ?>" ><button class="btn btn-outline-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Surat Rekomendasi / Izin dari PPK Daerah asal  </button></a></td>
                                                <td widtd="20%"  align="center"><a href="<?php echo "file-upload-12.php?id=$id_pilih" ?>" ><button class="btn btn-outline-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Ijasah </button></a></td>
                                                <td widtd="20%"  align="center"><a href="<?php echo "file-upload-13.php?id=$id_pilih" ?>" ><button class="btn btn-outline-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Transkip Nilai </button></a></td>
												<td widtd="20%"  align="center"><a href="<?php echo "file-upload-14.php?id=$id_pilih" ?>" ><button class="btn btn-outline-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Sertifikat Pendidikan dan Pelatihan </button></a></td>
                                                <td widtd="20%"  align="center" valign="middle">Jika Ada</td>
                                               
                                            </tr>
				</tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>