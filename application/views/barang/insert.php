<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<?php echo ($this->uri->segment(2) == "edit" ? form_open('barang/update/'.$this->uri->segment(3), 'id="form_barang" class="form-horizontal"') : form_open('barang/save', 'id="form_barang" class="form-horizontal"')); ?>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-4">
									<fieldset class="border p-2">
										<legend  class="w-auto">Barang</legend>
										<div class="form-group">
											<label for="kode_barang">Kode Barang</label>
											<div class="col-sm-12">
												<input type="text" class="form-control" name="kode_barang" id="kode_barang" 
												value="<?php echo (isset($barang[0]->kode_barang) ? $barang[0]->kode_barang : "") ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="nama_barang">Nama Barang</label>
											<div class="col-sm-12">
												<input type="text" class="form-control" name="nama_barang" id="nama_barang" 
												value="<?php echo (isset($barang[0]->nama_barang) ? $barang[0]->nama_barang : "") ?>">
											</div>
										</div>
									</fieldset>
								</div>
								<div class="col-lg-8">
									<fieldset class="border p-2">
										<legend  class="w-auto">Total</legend>
										<div class="col-lg-12">
											<h1 id="text_total_harga" style="font-size: 50px;"><?php echo (isset($barang[0]->total_harga) ? "Rp. ".$barang[0]->total_harga : "Rp. 0") ?></h1>
										</div>
										<br>
										<div class="col-lg-4">
											<div <?php echo ($this->uri->segment(2) == "cek" ? 'style="display: none"' : "") ?>>
												<button type="submit" class="btn btn-info">Simpan</button>
												<button type="reset" class="btn btn-default">Cancel</button>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12">
									<fieldset class="border p-2">
										<legend  class="w-auto">Data Barang</legend>
										<div class="row">
											<div class="col-lg-4">
												<div class="form-group">
													<label for="ongkos_seleb">Ongkos Seleb</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="ongkos_seleb" id="ongkos_seleb" 
														value="<?php echo (isset($barang[0]->ongkos_seleb) ? $barang[0]->ongkos_seleb : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="bahan_seleb">Bahan Seleb</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="bahan_seleb" id="bahan_seleb" 
														value="<?php echo (isset($barang[0]->bahan_seleb) ? $barang[0]->bahan_seleb : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="ongkos_crom">Ongkos Crom</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="ongkos_crom" id="ongkos_crom" 
														value="<?php echo (isset($barang[0]->ongkos_crom) ? $barang[0]->ongkos_crom : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="bahan_crom">Bahan Crom</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="bahan_crom" id="bahan_crom" 
														value="<?php echo (isset($barang[0]->bahan_crom) ? $barang[0]->bahan_crom : "") ?>">
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label for="ongkos_hapus_cat">Ongkos Hapus Cat</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="ongkos_hapus_cat" id="ongkos_hapus_cat" 
														value="<?php echo (isset($barang[0]->ongkos_hapus_cat) ? $barang[0]->ongkos_hapus_cat : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="marketing">Marketing</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="marketing" id="marketing" 
														value="<?php echo (isset($barang[0]->marketing) ? $barang[0]->marketing : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="listrik">Listrik</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="listrik" id="listrik" 
														value="<?php echo (isset($barang[0]->listrik) ? $barang[0]->listrik : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="pengepakan_barang">Pengepakan Barang</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="pengepakan_barang" id="pengepakan_barang" 
														value="<?php echo (isset($barang[0]->pengepakan_barang) ? $barang[0]->pengepakan_barang : "") ?>">
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label for="bonus">Bonus</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="bonus" id="bonus" 
														value="<?php echo (isset($barang[0]->bonus) ? $barang[0]->bonus : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="peralatan">Peralatan</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="peralatan" id="peralatan" 
														value="<?php echo (isset($barang[0]->peralatan) ? $barang[0]->peralatan : "") ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="omset_pabrik">Omset Pabrik</label>
													<div class="col-sm-12">
														<input type="number" class="form-control" name="omset_pabrik" id="omset_pabrik" 
														value="<?php echo (isset($barang[0]->omset_pabrik) ? $barang[0]->omset_pabrik : "") ?>">
													</div>
												</div>
												<div class="form-group" <?php echo ($this->uri->segment(2) == "cek" ? 'style="display: none"' : "") ?>>
													<label for="omset_pabrik">Hitung Total</label>
													<div class="col-sm-12">
														<button type="button" onclick="hitung_total()" class="btn btn-info col-sm-12">Hitung</button>
														<input type="hidden" class="form-control" name="total_harga" id="total_harga" value="<?php echo (isset($barang[0]->total_harga) ? $barang[0]->total_harga : "") ?>">
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('include/footer'); ?>