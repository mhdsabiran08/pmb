<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location: login.php");
		break;
	} 
	include 'pemroses/koneksi.php';
	include 'bagian/link.php';
 ?>		
 	<body>
 		<!-- bagian header -->
 		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 			<div class="container-fluid">
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
 						<span class="sr-only">Toggle navigation</span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 					</button>
 					<a class="navbar-brand" href="#">Aplikasi Pendataan <span>Himaster</span></a>
 					<ul class="user-menu">
 						<li>
 							<strong><a href="">Login sebagai : <?php echo ucwords($_SESSION['username']); ?> |</a></strong>
 							<a class="" href="pemroses/logout.php"> Keluar <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg></a>
 						</li>
 					</ul>
 				</div>
 								
 			</div><!-- /.container-fluid -->
 		</nav>
 		<!-- bagian header -->

 		<!-- bagian menu-sidebar -->
 		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
 			<div>
 				<img src="image/logo-himaster.png" class="img-responsive center-block" style="margin-top : 20px; max-width: 100px;">
 			</div>
 				
 			<ul class="nav menu">
 				<li role="presentation" class="divider"></li>
 				<li class="active">
 					<a href="index.php?p=dashboard">
 						<svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard
 					</a>
 				</li>
 				<li role="presentation" class="divider"></li>
 				<li class="parent ">
 					<a href="#">
 						<span data-toggle="collapse" href="#pengguna"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"/></svg> Pengguna </span> 
 					</a>
 					<ul class="children collapse" id="pengguna">
 						<li>
 							<a class="" href="index.php?p=pengguna/lihat-pengguna">
 								<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lihat Data Pengguna
 							</a>
 						</li>
 						<li>
 							<a class="" href="index.php?p=pengguna/input-pengguna">
 								<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Input Pengguna
 							</a>
 						</li>
 					</ul>
 				</li>
 				<li class="parent ">
 					<a href="#">
 						<span data-toggle="collapse" href="#data_maba"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Data Mahasiswa </span> 
 					</a>
 					<ul class="children collapse" id="data_maba">
 						<li>
 							<a class="" href="index.php?p=data-maba/lihat-data">
 								<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lihat Data Mahasiswa
 							</a>
 						</li>
 						<li>
 							<a class="" href="index.php?p=data-maba/kelola-data">
 								<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Kelola Data Mahasiswa
 							</a>
 						</li>
 					</ul>
 				</li>
 				<li role="presentation" class="divider"></li>
 			</ul>
 			
 		</div><!--/.sidebar-->

 	</body>	
</html>