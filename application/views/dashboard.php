<!-- Page Heading -->
<!-- Pending Requests Card Example -->
<div class="row">
	<div class="col-xl-3 col-md-4 mb-5">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Admin</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_user()?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-user fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-4 mb-5">
		<div class="card border-left-secondary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Data Mobil</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_car()?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-car fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-4 mb-5">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Data Customer</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_customer() ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-database fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-4 mb-5">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Data Kategori</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_category() ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-car fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
