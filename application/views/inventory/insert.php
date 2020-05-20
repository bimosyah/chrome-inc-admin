<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7">
					<div class="card card-info">
						<?php echo ($this->uri->segment(2) == "edit" ? form_open('inventory/update/'.$this->uri->segment(3), 'class="form-horizontal"') : form_open('inventory/save', 'class="form-horizontal"')); ?>
						<div class="card-body">
							<div class="form-group row">
								<label for="nama_inv" class="col-sm-2 col-form-label">Nama</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nama_inv" id="nama_inv" 
									value="<?php echo (isset($inventory[0]->nama_inv) ? $inventory[0]->nama_inv : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" name="jumlah" id="jumlah" 
									value="<?php echo (isset($inventory[0]->jumlah) ? $inventory[0]->jumlah : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="satuan" id="satuan" 
									value="<?php echo (isset($inventory[0]->satuan) ? $inventory[0]->satuan : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" name="harga_beli" id="harga_beli" 
									value="<?php echo (isset($inventory[0]->harga_beli) ? $inventory[0]->harga_beli : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="keterangan" id="keterangan" 
									value="<?php echo (isset($inventory[0]->keterangan) ? $inventory[0]->keterangan : "") ?>">
								</div>
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-info">Simpan</button>
							<button type="reset" class="btn btn-default float-right">Cancel</button>
						</div>
						<!-- /.card-footer -->
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('include/footer'); ?>