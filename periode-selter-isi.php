 <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex no-block align-items-center">
                                    <div>
                                        <h4 class="card-title">Periode Pelaksanaan Seleksi Terbuka</h4>
                                        <h6 class="card-subtitle"> Pemerintah Kota Banjarbaru </h6>
                                    </div>
                                </div>
                                <form class="form" action='assets/input-periode.php' method='post' enctype='multipart/form-data'>
                                    <div class="form-group mt-4 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Tahun</label>
                                      
										 <div class="col-md-10">
                                            <input class="form-control" type="text" placeholder="Tahun Pelaksanaan" required name="tahun" value="<?php echo $yearsnow;?>" >
                                        </div>
										
                                    </div>
                                   
									 <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Bulan</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" placeholder="Bulan Pelaksanaan" id="example-number-input" required name="bulan">
                                        </div>
                                    </div>
									
                                   
                                 
                                        <button type="reset"
                                            class="btn btn-inverse waves-effect waves-light">Reset Form</button> 
											<button type="submit"
                                            class="btn btn-success waves-effect waves-light mr-2">Input Periode Selter</button>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>