<?php 
	require_once 'pemroses/koneksi.php';
	$id_data_maba = $_GET['id_data_maba'];
	$query = "SELECT * FROM data_maba WHERE id_data_maba=".$id_data_maba;
	$result = mysqli_query($connect,$query);
	$data = mysqli_fetch_assoc($result);
 ?>
	
<div class="container">
	<h1>Form Edit Data Mahasiswa</h1> 
	<hr>
	<form class="form-horizontal col-md-10 col-md-offset-1" action="pemroses/edit.php?id_data_maba=<?php echo $data['id_data_maba']; ?>" method="post">
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Nama Lengkap</label>
			<div class="col-md-9">
				<input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap" value="<?php echo $data['nama_lengkap']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">NIM</label>
			<div class="col-md-9">
				<input type="text" name="nim" class="form-control" placeholder="nim" value="<?php echo $data['nim']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Asal Sekolah</label>
			<div class="col-md-9">
				<input type="text" name="asal_sekolah" class="form-control" placeholder="asal sekolah" value="<?php echo $data['asal_sekolah']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Jenis Kelamin</label>
			<div class="col-md-3">
				<select name="jenis_kelamin" id="name" class="form-control">
					<option value="<?php echo $data['jenis_kelamin']; ?>"><?php echo $data['jenis_kelamin']; ?></option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Tempat Lahir</label>
			<div class="col-md-9">
				<input type="text" name="tempat_lahir" class="form-control" placeholder="tempat lahir" value="<?php echo $data['tempat_lahir']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Tanggal Lahir</label>
			<div class="col-md-3">
				<input type="text" id="TglLahir" name="tanggal_lahir" class="form-control" value="<?php echo date('d/m/Y', strtotime($data['tanggal_lahir'])); ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Agama</label>
			<div class="col-md-3">
				<select name="agama" id="name" class="form-control">
					<option value="<?php echo $data['agama']; ?>"><?php echo $data['agama']; ?></option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
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
				<input type="text" name="no_hp" class="form-control" placeholder="no.hp" value="<?php echo $data['no_hp']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Alamat Asal</label>
			<div class="col-md-9">
				<input type="text" name="alamat_asal" class="form-control" placeholder="alamat asal" value="<?php echo $data['alamat_asal']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Alamat Sekarang</label>
			<div class="col-md-9">
				<input type="text" name="alamat_sekarang" class="form-control" placeholder="alamat sekarang" value="<?php echo $data['alamat_sekarang']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Nama Ayah</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['nama_ayah']; ?> " placeholder="nama ayah" name="nama_ayah">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Pekerjaan Ayah</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['pekerjaan_ayah']; ?> " placeholder="pekerjaan ayah" name="pekerjaan_ayah">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Penghasilan Ayah</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['penghasilan_ayah']; ?> " placeholder="penghasilan ayah" name="penghasilan_ayah">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Nama Ibu</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['nama_ibu']; ?> " placeholder="nama ibu" name="nama_ibu">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Pekerjaan Ibu</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['pekerjaan_ibu']; ?> " placeholder="pekerjaan ibu" name="pekerjaan_ibu">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Penghasilan Ibu</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['penghasilan_ibu']; ?> " placeholder="penghasilan ibu" name="penghasilan_ibu">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Anak ke</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['anak_ke']; ?> " placeholder="anak ke..." name="anak_ke">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Jumlah Saudara</label>
			<div class="col-md-9">
				<input type="text" class="form-control" value="<?php echo $data['jmlh_saudara']; ?> " placeholder="jumlah saudara" name="jmlh_saudara">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Hobby</label>
			<div class="col-md-9">
				<textarea name="hobby" id="name" cols="30" rows="2" class="form-control" placeholder="hobby"><?php echo $data['hobby']; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Bakat</label>
			<div class="col-md-9">
				<textarea name="bakat" id="name" cols="30" rows="2" class="form-control" placeholder="bakat"><?php echo $data['bakat']; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Riwayat Penyakit</label>
			<div class="col-md-9">
				<textarea name="riwayat_penyakit" id="name" cols="30" rows="2" class="form-control" placeholder="riwayat penyakit"><?php echo $data['riwayat_penyakit']; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Catatan Alergi</label>
			<div class="col-md-9">
				<textarea name="catatan_alergi" id="name" cols="30" rows="2" class="form-control" placeholder="catatan alergi"><?php echo $data['catatan_alergi']; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Prestasi Selama Sekolah</label>
			<div class="col-md-9">
				<textarea name="prestasi" id="name" cols="30" rows="2" class="form-control" placeholder="prestasi selama sekolah"><?php echo $data['prestasi']; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Pengalaman Organisasi</label>
			<div class="col-md-9">
				<textarea name="pengalaman_organisasi" id="name" cols="30" rows="2" class="form-control" placeholder="pengalaman organisasi"><?php echo $data['pengalaman_organisasi']; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" for="nama">Jalur Masuk</label>
			<div class="col-md-3">
				<select name="jalur_masuk" id="name" class="form-control" required>
					<option value="<?php echo $data['jalur_masuk']; ?>"><?php echo $data['jalur_masuk']; ?></option>
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
				<textarea name="alasan" id="name" cols="30" rows="3" class="form-control" placeholder="alasan masuk siskom"><?php echo $data['alasan']; ?></textarea>
			</div>
		</div>
		<div class="pull-right" style="margin-bottom: 50px;">
			<button type="submit" class="btn btn-primary">Ubah</button>
			<a href="index.php?p=kelola-data/home" class="btn btn-warning">Kembali</a>
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

