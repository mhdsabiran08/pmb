<?php 
	require_once '../koneksi.php';
	$tanggal = $_REQUEST['tanggal_lahir'];

		//explode tanggal lahir
		$x = explode(" ", $tanggal);
	    $y = explode("/", $x[0]);
	    $bln = $y['0'];
	    $tgl = $y['1'];
	    $thn = $y['2'];
	    $tanggal_lahir = "".$thn."-".$bln."-".$tgl."";

	$update = "UPDATE data_maba SET
	nama_lengkap = '".$_POST['nama_lengkap']."',
	nim = '".$_POST['nim']."',
	asal_sekolah = '".$_POST['asal_sekolah']."',
	jenis_kelamin = '".$_POST['jenis_kelamin']."',
	tempat_lahir = '".$_POST['tempat_lahir']."',
	tanggal_lahir = '".$tanggal_lahir."',
	agama = '".$_POST['agama']."',
	no_hp = '".$_POST['no_hp']."', 
	alamat_asal = '".$_POST['alamat_asal']."',
	alamat_sekarang = '".$_POST['alamat_sekarang']."',
	hobby = '".$_POST['hobby']."',
	bakat = '".$_POST['bakat']."',
	riwayat_penyakit = '".$_POST['riwayat_penyakit']."',
	catatan_alergi = '".$_POST['catatan_alergi']."',
	alasan = '".$_POST['alasan']."'
	WHERE id_data_maba = ".$_GET['id_data_maba']."
	";
	$simpan = mysqli_query($connect,$update);
	if ($simpan) {
		header('location: ../../index.php?p=data-maba/kelola-data');
	} else {
		echo "GAGAL mengubah !!!";
	}
 ?>