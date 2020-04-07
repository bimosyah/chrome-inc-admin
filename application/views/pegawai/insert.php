<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7">
					<div class="card card-info">
						<?php echo ($this->uri->segment(2) == "edit" ? form_open('pegawai/update/'.$this->uri->segment(3), 'class="form-horizontal"') : form_open('pegawai/save', 'class="form-horizontal"')); ?>
						<div class="card-body">
							<div class="form-group row">
								<label for="nama_pegawai" class="col-sm-2 col-form-label">Nama</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" 
									value="<?php echo (isset($pegawai[0]->nama_pegawai) ? $pegawai[0]->nama_pegawai : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="jabatan" id="jabatan"
									value="<?php echo (isset($pegawai[0]->jabatan) ? $pegawai[0]->jabatan : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="username" class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="username" id="username"
									value="<?php echo (isset($pegawai[0]->username) ? $pegawai[0]->username : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="password" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" id="password"
									value="<?php echo (isset($pegawai[0]->password) ? $pegawai[0]->password : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" name="no_telp" id="no_telp"
									value="<?php echo (isset($pegawai[0]->no_telp) ? $pegawai[0]->no_telp : "") ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="alamat" id="alamat"
									value="<?php echo (isset($pegawai[0]->alamat) ? $pegawai[0]->alamat : "") ?>">
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