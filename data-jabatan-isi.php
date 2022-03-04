 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Jabatan Selter</h4>
                                <h6 class="card-subtitle">Pemerintah Kota Banjarbaru</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="75%">Jabatan</th>
                                                <th width="10%">Esselon</th>
                                                <th width="15%">Act</th>
                                                
                                            </tr>
                                        </thead>
										<tbody>
										
					<?PHP
				 	
              	 	$jml_data1 	= "SELECT * FROM periode where status='Aktif' ";
					$query		= mysqli_query($conn, $jml_data1);
					$data = mysqli_fetch_array($query);
					$id_periode	= $data['id_periode'];
					
					$i 			= 1;
						$jml_data11 	= "SELECT * FROM jabatan where id_periode='$id_periode' ";
					$query1		= mysqli_query($conn, $jml_data11);
					
					
        			while($data1 = mysqli_fetch_array($query1))
					{
					
				
					
					
				
					
					$nama_jab		= $data1['nama_jabatan'];
					$eselon			= $data1['esselon'];
					$id_jabatan		= $data1['id_jabatan'];
					
					
					?>
                                        
                                           
                                            <tr>
                                                <td><?php echo $nama_jab; ?></td>
                                                <td><?php echo $eselon; ?></td>
                                                <td>
												<a href="assets/<?php echo "hapus-jabatan.php?id=$id_jabatan" ?>" class="dropdown-item">  <i class="fas fa-eye"></i> Hapus</a>		  
												
												</td>
                                                
                                            </tr>
                                       
				<?PHP
       			 $i++;
        			}
    			?> </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="75%">Jabatan</th>
                                                <th width="10%">Esselon</th>
                                                <th width="15%">Act</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>