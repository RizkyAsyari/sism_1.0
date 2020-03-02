<div class="row" style="width: 100%" align="center">
	<div class="col-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Selamat Datang <?= $this->session->userdata('session_user_name');?></h3>
				<p class="card-description">Selamat Bekerja Di Sistem Informasi Arsip Surat Menyurat Kementerian Agama Kota Payakumbuh</p>
			</div>
		</div>
	</div>
</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center justify-content-md-center">
					<i class="fa fa-envelope-open-o icon-lg text-success"></i>
					<div class="ml-3">
						<p class="mb-0">Surat Masuk</p>
						<h6>
							<?php
							echo $surat_masuk
							?>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center justify-content-md-center">
					<i class="fa fa-send icon-lg text-warning"></i>
					<div class="ml-3">
						<p class="mb-0">Surat Keluar</p>
						<h6>
							<?php
							echo $surat_keluar
							?>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center justify-content-md-center">
					<i class="fa fa-check-square-o icon-lg text-info"></i>
					<div class="ml-3">
						<p class="mb-0">Surat Masuk Disetujui</p>
						<h6>
							<?php
							echo $surat_setuju
							?>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center justify-content-md-center">
					<i class="fa fa-times-rectangle icon-lg text-danger"></i>
					<div class="ml-3">
						<p class="mb-0">Surat Masuk Ditolak</p>
						<h6>
							<?php
							echo $surat_ditolak
							?>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center justify-content-md-center">
					<i class="fa fa-check-square icon-lg text-danger"></i>
					<div class="ml-3">
						<p class="mb-0">Surat Keluar Disetujui</p>
						<h6>
							<?php
							echo $surat_keluar_setuju
							?>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card" style="float: right">
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card" style="float: right">
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center justify-content-md-center">
					<i class="fa fa-times-rectangle-o icon-lg text-danger"></i>
					<div class="ml-3">
						<p class="mb-0">Surat Keluar Ditolak</p>
						<h6>
							<?php
							echo $surat_keluar_ditolak
							?>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
