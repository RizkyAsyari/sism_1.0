<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Form Surat Keluar</h4>
			<?php
			if ($this->session->flashdata('alert') == 'gagal_upload_surat'):
			?>
			<div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
				<button type="button" class="close" data-dismiss="alert">x</button>
				Isi Data Dengan Lengkap
			</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'berhasil_buat_surat'):
			?>
			<div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
				<button type="button" class="close" data-dismiss="alert">x</button>
				Surat Berhasil Dibuat
			</div>
			<?php
			endif;
			?>
			<?= form_open('surat_keluar/create/'.$id, array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label>Tujuan Surat</label>
					<select class="js-example-basic-single" style="width:100%" name="jenis_surat">
						<option value="Surat Keputusan">Surat Keputusan</option>
						<option value="Surat Permohonan">Surat Permohonan</option>
						<option value="Surat Pemberitahuan">Surat Pemberitahuan</option>
						<option value="Surat Peminjaman">Surat Peminjaman</option>
						<option value="Surat Pernyataan">Surat Pernyataan</option>
						<option value="Surat Mandat">Surat Mandat</option>
						<option value="Surat Tugas">Surat Tugas</option>
						<option value="Surat Ketenagakerjaan">Surat Ketenagakerjaan</option>
						<option value="Surat Rekomendasi">Surat Rekomendasi</option>
						<option value="Surat Balasan">Surat Balasan</option>
						<option value="Surat Perintah Perjalanan Dinas">Surat Perintah Perjalanan Dinas</option>
						<option value="Surat Sertifikat">Surat Sertifikat</option>
						<option value="Surat Perjanjian Kerja">Surat Perjanjian Kerja</option>
						<option value="Surat Pengantar">Surat Pengantar</option>
						<option value="Lain-lain">Lain-lain</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Surat"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tanggal Surat</label>
					<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Surat"
						   name="tanggal_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat Tujuan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Tujuan"
						   name="alamat_tujuan" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Kode Pos</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kode Pos"
						   name="kode_pos" required>
				</div>
				<div class="form-group">
					<label>Tipe Pengiriman</label>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="tipe_pengiriman" id="optionsRadios1" value="Kilat"
								   checked>
							Kilat
						</label>
					</div>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="tipe_pengiriman" id="optionsRadios2"
								   value="Biasa">
							Biasa
						</label>
					</div>
				</div>
				<label>Upload Surat</label>
				<input type="file" class="dropify" name="upload" required/>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-success" name="simpan">Submit</button>
				<a href="<?= base_url('surat') ?>"
				   class="btn btn-small btn-danger" title="Kembali"style="float: right">Back</a>
			</div>
			<?= form_close() ?>
		</div></div></div>
