<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card shadow-sm mb-8 border-bottom-primary ">
			<div class="card-header bg-white py-3">
				<div class="row">
					<div class="col">
						<h4 class="h5 align-middle m-0 font-weight-bold text-primary">
							Form Tambah Mobil
						</h4>
					</div>
					<div class="col-md-2">
						<a href="<?= site_url('car')?>" class="btn btn-sm btn-secondary btn-icon-split">
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
						<label class="col-md-4 text-md-right" for="namamobil">Nama Mobil</label>
						<div class="col-md-6">
							<input value="<?= set_value('namamobil') ?>" type="text" id="namamobil" name="namamobil" class="form-control" placeholder="Nama Mobilnya... Coi!">
							<?= form_error('namamobil', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
          <div class="row form-group">
						<label class="col-md-4 text-md-right" for="plat">Plat Mobil</label>
						<div class="col-md-6">
							<input value="<?= set_value('plat') ?>" type="text" id="plat" name="plat" class="form-control" placeholder="Plat Mobilnya ya..!">
							<?= form_error('plat', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="row form-group">
          	<label class="col-md-4 text-md-right" for="category_name">Jenis Mobil</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <select name="category_name" id="category_name" class="custom-select">
                            <option value="" selected disabled>Pilih Jenis Mobil</option>
                              	<?php foreach ($category->result() as $key => $data) { ?>
                                    <option value="<?= $data->category_id ?>" <?=$data->category_id == $row->category_id ? "selected" : null ?>><?= $data->name ?></option>
                                <?php } ?>
                        </select>
                  	</div>
                  	<?= form_error('category_name', '<small class="text-danger">', '</small>'); ?>
              </div>
          </div>
					<div class="row form-group">
						<label class="col-md-4 text-md-right" for="keterangan">Keterangan</label>
						<div class="col-md-6">
							<textarea value="<?=set_value('keterangan')?>"type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"></textarea>
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
