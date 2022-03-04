 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Periode Selter</h4>
                                <h6 class="card-subtitle">Pemerintah Kota Banjarbaru</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tahun</th>
                                                <th>Bulan</th>
                                                <th>Status</th>
                                                <th>Act</th>
                                                
                                            </tr>
                                        </thead>
										
										
					<?PHP
				 	$i 			= 1;
              	 	$jml_data1 	= "SELECT * FROM periode order by id_periode ";
					$query		= mysqli_query($conn, $jml_data1);
		
        			while($data = mysqli_fetch_array($query))
					{
					$id_periode	= $data['id_periode'];
					$tahun		= $data['tahun'];
					$bulan		= $data['bulan'];
					$status		= $data['status'];
					?>
                                        <tbody>
                                           
                                            <tr>
                                                <td><?php echo $tahun; ?></td>
                                                <td><?php echo $bulan; ?></td>
                                                <td><?php echo $status; ?></td>
                                                <td>
												<?php
														
														if ($status=='Aktif')
														{
														
														?>
														<div class="btn-group">
														<button type="button" class="btn btn-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-eye"></i>
															Aktif
														</button>
														<div class="dropdown-menu">
														
															<a href="assets/<?php echo "nonaktifkan-periode.php?id=$id_periode" ?>" class="dropdown-item" > <i class="fas fa-eye-slash"></i> Non Aktifkan</a>
														</div>
														</div>
														<?php
														}
														else
														{
														?>
														
														<div class="btn-group">
														<button type="button" class="btn btn-info dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-eye-slash"></i>
															Non Aktif
														</button>
														<div class="dropdown-menu">
															
															<a href="assets/<?php echo "aktifkan-periode.php?id=$id_periode" ?>" class="dropdown-item">  <i class="fas fa-eye"></i> Aktifkan</a>
														</div>
														</div>
														<?php
														}
														
													
							
														?>						  
												
												
												</td>
                                                
                                            </tr>
                                        </tbody>
				<?PHP
       			 $i++;
        			}
    			?>
                                        <tfoot>
                                            <tr>
                                                <th>Tahun</th>
                                                <th>Bulan</th>
                                                <th>Status</th>
                                                <th>Act</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>