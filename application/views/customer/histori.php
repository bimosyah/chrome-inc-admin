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
										<th>Tanggal Masuk</th>
										<th>Tanggal Keluar</th>
										<th>Status</th>
										<th>Detail transaksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									$status = "";
									$color = "";
									foreach ($histori as $value): ?>
										<?php 
										if ($value->id_status == 1) {
											$color = "#E30029";
											$status = "Menunggu";
										}else if ($value->id_status == 2) {
											$color = "#FFF6AA";
											$status = "Dikerjakan";
										}else {
											$color = "#0ACF83";
											$status = "Selesai";
										}
										?>
										<tr>
											<td><?php echo $no?></td>
											<td><?php echo $value->tanggal_masuk?></td>
											<td><?php echo $value->tanggal_keluar ?></td>
											<td style="background: <?php echo $color ?>"><?php echo $status ?></td>
											<td>
												<a href="<?php echo base_url("transaksi/detail/".$value->id_transaksi) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Detail</a>
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