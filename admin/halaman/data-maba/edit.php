<?php 
	require_once 'pemroses/koneksi.php';
	$id_data_maba = $_GET['id_data_maba'];
	$query = "SELECT * FROM data_maba WHERE id_data_maba=".$id_data_maba;
	$result = mysqli_query($connect,$query);
	$data = mysqli_fetch_assoc($result);
 ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Aplikasi Pendataan Himaster</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Mahasiswa</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Edit Data Mahasiswa</div>
					<div class="panel-body">
						<div class="col-md-12">
							<div class="row">
								<form class="form-horizontal col-md-10 col-md-offset-1" action="pemroses/data-maba/edit.php?id_data_maba=<?php echo $data['id_data_maba']; ?>" method="post">
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
											<input type="text" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('m/d/Y', strtotime($data['tanggal_lahir'])) ?>" id="datepicker">
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
										<label class="control-label col-md-3" for="nama">Alasan Masuk Siskom</label>
										<div class="col-md-9">
											<textarea name="alasan" id="name" cols="30" rows="3" class="form-control" placeholder="alasan masuk siskom"><?php echo $data['alasan']; ?></textarea>
										</div>
									</div>
									<div class="pull-right" style="margin-bottom: 50px;">
										<button type="submit" class="btn btn-primary">Ubah</button>
										<a href="index.php?p=data-maba/kelola-data" class="btn btn-warning">Kembali</a>
									</div>	
								</form>		
							</div><!--/.row-->	
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>					
					
</div>
<script src="assets/js/moment.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script>
	$('#datepicker').datepicker();
</script>






