
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Aplikasi Pendataan Himaster</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="icon-grid">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<?php
									$query="SELECT count(*) AS count FROM admin";
								    $result=mysqli_query($connect,$query);
								    $count=mysqli_fetch_assoc($result);
								    $pengguna=$count['count'];
								?>
								<svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
								<h2>Pengguna : <?php echo $pengguna; ?></h2>
								<a href="index.php?p=pengguna/lihat-pengguna">lihat data</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<?php
									$query="SELECT count(*) AS count FROM data_maba";
								    $result=mysqli_query($connect,$query);
								    $count=mysqli_fetch_assoc($result);
								    $data_maba=$count['count'];
								?>
								<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
								<h2>Data Mahasiswa : <?php echo $data_maba; ?></h2>
								<a href="index.php?p=data-maba/lihat-data">lihat data</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->

