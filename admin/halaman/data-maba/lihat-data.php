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
				<div class="panel-heading">Tabel Data Mahasiswa</div>
					<div class="panel-body">
						<div class="col-md-12">
							<div class="row">
								<table class="table" id="tabelMahasiswa">
								    <thead>
								    	<tr class="headings">
								    		<th width="1%">No</th>
								    		<th width="10%">NIM</th>
								    		<th width="25%">Nama Lengkap</th>
								    		<th width="30%">Tempat, Tanggal Lahir</th>
								    		<th width="20%">Asal Sekolah</th>
								    		<th width="10%%">Aksi</th>
								    	</tr>
								    </thead>
								    <tbody>
								    	<?php 
								    		require_once 'bagian/lang-id.php';
								    		$query = "SELECT * FROM data_maba";
								    		$result = mysqli_query($connect,$query);
								    		$no = 0;
								    		while ($data = mysqli_fetch_assoc($result)) {
								    			$no++;
								    	 ?>
								    	<tr class="even pointer">
								    		<td><?php echo $no; ?></td>
								    		<td><?php echo $data['nim']; ?></td>
								    		<td><?php echo $data['nama_lengkap']; ?></td>
								    		<td><?php echo $data['tempat_lahir'].", ".TanggalIndo($data['tanggal_lahir']); ?></td>
								    		<td><?php echo $data['asal_sekolah']; ?></td>
								    		<td>
								    			<a href="index.php?p=data-maba/cetak&id_data_maba=<?php echo $data['id_data_maba']; ?>" class="btn btn-default btn-sm">Cetak</a>
								    		</td>
								    	</tr>
								    	<?php 
								    		}
								    	 ?>
								    </tbody>
								</table>
							</div><!--/.row-->	
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		<script src="assets/js/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/js/datatables/dataTables.bootstrap.js"></script>
		<script type="text/javascript">
		    $(function() {
		        $('#tabelMahasiswa').dataTable();
		    });
		</script>
	</div>					
					
</div>

