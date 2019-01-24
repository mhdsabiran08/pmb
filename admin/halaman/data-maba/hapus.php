<?php 
	require_once 'pemroses/koneksi.php';
	require_once 'bagian/lang-id.php';
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
				<div class="panel-heading">Form Hapus Data Mahasiswa</div>
					<div class="panel-body">
						<div class="col-md-12">
							<div class="row">
								<form class="form-horizontal col-md-10 col-md-offset-1" action="pemroses/data-maba/hapus.php?id_data_maba=<?php echo $data['id_data_maba']; ?>" method="post">
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Nama Lengkap</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['nama_lengkap']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">NIM</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['nim']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Asal Sekolah</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['asal_sekolah']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Jenis Kelamin</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['jenis_kelamin']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Tempat Lahir</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['tempat_lahir']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Tanggal Lahir</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo TanggalIndo($data['tanggal_lahir']); ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Agama</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['agama']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">No.HP</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['no_hp']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Alamat Asal</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['alamat_asal']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Alamat Sekarang</label>
										<div class="col-md-9">
											<input type="text" class="form-control" value="<?php echo $data['alamat_sekarang']; ?> " readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Hobby</label>
										<div class="col-md-9">
											<textarea cols="30" rows="2" class="form-control" readonly><?php echo $data['hobby'];  ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Bakat</label>
										<div class="col-md-9">
											<textarea cols="30" rows="2" class="form-control" readonly><?php echo $data['bakat']; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Riwayat Penyakit</label>
										<div class="col-md-9">
											<textarea cols="30" rows="2" class="form-control" readonly><?php echo $data['riwayat_penyakit']; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Catatan Alergi</label>
										<div class="col-md-9">
											<textarea cols="30" rows="2" class="form-control" readonly><?php echo $data['catatan_alergi']; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Alasan Masuk Siskom</label>
										<div class="col-md-9">
											<textarea cols="30" rows="2" class="form-control" readonly><?php echo $data['alasan']; ?></textarea>
										</div>
									</div>
									<div class="pull-right" style="margin-bottom: 50px;">
										<button type="submit" class="btn btn-danger">Hapus</button>
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


