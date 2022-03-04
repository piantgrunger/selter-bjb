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
                                               <th width="65%">Jabatan</th>
                                                <th width="10%">Esselon</th>
                                                <th width="25%">Act</th>
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
                                                <td><?php echo $nama_jabatan; ?></td>
                                                <td><?php echo $esselon; ?></td>
                                                <td>
												 <a href="<?php echo "file-upload.php?id=$id_pilih" ?>" ><button class="btn btn-outline-primary waves-effect waves-light" type="button">
												 <span class="btn-label"><i class="far fa-file-pdf"></i></span> Upload File Persyaratan</button></a>
												
												
												
												</td>
                                                
                                            </tr>
                                       
				<?PHP
       			 $i++;
        			}
    			?> </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="65%">Jabatan</th>
                                                <th width="10%">Esselon</th>
                                                <th width="25%">Act</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>