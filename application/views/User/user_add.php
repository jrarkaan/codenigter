<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card shadow-sm mb-8 border-bottom-primary ">
			<div class="card-header bg-white py-3">
				<div class="row">
					<div class="col">
						<h4 class="h5 align-middle m-0 font-weight-bold text-primary">
							Form Tambah Admin
						</h4>
					</div>
					<div class="col-md-2">
						<a href="<?= site_url('user')?>" class="btn btn-sm btn-secondary btn-icon-split">
							<span class="icon">
								<i class="fa fa-arrow-left"></i>
							</span>
							<span class="text">
								Kembali
							</span>
						</a>
					</div>
				</div>
			</div>
			<form method="post" action="">
				<div class="card-body pb-2">
					<div class="row form-group">
						<label class="col-md-4 text-md-right" for="fullname">Nama</label>
						<div class="col-md-6">
							<input value="<?= set_value('fullname') ?>" type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama lengkap anda...">
							<?= form_error('fullname', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-md-4 text-md-right" for="username">Username</label>
						<div class="col-md-6">
							<input value="<?= set_value('username') ?>" type="text" id="username" name="username" class="form-control" placeholder="Username...">
							<?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group ">
						<label class="col-md-4 text-md-right" for="password">Password</label>
						<div class="col-md-6">
							<input value="<?= set_value('password') ?>" type="password" id="password" name="password" class="form-control" placeholder="password...">
							<?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group ">
						<label class="col-md-4 text-md-right" for="passconf">Password Confirmation</label>
						<div class="col-md-6">
							<input value="" type="password" id="passconf" name="passconf" class="form-control" placeholder= "konfirmasi password...">
							<?= form_error('passconf', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-md-4 text-md-right" for="address">Address</label>
						<div class="col-md-6">
							<textarea value="<?=set_value('address')?>"type="text" name="address" id="address" class="form-control" placeholder="Alamat Rumahnya ya..."></textarea>
							<?= form_error('address', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-md-4 text-md-right" for="level">Level</label>
						<div class="col-md-5">
							<div class="input-group">
								<select name="level" id="level" class="custom-select">
									<option value="">- Pilih -</option>
									<option value="1"<?= set_value('level') == 1 ? "selected" : null ?> >Admin Utama</option>
									<option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Admin Pembantu</option>
								</select>
							</div>
							<?= form_error('level', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group justify-content-end">
						<div class="col-md-8">
							<button type="submit" class="btn btn-primary btn-icon-split">
								<span class="icon"><i class="fa fa-save"></i></span>
								<span class="text">Simpan</span>
							</button>
							<button type="reset" class="btn btn-secondary">
								Reset
							</button>
						</div>
				</div>
			</form>
		</div>
	</div>
</div>
