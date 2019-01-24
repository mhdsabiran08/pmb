<?php 
	require_once 'koneksi.php';
	$tanggal = $_REQUEST['tanggal_lahir'];
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
	nama_ayah = '".$_POST['nama_ayah']."',
	pekerjaan_ayah = '".$_POST['pekerjaan_ayah']."',
	penghasilan_ayah = '".$_POST['penghasilan_ayah']."',
	nama_ibu = '".$_POST['nama_ibu']."',
	pekerjaan_ibu = '".$_POST['pekerjaan_ibu']."',
	penghasilan_ibu = '".$_POST['penghasilan_ibu']."',
	anak_ke = '".$_POST['anak_ke']."',
	jmlh_saudara = '".$_POST['jmlh_saudara']."',
	hobby = '".$_POST['hobby']."',
	bakat = '".$_POST['bakat']."',
	riwayat_penyakit = '".$_POST['riwayat_penyakit']."',
	catatan_alergi = '".$_POST['catatan_alergi']."',
	prestasi = '".$_POST['prestasi']."',
	pengalaman_organisasi = '".$_POST['pengalaman_organisasi']."',
	jalur_masuk = '".$_POST['jalur_masuk']."',
	alasan = '".$_POST['alasan']."'
	WHERE id_data_maba = ".$_GET['id_data_maba']."
	";
	$simpan = mysqli_query($connect,$update);
	if ($simpan) {
	?>
			<script> //akan muncul jika data berhasil diinputkan
				alert('Data Berhasil di Ubah !!');
			  	window.location='../index.php?p=kelola-data/home';
			</script>";
	<?php
	} else {
		echo "GAGAL mengubah !!!";
	}
 ?>