<div class="card shadow mb-4 border-bottom-primary">
	<div class="card-header bg-white py-3">
		<div class="row">
			<div class="col">
				<h4 class="h5 align-middle m-0 font-weight-bold text-primary">Data Tabel Mobil</h4>
			</div>
			<div class="col-md-2">
				<a href="<?=site_url('car/add')?>" class="btn btn-primary btn-icon-split btn-sm">
				<span class="icon">
					<i class="fa fa-user-plus"></i>
				</span>
					<span class="text">
					Tambah Mobil
				</span>
				</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Plat Mobil</th>
					<th class="text-center">Nama Mobil</th>
          <th class="text-center">Jenis Mobil</th>
          <th class="text-center">Keterangan</th>
					<th class="text-center">Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php  // print_r($row->result()) , contoh untuk mengecek apakah datanya berhasil ditangkapatau tidaknya
				$no = 1 ;
				foreach ($row->result() as $key => $data) {
					?>
					<tr>
						<td class="text-center"><?= $no ?></td>
            <td class="text-center"><?= $data->plat ?></td>
            <td class="text-center"><?= $data->namamobil ?></td>
            <td class="text-center"><?= $data->jenis_mobil ?></td>
            <td class="text-center"><?= $data->keterangan ?></td>
						<td class="text-center" >
							<form action="<?= site_url('car/del')?>" method="post">
								<a href="<?= site_url('car/edit/'.$data->id_car) ?>" class="btn btn-success btn-circle btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<input type="hidden" name="id_car" value="<?=$data->id_car?>">
								<button class="btn btn-danger btn-circle btn-sm" onclick="return confirm('apakah anda yakin untuk menghapusnya ?')">
									<i class="fa fa-trash-alt"></i>
								</button>
							</form>
						</td>
					</tr>
					<?php
					$no++;
				} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
