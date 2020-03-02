<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Tracking Surat</h4>
			<?= form_open('tracking/timeline') ?>

			<div class="row">

				<?php
				if ($this->session->flashdata('alert') == 'nomor_surat_tidak_ditemukan'):
				?>
				<div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
					<button type="button" class="close" data-dismiss="alert">x</button>
					Nomor Surat Tidak Ditemukan
				</div>
				<?php
				endif;
				?>

				<div class="col-6">
					<div class="form-group">
						<label for="exampleInputEmail1">Nomor Surat</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="nomor_surat" required>
					</div>

					<a href="<?=base_url()?>" class="btn btn-secondary"> Kembali</a>
					<button type="submit" class="btn btn-primary" name="lihat">Lihat Surat</button>
				</div>
			</div>
			<?= form_close() ?>

		</div>

	</div>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Proses Pengajuan Surat</h4>
						<p class="card-description"></p>
						<div class="mt-5">
							<div class="timeline">
								<div class="timeline-wrapper timeline-wrapper-warning">
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h6 class="timeline-title">Pembuatan Surat</h6>
										</div>
										<div class="timeline-body">
											<p>Surat akan diolah oleh pegawai unit dengan membuat surat sesuai dengan konsep surat</p>
										</div>
										<div class="timeline-footer d-flex align-items-center">
<!--											<i class="mdi mdi-heart-outline text-muted mr-1"></i>-->
<!--											<span>19</span>-->
											<span class="ml-auto font-weight-bold"></span>
										</div>
									</div>
								</div>
								<div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h6 class="timeline-title">Penginputan Surat</h6>
										</div>
										<div class="timeline-body">
											<p>Surat akan di inputkan ke sistem oleh pegawai unit sesuai dengan surat yang telah dibuat</p>
										</div>
										<div class="timeline-footer d-flex align-items-center">
<!--											<i class="mdi mdi-heart-outline text-muted mr-1"></i>-->
<!--											<span>25</span>-->
<!--											<span class="ml-auto font-weight-bold">10th Aug 2017</span>-->
										</div>
									</div>
								</div>
								<div class="timeline-wrapper timeline-wrapper-success">
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h6 class="timeline-title">Persetujuan Kepala</h6>
										</div>
										<div class="timeline-body">
											<p>Kepala akan memeriksa surat yang telah diajukan oleh pegawai unit, jika surat sudah sesuai dengan ketentuan yang ada, maka surat akan disetujui, jika tidak sesuai maka surat akan ditolak dan surat harus diajukan ulang</p>
										</div>
										<div class="timeline-footer d-flex align-items-center">
<!--											<i class="mdi mdi-heart-outline text-muted mr-1"></i>-->
<!--											<span>19</span>-->
<!--											<span class="ml-auto font-weight-bold">5th Sep 2016</span>-->
										</div>
									</div>
								</div>
								<div class="timeline-wrapper timeline-inverted timeline-wrapper-info">
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h6 class="timeline-title">Pencetakan Surat</h6>
										</div>
										<div class="timeline-body">
											<p>Pada bagian PTSP akan menerima Surat yang telah disetujui dan akan mencetak surat tersebut</p>
										</div>
										<div class="timeline-footer d-flex align-items-center">
<!--											<i class="mdi mdi-heart-outline text-muted mr-1"></i>-->
<!--											<span>19</span>-->
<!--											<span class="ml-auto font-weight-bold">27th July 2016</span>-->
										</div>
									</div>
								</div>
								<div class="timeline-wrapper timeline-wrapper-primary">
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h6 class="timeline-title">Penandatanganan Surat</h6>
										</div>
										<div class="timeline-body">
											<p>Surat yang telah dicetak akan ditanda tangani oleh kepala</p>
										</div>
										<div class="timeline-footer d-flex align-items-center">
<!--											<i class="mdi mdi-heart-outline text-muted mr-1"></i>-->
<!--											<span>25</span>-->
<!--											<span class="ml-auto font-weight-bold">25th July 2016</span>-->
										</div>
									</div>
								</div>
<!--								<div class="timeline-wrapper timeline-inverted timeline-wrapper-info">-->
<!--									<div class="timeline-badge"></div>-->
<!--									<div class="timeline-panel">-->
<!--										<div class="timeline-heading">-->
<!--											<h6 class="timeline-title">Bootstrap 4 Alpha 1</h6>-->
<!--										</div>-->
<!--										<div class="timeline-body">-->
<!--											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue,</p>-->
<!--										</div>-->
<!--										<div class="timeline-footer d-flex align-items-center">-->
<!--											<i class="mdi mdi-heart-outline text-muted mr-1"></i>-->
<!--											<span>32</span>-->
<!--											<span class="ml-auto font-weight-bold">19th Aug 2015</span>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="timeline-wrapper timeline-wrapper-success">-->
<!--									<div class="timeline-badge"></div>-->
<!--									<div class="timeline-panel">-->
<!--										<div class="timeline-heading">-->
<!--											<h6 class="timeline-title">Bootstrap 3.3.5</h6>-->
<!--										</div>-->
<!--										<div class="timeline-body">-->
<!--											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue,</p>-->
<!--										</div>-->
<!--										<div class="timeline-footer d-flex align-items-center">-->
<!--											<i class="mdi mdi-heart-outline text-muted mr-1"></i>-->
<!--											<span>26</span>-->
<!--											<span class="ml-auto font-weight-bold">15th Jun 2015</span>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div></div>

</div>
