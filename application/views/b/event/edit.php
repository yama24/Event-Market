<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<!-- <form action="<?= base_url('event/add'); ?>" method="post" enctype="multipart/form-data"> -->
		<?= form_open_multipart('event/edit'); ?>
		<div class="row">
			<div class="col-lg">
				<?= $this->session->flashdata('message'); ?>
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header bg-primary">
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="form-group">
									<label for="formGroupExampleInput">Event Name</label>
									<input type="hidden" id="event_id" name="event_id" value="<?= $event['event_id']; ?>">
									<input type="text" class="form-control" id="event_name" name="event_name" value="<?= $event['event_name']; ?>">
									<?= form_error('event_name', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput">Time</label>
									<div class="row">
										<div class="col">
											<input type="date" class="form-control" id="event_date" name="event_date" value="<?= date('Y-m-d', $event['event_date']); ?>">
											<?= form_error('event_time', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class=" col">
											<input type="time" class="form-control" id="event_time" name="event_time" value="<?= date('H:i', $event['event_time']); ?>">
											<?= form_error('event_date', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput">Description</label>
									<textarea class="form-control" name="event_description" id="event_description"><?= $event['event_description']; ?></textarea>
									<?= form_error('event_description', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header bg-primary">
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<label for="formGroupExampleInput">Image <small class="text-muted">max : 2mb</small></label>
								<div class="form-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="event_image" name="event_image" onchange="previewImage();">
										<label class="custom-file-label text-truncate" for="event_image"><?= $event['event_image']; ?></label>
										<?= form_error('event_image', '<small class="text-danger pl-3">', '</small>'); ?>
										<?= $this->session->flashdata('size'); ?>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<img id="image-preview" alt="image-preview" src="<?= base_url('assets/dist/img/event/') . $event['event_image']; ?>" class="img-fluid mb-3">
									</div>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="1" id="event_status" name="event_status" <?php if ($event['event_status'] == 1) echo 'checked'; ?>>
										<label class="form-check-label" for="event_status">
											Paid?
										</label>
									</div>
								</div>
								<div class="form-group" id="price" <?php if ($event['event_status'] == 0) echo 'style="display: none;"'; ?>>
									<label for="formGroupExampleInput">Price</label>
									<input type="text" class="form-control" id="event_price" name="event_price" placeholder="Event Price" value="<?= $event['event_price']; ?>">
									<?= form_error('event_price', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="reset" class="btn btn-block btn-warning">Reset</button>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->

					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
		</form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->