<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title" style="color: #00008B">Data User</h3>
		<?php
		$notif = $this->session->flashdata('notif');
		if ($notif != NULL) {
			echo '
					<div class="alert alert-danger">' . $notif . '</div>
				';
		}
		?>
		<div class="row">
			<div class="col-md-12">
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-body">
						<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_tambah_user">Tambah User</button>
						<br>

						<table class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama User</th>
									<th>Username</th>
									<th>Level</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								if ($user == NULL) {
									echo '
											<tr><td colspan="3" align="center">Data Kosong</td></tr>
										';
								} else {
									foreach ($user as $l) {
										echo '
											<tr>
												<td>' . $no . '</td>
												<td>' . $l->name . '</td>
												<td>' . $l->username . '</td>
												<td>' . $l->level . '</td>
												<td>
													<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_ubah_user" id="btnUbah" data-id="' . $l->id . '">Ubah</a>
													<a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus_user" id="btnHapus" data-id="' . $l->id . '">Hapus</a>
												</td>
											</tr>
										';
										$no++;
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="modal_tambah_user" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah User</h4>
			</div>
			<form action="<?php echo base_url('user/tambah'); ?>" method="post">
				<div class="modal-body">
					<input type="text" class="form-control" placeholder="Nama" name="name">
					<br>
					<input type="text" class="form-control" placeholder="Username" name="username">
					<br>
					<input type="password" class="form-control" placeholder="Password" name="password">
					<br>
					<select name="level_id" class="form-control">
						<option value="" disabled hidden selected>Pilih Level</option>
						<?php
						foreach ($level as $l) {
							echo '
									<option value="' . $l->id . '">' . $l->name . '</option>
								';
						}
						?>
					</select>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="submit" value="SIMPAN">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="modal_ubah_user" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Ubah User</h4>
			</div>
			<form action="<?php echo base_url('user/ubah'); ?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="id" id="ubah_id_user">
					<input type="text" class="form-control" placeholder="Nama" name="name" id="ubah_name">
					<br>
					<input type="text" class="form-control" placeholder="Username" name="username" id="ubah_username">
					<br>
					<input type="password" class="form-control" placeholder="Password (Opsional)" name="password">
					<br>
					<select name="level_id" class="form-control" id="ubah_level_id">
						<option value="" disabled hidden selected>Pilih Level</option>
						<?php
						foreach ($level as $l) {
							echo '
									<option value="' . $l->id . '">' . $l->name . '</option>
								';
						}
						?>
					</select>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="submit" value="SIMPAN">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="modal_hapus_user" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Konfirmasi Hapus User</h4>
			</div>
			<form action="<?php echo base_url('user/hapus'); ?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="id" id="hapus_id_user">
					<p>Apakah anda yakin menghapus user <b><span id="hapus_nama"></span></b> ?</p>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-danger" name="submit" value="YA">
					<button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).on("click", "#btnUbah", function() {
		var id = $(this).data('id');
		$.getJSON('<?php echo base_url(); ?>user/get_data_user_by_id/' + id, function(data) {
			$('#ubah_id_user').val(data.id);
			$("#ubah_name").val(data.name);
			$("#ubah_username").val(data.username);
			$("#ubah_level_id option").each(function() {
				if ($(this).val() == data.level_id) {
					$(this).attr("selected", "selected");
				}
			});
		});
	});

	$(document).on("click", "#btnHapus", function() {
		var id = $(this).data('id');
		$("#hapus_id_user").val(id);
		$.getJSON('<?php echo base_url(); ?>index.php/user/get_data_user_by_id/' + id, function(data) {
			$('#hapus_id_user').val(data.id);
			$("#hapus_nama").html(data.name);
		});
	});
</script>
