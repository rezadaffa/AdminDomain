<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$id=$_POST["id"]; 
$kecamatan=$_POST["kecamatan"];
$desa=$_POST["desa"];
$fasilitas=$_POST["fasilitas"];
$domian=$_POST["domian"];
$artikel=$_POST["artikel"];
$update=$_POST["update"];

//Query edit data kedalam tabel anggota
  $sql="UPDATE data SET kecamatan='$kecamatan', desa='$desa', fasilitas='$fasilitas', domian='$domian', artikel='$artikel' where id='$id'";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	header("location:homepage.php");
	exit;
  }
else {
	echo "gagal coba lagi sampe berhasil :3 mampus";
	exit;
}  

?>