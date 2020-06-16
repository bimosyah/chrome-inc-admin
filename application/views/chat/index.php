<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<!-- DIRECT CHAT -->
					<div class="card direct-chat direct-chat-primary">
						<div class="card-header">
							<h3 class="card-title">Direct Chat</h3>

							<div class="card-tools">
								
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="direct-chat-messages" style="height: 400px">
								<?php foreach ($chat as $value): ?>
									<?php if ($value->sender == 0): ?>
										<div class="direct-chat-msg right">
											<div class="direct-chat-infos clearfix">
												<span class="direct-chat-name float-right">Admin web</span>
												<span class="direct-chat-timestamp float-left"><?php echo $value->timestamp ?></span>
											</div>
											<img class="direct-chat-img" src="<?php echo base_url('assets/icon/user.png') ?>" alt="message user image">
											<div class="direct-chat-text">
												<?php echo $value->message ?>
											</div>
										</div>
										<?php else: ?>
											<div class="direct-chat-msg">
												<div class="direct-chat-infos clearfix">
													<span class="direct-chat-name float-left">Owner</span>
													<span class="direct-chat-timestamp float-right"><?php echo $value->timestamp ?></span>
												</div>
												<img class="direct-chat-img" src="<?php echo base_url('assets/icon/user.png') ?>" alt="message user image">
												<div class="direct-chat-text">
													<?php echo $value->message ?>
												</div>
											</div>
										<?php endif; ?>
										<?php endforeach ?>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<form action="<?php echo base_url('pesan/insert') ?>" method="post">
										<div class="input-group">
											<input type="text" name="message" placeholder="Type Message ..." class="form-control">
											<span class="input-group-append">
												<button type="submit" class="btn btn-primary">Send</button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('include/footer'); ?>