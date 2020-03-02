<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Keluar</h4>
			<div class="row">
				<?php
				if ($this->session->flashdata('alert') == 'gagal_upload_dokumen'):
					?>
					<div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Dokumen Gagal Upload
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_membuat_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
						 style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Dibuat
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_setujui_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
						 style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Disetujui
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_menolak_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
						 style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Ditolak
					</div>
				<?php
				endif;
				?>
			</div>
			<div class="col-12">
			<div class="table-responsive">
				<table id="order-listing" class="table">
					<?php
					if ($this->session->userdata('session_level') != 'PTSP' && $this->session->userdata('session_level') != 'Kepala'):
						?>
						<a href="<?= base_url('surat_keluar/create/0') ?>"
						   class="btn btn-small btn-primary" title="Tambah Surat"style="float: right">Tambah Surat<i></i></a>
					<?php
					endif;

					?>

					<thead>
					<tr>
						<th>No</th>
						<th>Jenis Surat</th>
						<th>Nomor Surat</th>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Status</th>
						<?php
						if ($this->session->userdata('session_level') == 'PTSP' || $this->session->userdata('session_level') == 'Kepala'):
							?>
							<th>Pembuat Surat</th>
							<th>Alamat</th>
							<th>Kode Pos</th>
							<th>Tipe Pengiman</th>
<!--							<th>Tujuan Surat</th>-->
						<?php
						endif;
						?>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($surat as $key => $value):
						if ($this->session->userdata('session_level') == 'PTSP' || $this->session->userdata('session_level') == 'Kepala'):
							?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['jenis_surat'] ?></td>
								<td><?= $value['keluar_nomor'] ?></td>
								<td><?= $value['keluar_tanggal'] ?></td>
								<td><?= $value['keluar_keterangan'] ?></td>
								<td>
									<?php
									if ($value['keluar_status'] == null):
										?>
										<div class="badge badge-warning">Tunggu</div>
									<?php
									elseif ($value['keluar_status'] == 'Tolak'):
										?>
										<div class="badge badge-danger">Ditolak</div>
									<?php
									elseif ($value['keluar_status'] == 'Setuju'):
										?>
										<div class="badge badge-success">Disetujui</div>
									<?php
									elseif ($value['keluar_status'] == 'Cetak'):
										?>
										<div class="badge badge-primary">Sudah Dicetak</div>
									<?php
									endif
									?>
								</td>
								<td><?= $value['keluar_pembuat_surat'] ?></td>
<!--								<td>--><?//= $value['surat_dari'] ?><!--</td>-->
								<td><?= $value['keluar_alamat'] ?></td>
								<td><?= $value['keluar_pos'] ?></td>
								<td><?= $value['keluar_pengiriman'] ?></td>
								<td>
									<?php
									if ($this->session->userdata('session_level') == 'PTSP'):
										if ($value['keluar_status'] == 'Setuju'):
											?>

											<a href="<?= base_url('assets/upload/upload_suratkeluar/' . $value['keluar_upload']) ?>" style="width: 110px"
											   class="btn btn-small btn-primary" title="Download"><i
													class="fa fa-download"></i>Download</a>
										<br>
										<br>
											<a href="<?= base_url('surat_keluar/cetak/' . $value['keluar_id']) ?>" style="width: 110px"
											   class="btn btn-small btn-success" title="Cetak"><i
													class="fa fa-print"></i>Cetak</a>
										<?php
										endif;
									elseif ($this->session->userdata('session_level') == 'Kepala'):

										?>
										<a href="<?= base_url('assets/upload/upload_suratkeluar/' . $value['keluar_upload']) ?>" style="width: 110px"
										   class="btn btn-small btn-primary" title="Lihat"><i
												class="fa fa-download"></i>Download</a>
										<?php
										if ($value['keluar_status'] == null):
											?>
											</br>
											</br>
											<a href="<?= base_url('surat_keluar/setuju/' . $value['keluar_id']) ?>" style="width: 110px"
											   class="btn btn-small btn-success" title="Setuju"><i
													class="fa fa-check"></i>Setuju</a>
											</br>
											</br>
											<a href="#" style="width: 110px"
											   class="btn btn-small btn-danger tolak-action" data-isi = "<?= $value['keluar_id']?>" data-toggle="modal"
											   data-target="#exampleModal" title="Ditolak"><i
													class="fa fa-ban"></i>Tolak</a>
										<?php
										endif;
									endif;
									?>
								</td>

							</tr>
							<?php
							$no++;
						else:
							if ($this->session->userdata('session_level') == $value['keluar_pembuat_surat']):
								?>

								<tr>
									<td><?= $no ?></td>
									<td><?= $value['jenis_surat'] ?></td>
									<td><?= $value['keluar_nomor'] ?></td>
									<td><?= $value['keluar_tanggal'] ?></td>
									<td><?= $value['keluar_keterangan'] ?></td>
									<td>
										<?php
										if ($value['keluar_status'] == null):
											?>
											<div class="badge badge-warning">Tunggu</div>
										<?php
										elseif ($value['keluar_status'] == 'Tolak'):
											?>
											<div class="badge badge-danger">Ditolak</div>
										<?php
										elseif ($value['keluar_status'] == 'Setuju'):
											?>
											<div class="badge badge-success">Disetujui</div>
										<?php
										endif
										?>
									</td>
									<td>
										<a href="<?= base_url('assets/upload/upload_suratkeluar/' . $value['keluar_upload']) ?>" style="width: 110px"
										   class="btn btn-small btn-primary" title="Lihat"><i
												class="fa fa-download"></i>Download</a>
										</br>
										</br>
										<a href="<?= base_url('surat_keluar/hapus/' . $value['keluar_id']) ?>" style="width: 110px"
										   class="btn btn-small btn-danger"
										   onclick="return confirm('Apakah anda yakin ingin menghapus?')"
										   title="Hapus"><i
												class="fa fa-trash-o"></i>Hapus</a>

									</td>

								</tr>
								<?php

								$no++;
							endif;
						endif;

					endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Masukkan Keterangan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url("surat_keluar/tolak")?>" method="post">
			<div class="modal-body">
					<div class="form-group">
						<label for="">Keterangan</label>
						<textarea name="keterangan" class="form-control" rows="3" placeholder="isi disini ..."></textarea>

					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success" name="simpan">Submit</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
				<input type="text" id="id_surat" name="id" required readonly style="background: transparent;width: 1px;height: 1px">
			</form>
		</div>
	</div>
</div>
