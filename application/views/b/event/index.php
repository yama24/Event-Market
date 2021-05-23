<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg">
				<?= $this->session->flashdata('message'); ?>
				<div class="card">
					<div class="card-header">
						<!-- <h3 class="card-title">DataTable with default features</h3> -->
						<a href="<?= base_url('event/add'); ?>" class="btn btn-primary float-right">Add Event</a>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="datatable1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th style="width: 1%;">No.</th>
									<th>Created On</th>
									<th style="width: 20%;">Image</th>
									<th>Event Name</th>
									<th>Slug</th>
									<th>Starts On </th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($event as $e) : ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= date('d F Y', $e['event_date_created']); ?></td>
										<td><img src="<?= base_url('assets/dist/img/event/') . $e['event_image']; ?>" class="img-thumbnail"></td>
										<td><?= $e['event_name']; ?></td>
										<td><?= $e['event_slug']; ?></td>
										<td><?= date('d F Y', $e['event_date']) . " " . date('h:i A', $e['event_time']); ?></td>
										<td><?php if ($e['event_status'] == 1) {
												echo '<p class="badge badge-warning">paid</p><br>';
												echo '<small>Rp. ' . number_format($e['event_price'], 0) . '</small>';
											} else {
												echo '<p class="badge badge-primary">free</p>';
											}; ?></td>
										<td>
											<a href="<?= base_url('event/edit/') . $e['event_id']; ?>" class="badge badge-success">edit</a>
											<a href="<?= base_url('event/delete/') . $e['event_id']; ?>" onclick="return confirm('Are you sure?')" class="badge badge-danger">delete</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No.</th>
									<th>Created On</th>
									<th>Image</th>
									<th>Event Name</th>
									<th>Slug</th>
									<th>Starts On </th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

			</div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->