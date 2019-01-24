<div class="container">
	<h1>Form Input Data Mahasiswa</h1> 
	<hr>
	<form class="form-horizontal col-md-10 col-md-offset-1" action="pemroses/tambah.php" method="post">
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Nama Lengkap</label>
			<div class="col-md-9">
				<input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">NIM</label>
			<div class="col-md-9">
				<input type="text" name="nim" class="form-control" placeholder="nim" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Asal Sekolah</label>
			<div class="col-md-9">
				<input type="text" name="asal_sekolah" class="form-control" placeholder="asal sekolah" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Jenis Kelamin</label>
			<div class="col-md-3">
				<select name="jenis_kelamin" id="name" class="form-control" required>
					<option value="">--Pilih--</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Tempat Lahir</label>
			<div class="col-md-9">
				<input type="text" name="tempat_lahir" class="form-control" placeholder="tempat lahir" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Tanggal Lahir</label>
			<div class="col-md-3">
				<input type="text" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yyyy" id="TglLahir" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Agama</label>
			<div class="col-md-3">
				<select name="agama" id="name" class="form-control" required>
					<option value="">--Pilih--</option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katolik">Katolik</option>
					<option value="Protestan">Protestan</option>
					<option value="Hindhu">Hindhu</option>
					<option value="Budha">Budha</option>
					<option value="Konghucu">Konghucu</option>
					<option value="Lain-lain">Lain-lain</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">No.HP</label>
			<div class="col-md-3">
				<input type="text" name="no_hp" class="form-control" placeholder="no.hp" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Alamat Asal</label>
			<div class="col-md-9">
				<input type="text" name="alamat_asal" class="form-control" placeholder="alamat asal" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Alamat Sekarang</label>
			<div class="col-md-9">
				<input type="text" name="alamat_sekarang" class="form-control" placeholder="alamat sekarang" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Nama Ayah</label>
			<div class="col-md-9">
				<input type="text" name="nama_ayah" class="form-control" placeholder="nama ayah" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Pekerjaan Ayah</label>
			<div class="col-md-9">
				<input type="text" name="pekerjaan_ayah" class="form-control" placeholder="pekerjaan ayah" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Penghasilan Ayah</label>
			<div class="col-md-9">
				<input type="text" name="penghasilan_ayah" class="form-control" placeholder="penghasilan ayah" required>
				<span class="help-block">*cth: 1.500.000 , 2.000.000, 750.000</span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Nama Ibu</label>
			<div class="col-md-9">
				<input type="text" name="nama_ibu" class="form-control" placeholder="nama ibu" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Pekerjaan Ibu</label>
			<div class="col-md-9">
				<input type="text" name="pekerjaan_ibu" class="form-control" placeholder="pekerjaan ibu" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Penghasilan Ibu</label>
			<div class="col-md-9">
				<input type="text" name="penghasilan_ibu" class="form-control" placeholder="penghasilan ibu, kosongkan jika tidak ada">
				<span class="help-block">*cth: 1.500.000 , 2.000.000, 750.000</span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Anak ke</label>
			<div class="col-md-9">
				<input type="text" name="anak_ke" class="form-control" placeholder="anak ke..." required>
				<span class="help-block">*isi dengan angka</span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Jumlah Saudara</label>
			<div class="col-md-9">
				<input type="text" name="jmlh_saudara" class="form-control" placeholder="dari ... saudara" required>
				<span class="help-block">*isi dengan angka</span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Hobby</label>
			<div class="col-md-9">
				<textarea name="hobby" id="name" cols="30" rows="2" class="form-control" placeholder="hobby" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Bakat</label>
			<div class="col-md-9">
				<textarea name="bakat" id="name" cols="30" rows="2" class="form-control" placeholder="bakat" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Riwayat Penyakit</label>
			<div class="col-md-9">
				<textarea name="riwayat_penyakit" id="name" cols="30" rows="2" class="form-control" placeholder="riwayat penyakit"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Catatan Alergi</label>
			<div class="col-md-9">
				<textarea name="catatan_alergi" id="name" cols="30" rows="2" class="form-control" placeholder="catatan alergi"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Prestasi Selama Sekolah</label>
			<div class="col-md-9">
				<textarea name="prestasi" id="name" cols="30" rows="2" class="form-control" placeholder="prestasi selama sekolah"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Pengalaman Organisasi</label>
			<div class="col-md-9">
				<textarea name="pengalaman_organisasi" id="name" cols="30" rows="2" class="form-control" placeholder="pengalaman organisasi"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Jalur Masuk</label>
			<div class="col-md-3">
				<select name="jalur_masuk" id="name" class="form-control" required>
					<option value="">--Pilih--</option>
					<option value="Bidikmisi">Bidikmisi</option>
					<option value="SNMPTN">SNMPTN</option>
					<option value="SBMPTN">SBMPTN</option>
					<option value="Mandiri 1">Mandiri 1</option>
					<option value="Mandiri 2">Mandiri 2</option>
					<option value="Lain-lain">Lain-lain</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Alasan Masuk Siskom</label>
			<div class="col-md-9">
				<textarea name="alasan" id="name" cols="30" rows="3" class="form-control" placeholder="alasan masuk siskom" required></textarea>
			</div>
		</div>
		<div class="pull-right" style="margin-bottom: 50px;">
			<button type="submit" class="btn btn-success">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</div>	
	</form>	
	<div class="clearfix"></div>
</div>
<script src="js/datepicker/moment.js"></script>
<script src="js/datepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#TglLahir').datetimepicker({
        	format: 'MM/DD/YYYY'
        });
    });
</script>


