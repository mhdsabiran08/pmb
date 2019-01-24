<div class="container">
	<h1>Kelola Data Mahasiswa</h1>
	<hr>
	<table class="table table-striped responsive-utilities" id="tabelKelolaData">
		<thead>
			<tr class="headings">
				<th width="1%">No</th>
				<th width="15%">NIM</th>
				<th width="25%">Nama Lengkap</th>
				<th width="25%">Tempat, Tanggal Lahir</th>
				<th width="15%">Asal Sekolah</th>
				<th width="5%%">Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			require_once 'pemroses/koneksi.php';
			require_once 'bagian/lang-id.php';
			$query = "SELECT * FROM data_maba ORDER BY id_data_maba DESC";
			$result = mysqli_query($connect,$query);
			$no = 0;
			while ($data = mysqli_fetch_assoc($result)){
				$no++;
		 ?>
			<tr class="even pointer">
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['nama_lengkap']; ?></td>
				<td><?php echo $data['tempat_lahir'].", ".TanggalIndo($data['tanggal_lahir']); ?></td>
				<td><?php echo $data['asal_sekolah']; ?></td>
				<td>
					<a href="index.php?p=kelola-data/edit&id_data_maba=<?php echo $data['id_data_maba']; ?>" class="btn btn-primary btn-sm">Edit</a>
				</td>
			</tr>
		<?php 
			}
		 ?>
		</tbody>
	</table>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/datatables/jquery.dataTables.min.js"></script>
	<script src="js/datatables/dataTables.bootstrap.js"></script>
	<script type="text/javascript">
	    $(function() {
	        $('#tabelKelolaData').dataTable();
	    });
	</script>
</div>