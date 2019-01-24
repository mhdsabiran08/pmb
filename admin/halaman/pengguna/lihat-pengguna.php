<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Aplikasi Pendataan Himaster</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pengguna</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tabel Pengguna</div>
					<div class="panel-body">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<table class="table">
								    <thead>
								    	<tr class="headings">
								    		<th width="3%">No</th>
								    		<th width="35%">Nama Lengkap</th>
								    		<th width="35%">Username</th>
								    		<th width="20%">Aksi</th>
								    	</tr>
								    </thead>
								    <tbody>
								    	<?php 
								    		$query = "SELECT * FROM admin";
								    		$result = mysqli_query($connect,$query);
								    		$no = 0;
								    		while ($data = mysqli_fetch_assoc($result)) {
								    			$no++;
								    	 ?>
								    	<tr class="even pointer">
								    		<td><?php echo $no; ?></td>
								    		<td><?php echo $data['nama_lengkap']; ?></td>
								    		<td><?php echo $data['username']; ?></td>
								    		<td>
								    			<a href="index.php?p=pengguna/edit-pengguna&id_admin=<?php echo $data['id_admin']; ?>" class="btn btn-primary btn-sm">Edit</a>
								    			<a href="index.php?p=pengguna/hapus-pengguna&id_admin=<?php echo $data['id_admin']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
	</div>					
					
</div>

