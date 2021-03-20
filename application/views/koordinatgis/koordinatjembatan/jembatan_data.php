<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
    var map;
    var markers = [];

    function initialize() {
        var mapOptions = {
            zoom: 14,
            // Center di kantor kabupaten kudus
            center: new google.maps.LatLng(-6.3133257, 107.0142227)
        };

        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // Add a listener for the click event
        google.maps.event.addListener(map, 'rightclick', addLatLng);
        google.maps.event.addListener(map, "rightclick", function(event) {
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();
            $('#latitude').val(lat);
            $('#longitude').val(lng);
            //alert(lat +" dan "+lng);
        });
    }

    /**
     * Handles click events on a map, and adds a new point to the marker.
     * @param {google.maps.MouseEvent} event
     */
    function addLatLng(event) {
        var marker = new google.maps.Marker({
            position: event.latLng,
            title: 'Simple GIS',
            map: map
        });
        markers.push(marker);
    }
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="container">
	<div class="row">
		<div class="col-xl-8 col-lg-7">
			<div class="card shadow mb-4">
				<div class="card-header bg-success py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-white">Peta</h6>
				</div>
				<div class="card-body" style="height: 300px;" id="map-canvas"></div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-5">
			<div class="card shadow mb-n4">
				<div class="card-header bg-warning py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-white">Daftar Koordinat</h6>
				</div>
				<div class="card-body" style="min-height: 300px;">
					<form action="#">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="latitude">Latitude</label>
									<input type="text" class="form-control" id ="latitude" name="latitude">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="longitude">Longitude</label>
									<input type="text" class="form-control" id ="longitude" name="longitude">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="datajembatan">Data Jembatan</label>
							<select name="id_jembatan" id="id_jembatan" class="custom-select">
								<option value="" selected disabled>Pilih Jembatan</option>
								<?php foreach ($itemdatajembatan->result() as $datajembatan) : ?>
									<option <?= set_select('id_jembatan', $datajembatan->id_jembatan) ?> value="<?=$datajembatan->id_jembatan?>"><?= $datajembatan->namajembatan ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="row form-group">
							<div class="col offset-xl-0">
								<button type="submit" class="btn btn-warning btn-icon-split" id="simpandaftarkoordinatjembatan">
									<span class="icon"><i class="fa fa-save"></i></span>
									<span class="text">Simpan</span>
								</button>
								<button type="reset" class="btn btn-secondary" id="clearmap">Reset</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header bg-danger py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-white">Daftar Koordinat Marker Jembatan</h6>
				</div>
				<div class="card-body table-responsive" style="min-height: 200px">
					<table class="table table-bordered" width="100%" cellspacing="0">
						<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Data jembatan</th>
							<th class="text-center">Latitude</th>
							<th class="text-center">Longitude</th>
						</tr>
						</thead>
						<tbody>
						<?php
							$no = 1;
							foreach ($itemkoordinatjembatan->result() as $key) {
								?>

								<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
