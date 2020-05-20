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
										<th>Jumlah</th>
										<th>Satuan</th>
										<th>Harga Beli</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($inventory as $value): ?>
										<tr>
											<td><?php echo $no?></td>
											<td><?php echo $value->nama_inv?></td>
											<td><?php echo $value->jumlah ?></td>
											<td><?php echo $value->satuan ?></td>
											<td><?php echo $value->harga_beli ?></td>
											<td><?php echo $value->keterangan ?></td>
											<td>
												<a href="<?php echo base_url("inventory/edit/{$value->id_inventory}") ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
												<a href="<?php echo base_url("inventory/delete/{$value->id_inventory}") ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
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