 <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex no-block align-items-center">
                                    <div>
                                        <h4 class="card-title">Upload File</h4>
                                        <h6 class="card-subtitle">Persyaratan Seleksi Terbuka</h6>
                                    </div>
                                </div>
                                <form class="form" action='assets/input-file-upload-9.php' method='post' enctype='multipart/form-data'>
                                    <div class="form-group mt-4 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Bukti Laporan SPT Tahunan</label>
                                        <div class="col-md-10">
                                           <input type="file" name="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp" required>
										   <span class="help-block"><small>Scan Fotocopy Bukti Laporan SPT Tahunan terakhir yang telah dilegalisir oleh pejabat yang berwenang</small></span>
										  <input type="hidden" name="id_pilih" value="<?php echo $id_pilih;?>">
										  <input type="hidden" name="nip" value="<?php echo $nip;?>">

                                        </div>
										
                                    </div>
									
									
                                   
                                   
                                 
                                        <button type="reset"
                                            class="btn btn-inverse waves-effect waves-light">Reset Form</button> 
											<button type="submit"
                                            class="btn btn-success waves-effect waves-light mr-2">Upload File</button>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>