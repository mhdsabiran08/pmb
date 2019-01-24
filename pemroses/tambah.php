<?php 
	require_once 'koneksi.php';

	$nama_lengkap = $_REQUEST['nama_lengkap'];
	$nim = $_REQUEST['nim'];
	$asal_sekolah = $_REQUEST['asal_sekolah'];
	$jenis_kelamin = $_REQUEST['jenis_kelamin'];
	$tempat_lahir = $_REQUEST['tempat_lahir'];
	$tanggal = $_REQUEST['tanggal_lahir'];
	$agama = $_REQUEST['agama'];
	$no_hp = $_REQUEST['no_hp'];
	$alamat_asal = $_REQUEST['alamat_asal'];
	$alamat_sekarang = $_REQUEST['alamat_sekarang'];
	$nama_ayah = $_REQUEST['nama_ayah'];
	$penghasilan_ayah = $_REQUEST['penghasilan_ayah'];
	$pekerjaan_ayah = $_REQUEST['pekerjaan_ayah'];
	$nama_ibu = $_REQUEST['nama_ibu'];
	$pekerjaan_ibu = $_REQUEST['pekerjaan_ibu'];
	$penghasilan_ibu = $_REQUEST['penghasilan_ibu'];
	$anak_ke = $_REQUEST['anak_ke'];
	$jmlh_saudara = $_REQUEST['jmlh_saudara'];
	$hobby = $_REQUEST['hobby'];
	$bakat = $_REQUEST['bakat'];
	$riwayat_penyakit = $_REQUEST['riwayat_penyakit'];
	$catatan_alergi = $_REQUEST['catatan_alergi'];
	$prestasi = $_REQUEST['prestasi'];
	$pengalaman_organisasi = $_REQUEST['pengalaman_organisasi'];
	$jalur_masuk = $_REQUEST['jalur_masuk'];
	$alasan = $_REQUEST['alasan'];

	$x = explode(" ", $tanggal);
    $y = explode("/", $x[0]);
    $bln = $y['0'];
    $tgl = $y['1'];
    $thn = $y['2'];
    $tanggal_lahir = "".$thn."-".$bln."-".$tgl."";

	$tambah = "INSERT INTO data_maba(nama_lengkap,nim,asal_sekolah,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,no_hp,alamat_asal,alamat_sekarang,nama_ayah,pekerjaan_ayah,penghasilan_ayah,nama_ibu,pekerjaan_ibu,penghasilan_ibu,anak_ke,jmlh_saudara,hobby,bakat,riwayat_penyakit,catatan_alergi,prestasi,pengalaman_organisasi,jalur_masuk,alasan) VALUES('$nama_lengkap','$nim','$asal_sekolah','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$agama','$no_hp','$alamat_asal','$alamat_sekarang','$nama_ayah','$pekerjaan_ayah','$penghasilan_ayah','$nama_ibu','$pekerjaan_ibu','$penghasilan_ibu','$anak_ke','$jmlh_saudara','$hobby','$bakat','$riwayat_penyakit','$catatan_alergi','$prestasi','$pengalaman_organisasi','$jalur_masuk','$alasan')";
	$simpan = mysqli_query($connect,$tambah);
	if ($simpan) {
	?>
			<script> //akan muncul jika data berhasil diinputkan
				alert('Data Berhasil di Isi !!');
			  	window.location='../index.php?p=input-data/home';
			</script>";
	<?php
	} else {
		echo "GAGAL menyimpan !!!";
	}
 ?>