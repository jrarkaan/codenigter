<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card shadow-sm mb-8 border-bottom-primary ">
			<div class="card-header bg-white py-3">
				<div class="row">
					<div class="col">
						<h4 class="h5 align-middle m-0 font-weight-bold text-primary">
							Form Tambah Kategori Mobil
						</h4>
					</div>
					<div class="col-md-2">
						<a href="<?= site_url('category')?>" class="btn btn-sm btn-secondary btn-icon-split">
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
						<label class="col-md-4 text-md-right" for="category_name">Nama Kategori</label>
						<div class="col-md-6">
							<input value="<?= set_value('category_name') ?>" type="text" id="category_name" name="category_name" class="form-control" placeholder="Nama Kategori....!">
							<?= form_error('category_name', '<span class="text-danger small">', '</span>'); ?>
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
