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
										<th>No</th>
										<th>Kode Barang</th>
										<th>Nama Barang</th>
										<th>Total Harga Jasa</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($barang as $value): ?>
										<tr>
											<td><?php echo $no?></td>
											<td><?php echo $value->kode_barang?></td>
											<td><?php echo $value->nama_barang ?></td>
											<td><?php echo "Rp. ".number_format($value->total_harga) ?></td>
											<td>
												<a href="<?php echo base_url("barang/cek/{$value->id_barang}") ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Lihat Detail</a>
												<a href="<?php echo base_url("barang/edit/{$value->id_barang}") ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
												<a href="<?php echo base_url("barang/delete/{$value->id_barang}") ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
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