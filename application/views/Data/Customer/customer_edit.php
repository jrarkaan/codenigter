
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card shadow-sm mb-8 border-bottom-primary ">
			<div class="card-header bg-white py-3">
				<div class="row">
					<div class="col">
						<h4 class="h5 align-middle m-0 font-weight-bold text-primary">
							Form Edit Pelanggan
						</h4>
					</div>
					<div class="col-md-2">
						<a href="<?= site_url('customer')?>" class="btn btn-sm btn-secondary btn-icon-split">
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
						<label class="col-md-4 text-md-right" for="namacustomer">Nama Pelanggan</label>
						<div class="col-md-6">
							<input value="<?= $row->id_customer?>" type="hidden" name="customer_id" id="customer_id">
							<input value="<?= $this->input->post('namacustomer') ? $this->input->post('namacustomer') : $row->namacustomer?>" type="text" id="namacustomer" name="namacustomer" class="form-control" placeholder="Nama customernya..">
							<?= form_error('namacustomer', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-md-4 text-md-right" for="keterangan">Keterangan</label>
						<div class="col-md-6">
							<textarea value="<?= $this->input->post('keterangan') ? $this->input->post('keterangan') : $row->keterangan?>"type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"><?= $row->keterangan ?></textarea>
							<?= form_error('keterangan', '<span class="text-danger small">', '</span>'); ?>
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
