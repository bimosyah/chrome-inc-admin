<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo $jumlahTransaksi; ?></h3>

							<p>Transaksi</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="<?php echo base_url("transaksi") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?php echo $jumlah_selesai ?></h3>

							<p>Transaksi Selesai</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3><?php echo $jumlah_dikerjakan ?></h3>

							<p>Transaksi Dikerjakan</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?php echo $jumlah_menunggu ?></h3>

							<p>Transaksi Menunggu</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<div class="card">
				<div class="card-header" style="cursor: move;">
					<h3 class="card-title">
						<i class="fas fa-chart-pie mr-1"></i>
						Grafik Omset Per Hari
					</h3>
				</div><!-- /.card-header -->
				<div class="card-body">
					<canvas id="canvas"></canvas>
				</div><!-- /.card-body -->
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('include/footer'); ?>