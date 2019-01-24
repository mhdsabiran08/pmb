<?php
	require_once '../koneksi.php';
	$id_data_maba= $_GET['id_data_maba'];

	$query = "DELETE FROM data_maba WHERE id_data_maba = '$id_data_maba'";
	$hapus = mysqli_query($connect,$query);
	if ($hapus) {
		header('location: ../../index.php?p=data-maba/kelola-data');
	} else {
		echo "GAGAL menghapus !!!";
	}
  	

?>