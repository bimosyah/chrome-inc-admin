<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<div class="card-body">
							<a href="<?php echo base_url("transaksi") ?>" class="btn btn-sm btn-warning">Kembali</a>
							<br><br>
							<table id="datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Id Transaksi</th>
										<th>Nama Barang</th>
										<th>Jumlah Barang</th>
										<th>Harga Total</th>
										<th>Estimasi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php 
									foreach ($detail_transaksi as $value): ?>
										<tr>
											<td><?php echo $i?></td>
											<td><?php echo $value->id_transaksi ?></td>
											<td><?php echo $value->nama_barang ?></td>
											<td><?php echo $value->jumlah_barang ?></td>
											<td><?php echo $value->harga_total ?></td>
											<td><?php echo $value->estimasi ?></td>
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