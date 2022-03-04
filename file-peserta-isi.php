 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data File Persyaratan</h4>
                                <h6 class="card-subtitle">Seleksi Terbuka Pemerintah Kota Banjarbaru</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
												<th width="5%">No</th>
                                                <th width="60%">Nama File</th>
                                                <th width="10%">Status</th>
                                                <th width="15%">Download</th>
												<th width="10%">Act</th>
                                                
                                            </tr>
                                        </thead>
										<tbody>
										<?php
										$sql_file		= "select * from file_peserta where id_pilih='$id_pilih'";
										$mysql_file		= mysqli_query ($conn, $sql_file);
										$data_file		= mysqli_fetch_array($mysql_file);
										$id_file	 	= $data_file['id_file'];
										$file_1		 	= $data_file['file_1'];
										$file_2		 	= $data_file['file_2'];
										$file_3		 	= $data_file['file_3'];
										$file_4		 	= $data_file['file_4'];
										$file_5		 	= $data_file['file_5'];
										$file_6		 	= $data_file['file_6'];
										$file_7		 	= $data_file['file_7'];
										$file_8		 	= $data_file['file_8'];
										$file_9		 	= $data_file['file_9'];
										$file_10		= $data_file['file_10'];
										$file_11		= $data_file['file_11'];
										$file_12		= $data_file['file_12'];
										$file_13		= $data_file['file_13'];
										$file_14		= $data_file['file_14'];
									
										?>
                                            <tr>
                                               	<td align="center" valign="middle">1.</td>
                                                <td valign="middle">Surat Lamaran</td>
                                                <td align="center"><?php 
												if ($file_1 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_1 != '')
												{
												?>
												<a href="assets/<?php echo $file_1; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_1 != '')
												{
												?>
												<a href="<?php echo "file-upload-1.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-1.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">2.</td>
                                                <td valign="middle">Daftar Riwayat Hidup</td>
                                                <td align="center"><?php 
												if ($file_2 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_2 != '')
												{
												?>
												<a href="assets/<?php echo $file_2; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_2 != '')
												{
												?>
												<a href="<?php echo "file-upload-2.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-2.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">3.</td>
                                                <td valign="middle">Fakta Integritas</td>
                                                <td align="center"><?php 
												if ($file_3 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_3 != '')
												{
												?>
												<a href="assets/<?php echo $file_3; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_3 != '')
												{
												?>
												<a href="<?php echo "file-upload-3.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-3.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											<tr>
												<td align="center" valign="middle">4.</td>
                                                <td valign="middle">Surat Keterangan Kesehatan</td>
                                                <td align="center"><?php 
												if ($file_4 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_4 != '')
												{
												?>
												<a href="assets/<?php echo $file_4; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_4 != '')
												{
												?>
												<a href="<?php echo "file-upload-4.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-4.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											<tr>
												<td align="center" valign="middle">5.</td>
                                                <td valign="middle">Surat Keputusan Jabatan Terakhir</td>
                                                <td align="center"><?php 
												if ($file_5 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_5 != '')
												{
												?>
												<a href="assets/<?php echo $file_5; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_5 != '')
												{
												?>
												<a href="<?php echo "file-upload-5.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-5.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											<tr>
												<td align="center" valign="middle">6.</td>
                                                <td valign="middle">Surat Keputusan Kenaikan Pangkat Terakhir</td>
                                                <td align="center"><?php 
												if ($file_6 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_6 != '')
												{
												?>
												<a href="assets/<?php echo $file_6; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_6 != '')
												{
												?>
												<a href="<?php echo "file-upload-6.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-6.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">7.</td>
                                                <td valign="middle">SKP 2 Tahun Terakhir</td>
                                                <td align="center"><?php 
												if ($file_7 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_7 != '')
												{
												?>
												<a href="assets/<?php echo $file_7; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_7 != '')
												{
												?>
												<a href="<?php echo "file-upload-7.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-7.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">8.</td>
                                                <td valign="middle">LHKPN</td>
                                                <td align="center"><?php 
												if ($file_8 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_8 != '')
												{
												?>
												<a href="assets/<?php echo $file_8; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_8 != '')
												{
												?>
												<a href="<?php echo "file-upload-8.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-8.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">9.</td>
                                                <td valign="middle">Bukti Lapor SPT Tahunan Terakhir</td>
                                                <td align="center"><?php 
												if ($file_9 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_9 != '')
												{
												?>
												<a href="assets/<?php echo $file_9; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_9 != '')
												{
												?>
												<a href="<?php echo "file-upload-9.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-9.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">10.</td>
                                                <td valign="middle">Foto Latar Merah</td>
                                                <td align="center"><?php 
												if ($file_10 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_10 != '')
												{
												?>
												<a href="assets/<?php echo $file_10; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_10 != '')
												{
												?>
												<a href="<?php echo "file-upload-10.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-10.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">11.</td>
                                                <td valign="middle">Surat Izin / Rekomendasi dari PPK Daerah Asal</td>
                                                <td align="center"><?php 
												if ($file_11 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_11 != '')
												{
												?>
												<a href="assets/<?php echo $file_11; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_11 != '')
												{
												?>
												<a href="<?php echo "file-upload-11.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-11.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">12.</td>
                                                <td valign="middle">Ijazah</td>
                                                <td align="center"><?php 
												if ($file_12 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_12 != '')
												{
												?>
												<a href="assets/<?php echo $file_12; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_12 != '')
												{
												?>
												<a href="<?php echo "file-upload-12.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-12.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											<tr>
												<td align="center" valign="middle">13.</td>
                                                <td valign="middle">Transkrip Nilai</td>
                                                <td align="center"><?php 
												if ($file_13 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_13 != '')
												{
												?>
												<a href="assets/<?php echo $file_13; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_13 != '')
												{
												?>
												<a href="<?php echo "file-upload-13.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-13.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											<tr>
												<td align="center" valign="middle">14.</td>
                                                <td valign="middle">Sertifikat Pendidikan dan Pelatihan</td>
                                                <td align="center"><?php 
												if ($file_14 != '')
												{
												?>
												 <button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Ada</button>
												<?php
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> Tidak Ada</button>
												<?php
												}
												
												 ?>
												 </td>
                                                <td align="center">
												<?php 
												if ($file_14 != '')
												{
												?>
												<a href="assets/<?php echo $file_14; ?>" target="_blank"><button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-download"></i> Download</button></a>
												<?PHP
												}
												else
												{
												?>
												 <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-times"></i></span> No File</button>
												<?php
												}
												
												 ?>
												 
												</td>
												<td align="center">
												<?php 
												if ($file_14 != '')
												{
												?>
												<a href="<?php echo "file-upload-14.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Update</button></a>
												<?PHP
												}
												else
												{
												?>
												<a href="<?php echo "file-upload-14.php?id=$id_pilih" ?>" ><button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-edit"></i> Input</button></a>
												<?PHP
												}
												
												 ?>
												</td>
                                                
                                            </tr>
											
											
											
											
                                       
										</tbody>
                                        <tfoot>
                                            <tr>
                                               <th width="5%">No</th>
                                                <th width="60%">Nama File</th>
                                                <th width="10%">Status</th>
                                                <th width="15%">Download</th>
												<th width="10%">Act</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>