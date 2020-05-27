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
										<th>#</th>
										<th>Id Transaksi</th>
										<th>Tanggal Masuk</th>
										<th>Tanggal Keluar</th>
										<th>Customer</th>
										<th>Pegawai</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php 
									foreach ($transaksi as $value): ?>
										<tr>
											<td><?php echo $i?></td>
											<td><?php echo $value->id_transaksi ?></td>
											<td><?php echo $value->tanggal_masuk ?></td>
											<td><?php echo $value->tanggal_keluar ?></td>
											<td><?php echo $value->nama_customer ?></td>
											<td><?php echo $value->nama_pegawai ?></td>
											<td><?php echo $value->status ?></td>
											<td>
												<a href="<?php echo base_url("transaksi/detail/".$value->id_transaksi) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Detail</a>
											</td>
										</tr>
										<?php $i++ ?>
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