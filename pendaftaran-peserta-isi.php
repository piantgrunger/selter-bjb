 <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex no-block align-items-center">
                                    <div>
                                        <h4 class="card-title">Pendaftaran Peserta Seleksi Terbuka</h4>
                                        <h6 class="card-subtitle"> Pemerintah Kota Banjarbaru </h6>
                                    </div>
                                </div>
                                <form class="form" action='assets/input-peserta.php' method='post' enctype='multipart/form-data'>
                                    <div class="form-group mt-4 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Nama Pegawai</label>
                                        <div class="col-md-2">
                                            <input class="form-control"	name="nama1" type="text" placeholder="Gelar Depan" >
                                        </div>
										 <div class="col-md-6">
                                            <input class="form-control"	name="nama2" type="text" placeholder="Nama Lengkap" required>
                                        </div>
										 <div class="col-md-2">
                                            <input class="form-control"	name="nama3" type="text" placeholder="Gelar Belakang" >
                                        </div>
										  <div class="col-md-2">
                                            <input class="form-control"	name="id_periode" type="hidden" value="<?php echo $id_periode;?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">NIP Pegawai</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="nip" type="number" maxlength="18"  placeholder="NIP Tanpa Spasi" required>
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Jabatan</label>
                                        <div class="col-md-10">
                                            <input class="form-control"	name="jabatan" type="text" placeholder="Jabatan Saat ini" id="example-number-input" required>
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label for="example-month-input" class="col-md-2 col-form-label">Pangkat / Golongan</label>
                                        <div class="col-md-10">
                                                <select name="golongan" class="custom-select col-12" id="inlineFormCustomSelect" required>
												<option value="">Pangkat / Golongan</option>
                                           			<?php
													include "assets/combo/golongan.php";
													for ($i=0;$i<$count;$i++)
													{
													echo "<option value='$kategori[$i]'>$kategori[$i]";
													}
													?>
                                        	</select>
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">SKPD</label>
                                        <div class="col-md-10">
                                            <input class="form-control"	name="skpd" type="text" placeholder="Nama SKPD" id="example-number-input" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Instansi</label>
                                        <div class="col-md-10">
                                            <input class="form-control"	name="instansi" type="text" value="Pemerintah Kota Banjarbaru" required
                                                id="example-email-input">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">No Telp/HP</label>
                                        <div class="col-md-10">
                                            <input class="form-control"	name="telp" type="number"  placeholder="No Telp/HP" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Password</label>
                                        <div class="col-md-10">
                                            <input class="form-control"	name="pswd" type="password" placeholder="Masukkan Password untuk Login" required
                                                id="example-password-input">
                                        </div>
                                    </div>
                                   
                                 
                                        <button type="reset"
                                            class="btn btn-inverse waves-effect waves-light">Reset Form</button> 
											<button type="submit"
                                            class="btn btn-success waves-effect waves-light mr-2">Daftar Peserta Selter</button>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>