<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$kecamatan=$_POST["kecamatan"];
$desa=$_POST["desa"];
$fasilitas=$_POST["fasilitas"];
$domian=$_POST["domian"];
$artikel=$_POST["artikel"];
$update=$_POST["update"];

//Query input menginput data kedalam tabel anggota
  $sql="insert into data values ('','$kecamatan','$desa','$fasilitas','$domian','$artikel','$update')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	header("location:homepage.php");
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>