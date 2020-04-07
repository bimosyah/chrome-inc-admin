<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<div class="card-body">
							<table id="datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Jabatan</th>
										<th>Username</th>
										<th>No Telp</th>
										<th>Alamat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($pegawai as $value): ?>
										<tr>
											<td><?php echo $value->nama_pegawai?></td>
											<td><?php echo $value->jabatan ?></td>
											<td><?php echo $value->username ?></td>
											<td><?php echo $value->no_telp ?></td>
											<td><?php echo $value->alamat ?></td>
											<td>
												<a href="<?php echo base_url("pegawai/edit/{$value->id_pegawai}") ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
												<a href="<?php echo base_url("pegawai/delete/{$value->id_pegawai}") ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
											</td>
										</tr>
									<?php endforeach;?>

								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('include/footer'); ?>