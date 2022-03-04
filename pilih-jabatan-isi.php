 <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex no-block align-items-center">
                                    <div>
                                        <h4 class="card-title">Jabatan Yang Akan Dilamar</h4>
                                        <h6 class="card-subtitle"> Selter Pemerintah Kota Banjarbaru </h6>
                                    </div>
                                </div>
                                <form class="form" action='assets/input-pilih-jabatan.php' method='post' enctype='multipart/form-data'>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-md-2 col-form-label">Pilih Jabatan</label>
                                        <div class="col-md-10">
                                                <select name="id_jabatan" class="custom-select col-12" id="inlineFormCustomSelect" required>
												<option value="">Pilih Jabatan Yang Akan dilamar</option>
                                           			<?php
													include "assets/combo/jabatan.php";
													for ($i=0;$i<$count;$i++)
													{
													echo "<option value='$id[$i]'>$kategori[$i]";
													}
													?>
                                        	</select>
											<input class="form-control" type="hidden" name="id_peserta" value="<?php echo $id_peserta;?>" >
											<input class="form-control" type="hidden" name="id_periode" value="<?php echo $id_periode;?>" >
                                        </div>
                                    </div>
                                   
									
                                        <button type="reset"
                                            class="btn btn-inverse waves-effect waves-light">Reset Form</button> 
											<button type="submit"
                                            class="btn btn-success waves-effect waves-light mr-2">Pilih Jabatan</button>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>