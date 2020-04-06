<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<div class="card-body">
							<table id="table_pegawai" class="table table-bordered table-hover">
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
									<tr>
										<td>Bimo</td>
										<td>Bos</td>
										<td>Bimo</td>
										<td>081233045596</td>
										<td>Jl Jaya Srani IV </td>
										<td>
											<a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
											<a href="#" class="btn btn-sm btn-danger"><i class="fas fa-edit"></i> Hapus</a>
										</td>
									</tr>
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