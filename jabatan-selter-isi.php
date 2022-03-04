 <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex no-block align-items-center">
                                    <div>
                                        <h4 class="card-title">Jabatan Yang Akan Diisi Melalui Seleksi Terbuka</h4>
                                        <h6 class="card-subtitle"> Pemerintah Kota Banjarbaru </h6>
                                    </div>
                                </div>
                                <form class="form"  action='assets/input-jabatan.php' method='post' enctype='multipart/form-data'>
                                    <div class="form-group mt-4 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Periode Selter</label>
                                      
										 <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?php echo $bulan; ?> Tahun <?php echo $tahun; ?>" disabled="disabled">
											<input class="form-control" type="hidden" value="<?php echo $id_periode; ?> " name="id_periode">
                                        </div>
										
                                    </div>
                                   
									 <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Nama Jabatan</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" placeholder="Nama Jabatan" id="example-number-input" name="nama_jabatan" required>
                                        </div>
                                    </div>
									  <div class="form-group row">
                                        <label for="example-month-input" class="col-md-2 col-form-label">Esselon</label>
                                        <div class="col-md-10">
                                                <select name="esselon" class="custom-select col-12" id="inlineFormCustomSelect" required>
												<option value="">Esselon</option>
                                           			<option value="II.a"> Esselon II.a </option>
													<option value="II.b"> Esselon II.b </option>
                                        	</select>
                                        </div>
                             
                                    </div>
									
                                   
                                 
                                        <button type="reset"
                                            class="btn btn-inverse waves-effect waves-light">Reset Form</button> 
											<button type="submit"
                                            class="btn btn-success waves-effect waves-light mr-2">Input Jabatan</button>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>