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
										<th>Nama</th>
										<th>No Telp</th>
										<th>Alamat</th>
										<th>Histori transaksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($customer as $value): ?>
										<tr>
											<td><?php echo $no?></td>
											<td><?php echo $value->nama_customer?></td>
											<td><?php echo $value->no_telp ?></td>
											<td><?php echo $value->alamat ?></td>
											<td>
												<a href="<?php echo base_url("customer/histori/".$value->id_customer) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Detail</a>
											</td>
										</tr>
									<?php 
									$no++;
									endforeach;?>

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