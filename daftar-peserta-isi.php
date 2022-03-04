 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Peserta Selter</h4>
                                <h6 class="card-subtitle">Pemerintah Kota Banjarbaru</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="35%">Nama / Pangkat / NIP</th>
												<th width="25%">Jabatan</th>
												<th width="25%">Jabatan Yang Dilamar</th>
                                                <th width="10%">Act</th>
                                                
                                            </tr>
                                        </thead>
										<tbody>
										
					<?PHP
				 	
              	 	$jml_data1 	= "SELECT * FROM periode where status='Aktif' ";
					$query		= mysqli_query($conn, $jml_data1);
					$data = mysqli_fetch_array($query);
					$id_periode	= $data['id_periode'];
					
					$i 				= 1;
					$jml_data11 	= "SELECT * FROM pilih_jabatan where id_periode='$id_periode' order by id_jabatan ";
					$query1			= mysqli_query($conn, $jml_data11);
					
					
        			while($data1 = mysqli_fetch_array($query1))
					{
					
					$id_pilih		= $data1['id_pilih'];
					$id_peserta		= $data1['id_peserta'];
					$id_periode		= $data1['id_periode'];
					$id_jabatan		= $data1['id_jabatan'];
					$tgl_daftar		= $data1['tgl'];
					
					$sql_peserta1	= "select * from peserta where id_peserta='$id_peserta'";
					$mysql_peserta1	= mysqli_query ($conn, $sql_peserta1);
					$data_peserta1	= mysqli_fetch_array($mysql_peserta1);
					$id_peserta 	= $data_peserta1['id_peserta'];
					$gelar_dpn	 	= $data_peserta1['gelar_dpn'];
					$nama		 	= $data_peserta1['nama'];
					$gelar_blk	 	= $data_peserta1['gelar_blk'];
					$jabatan	 	= $data_peserta1['jabatan'];
					$golongan	 	= $data_peserta1['golongan'];
					$skpd		 	= $data_peserta1['skpd'];
					$instansi	 	= $data_peserta1['instansi'];
					$no_telp	 	= $data_peserta1['no_telp'];
					$nip		 	= $data_peserta1['nip'];
					
					$sql_peserta2	= "select * from jabatan where id_jabatan='$id_jabatan' ";
					$mysql_peserta2	= mysqli_query ($conn, $sql_peserta2);
					$data_peserta2	= mysqli_fetch_array($mysql_peserta2);
					$nama_jabatan	= $data_peserta2['nama_jabatan'];
					$esselon		= $data_peserta2['esselon'];
	
	
		if ($gelar_blk =='')
		{
		$namalengkap	= $gelar_dpn;
		$namalengkap	.= ' ';
		$namalengkap	.= $nama;
		}
		else
		{
		$namalengkap	= $gelar_dpn;
		$namalengkap	.= ' ';
		$namalengkap	.= $nama;
		$namalengkap	.= ', ';
		$namalengkap	.= $gelar_blk;
		}
					
					
					?>
                                        
                                           
                                            <tr>
											 	<td><?php echo $i; ?></td>
                                                <td><?php echo $namalengkap; ?> <br /> <?php echo $golongan; ?> <br /> NIP. <?php echo $nip; ?></td>
                                                <td><?php echo $jabatan; ?> <br /><?php echo $skpd; ?> <br />
												<?php echo $instansi; ?></td>
												<td><?php echo $nama_jabatan; ?> (<?php echo $esselon; ?>)</td>
                                                <td>
												<a href="<?php echo "file-peserta-detail.php?id=$id_pilih" ?>" > <button type="button" class="btn btn-warning btn-circle-lg"><i class="fa fa-download"></i> Detail</button></a>		  
												
												</td>
                                                
                                            </tr>
                                       
				<?PHP
       			 $i++;
        			}
    			?> </tbody>
                                        <tfoot>
                                            <tr>
                                               <th width="5%">No</th>
                                                <th width="35%">Nama / Pangkat / NIP</th>
												<th width="25%">Jabatan</th>
												<th width="25%">Jabatan Yang Dilamar</th>
                                                <th width="10%">Act</th>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>