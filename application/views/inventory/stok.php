<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7">
					<div class="card card-info">
						<?php echo form_open('inventory/update-stok/'.$this->uri->segment(3)) ?>
						<div class="card-body">
							
							<div class="form-group row">
								<label for="nama_inv" class="col-sm-2 col-form-label">Sisa Stok</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" value="<?php echo $inventory[0]->stok ?>" >
								</div>
							</div>

							<div class="form-group row">
								<label for="nama_inv" class="col-sm-2 col-form-label">Tambah Stok</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="stok" id="stok" >
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